<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmZonaplantacion
 *
 * @ORM\Table(name="TM_ZonaPlantacion")
 * @ORM\Entity
 */
class TmZonaplantacion
{
    /**
     * @var integer $zonid
     *
     * @ORM\Column(name="zonId", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zonid;

    /**
     * @var string $zoncodigo
     *
     * @ORM\Column(name="zonCodigo", type="string", length=50, nullable=false)
     */
    private $zoncodigo;

    /**
     * @var string $zonnombre
     *
     * @ORM\Column(name="zonNombre", type="string", length=20, nullable=false)
     */
    private $zonnombre;

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
     * Get zonid
     *
     * @return integer 
     */
    public function getZonid()
    {
        return $this->zonid;
    }

    /**
     * Set zoncodigo
     *
     * @param string $zoncodigo
     * @return TmZonaplantacion
     */
    public function setZoncodigo($zoncodigo)
    {
        $this->zoncodigo = $zoncodigo;
    
        return $this;
    }

    /**
     * Get zoncodigo
     *
     * @return string 
     */
    public function getZoncodigo()
    {
        return $this->zoncodigo;
    }

    /**
     * Set zonnombre
     *
     * @param string $zonnombre
     * @return TmZonaplantacion
     */
    public function setZonnombre($zonnombre)
    {
        $this->zonnombre = $zonnombre;
    
        return $this;
    }

    /**
     * Get zonnombre
     *
     * @return string 
     */
    public function getZonnombre()
    {
        return $this->zonnombre;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmZonaplantacion
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
     * @return TmZonaplantacion
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
        return $this->getZonnombre();
    }
}