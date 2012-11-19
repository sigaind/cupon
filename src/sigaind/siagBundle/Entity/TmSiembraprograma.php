<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmSiembraprograma
 *
 * @ORM\Table(name="TM_SiembraPrograma")
 * @ORM\Entity
 */
class TmSiembraprograma
{
    /**
     * @var integer $simid
     *
     * @ORM\Column(name="simId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $simid;

    /**
     * @var string $simnombre
     *
     * @ORM\Column(name="simNombre", type="string", length=10, nullable=false)
     */
    private $simnombre;

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
     * Get simid
     *
     * @return integer 
     */
    public function getSimid()
    {
        return $this->simid;
    }

    /**
     * Set simnombre
     *
     * @param string $simnombre
     * @return TmSiembraprograma
     */
    public function setSimnombre($simnombre)
    {
        $this->simnombre = $simnombre;
    
        return $this;
    }

    /**
     * Get simnombre
     *
     * @return string 
     */
    public function getSimnombre()
    {
        return $this->simnombre;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmSiembraprograma
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
     * @return TmSiembraprograma
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
        return $this->getSimnombre();
    }
}