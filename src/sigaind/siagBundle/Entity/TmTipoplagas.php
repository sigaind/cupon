<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTipoplagas
 *
 * @ORM\Table(name="TM_TipoPlagas")
 * @ORM\Entity
 */
class TmTipoplagas
{
    /**
     * @var integer $tplid
     *
     * @ORM\Column(name="tplId", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tplid;

    /**
     * @var string $tplnombre
     *
     * @ORM\Column(name="tplNombre", type="string", length=50, nullable=false)
     */
    private $tplnombre;

    /**
     * @var string $tplcodigo
     *
     * @ORM\Column(name="tplCodigo", type="string", length=10, nullable=false)
     */
    private $tplcodigo;

    /**
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empId", referencedColumnName="empId")
     * })
     */
    private $empid;

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
     * Get tplid
     *
     * @return integer 
     */
    public function getTplid()
    {
        return $this->tplid;
    }

    /**
     * Set tplnombre
     *
     * @param string $tplnombre
     * @return TmTipoplagas
     */
    public function setTplnombre($tplnombre)
    {
        $this->tplnombre = $tplnombre;
    
        return $this;
    }

    /**
     * Get tplnombre
     *
     * @return string 
     */
    public function getTplnombre()
    {
        return $this->tplnombre;
    }

    /**
     * Set tplcodigo
     *
     * @param string $tplcodigo
     * @return TmTipoplagas
     */
    public function setTplcodigo($tplcodigo)
    {
        $this->tplcodigo = $tplcodigo;
    
        return $this;
    }

    /**
     * Get tplcodigo
     *
     * @return string 
     */
    public function getTplcodigo()
    {
        return $this->tplcodigo;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmTipoplagas
     */
    public function setEmpid(\sigaind\siagBundle\Entity\Empresa $empid = null)
    {
        $this->empid = $empid;
    
        return $this;
    }

    /**
     * Get empid
     *
     * @return sigaind\siagBundle\Entity\Empresa 
     */
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmTipoplagas
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
        return $this->getTplnombre();
    }
}