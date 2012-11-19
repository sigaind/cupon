<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmMaterial
 *
 * @ORM\Table(name="TM_Material")
 * @ORM\Entity
 */
class TmMaterial
{
    /**
     * @var integer $matid
     *
     * @ORM\Column(name="matId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matid;

    /**
     * @var string $matcodigo
     *
     * @ORM\Column(name="matCodigo", type="string", length=50, nullable=true)
     */
    private $matcodigo;

    /**
     * @var string $matnombre
     *
     * @ORM\Column(name="matNombre", type="string", length=50, nullable=false)
     */
    private $matnombre;

    /**
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estId", referencedColumnName="estId")
     * })
     */
    private $estid;



    /**
     * Get matid
     *
     * @return integer 
     */
    public function getMatid()
    {
        return $this->matid;
    }

    /**
     * Set matcodigo
     *
     * @param string $matcodigo
     * @return TmMaterial
     */
    public function setMatcodigo($matcodigo)
    {
        $this->matcodigo = $matcodigo;
    
        return $this;
    }

    /**
     * Get matcodigo
     *
     * @return string 
     */
    public function getMatcodigo()
    {
        return $this->matcodigo;
    }

    /**
     * Set matnombre
     *
     * @param string $matnombre
     * @return TmMaterial
     */
    public function setMatnombre($matnombre)
    {
        $this->matnombre = $matnombre;
    
        return $this;
    }

    /**
     * Get matnombre
     *
     * @return string 
     */
    public function getMatnombre()
    {
        return $this->matnombre;
    }

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmMaterial
     */
    public function setEstid(\sigaind\siagBundle\Entity\SysEstadoregistros $estid = null)
    {
        $this->estid = $estid;
    
        return $this;
    }

    /**
     * Get estid
     *
     * @return sigaind\siagBundle\Entity\SysEstadoregistros 
     */
    public function getEstid()
    {
        return $this->estid;
    }
    
    public function __toString()
    {
        return $this->getMatnombre();
    }
}