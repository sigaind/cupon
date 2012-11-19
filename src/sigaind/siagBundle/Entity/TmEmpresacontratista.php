<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmEmpresacontratista
 *
 * @ORM\Table(name="TM_EmpresaContratista")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmEmpresacontratistaRepository")
 */
class TmEmpresacontratista
{
    /**
     * @var integer $ecoid
     *
     * @ORM\Column(name="ecoId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ecoid;

    /**
     * @var string $ecocodigo
     *
     * @ORM\Column(name="ecoCodigo", type="string", length=10, nullable=false)
     */
    private $ecocodigo;

    /**
     * @var string $econombre
     *
     * @ORM\Column(name="ecoNombre", type="string", length=30, nullable=false)
     */
    private $econombre;

    /**
     * @var string $econit
     *
     * @ORM\Column(name="ecoNit", type="string", length=20, nullable=false)
     */
    private $econit;

    /**
     * @var string $ecorepresentante
     *
     * @ORM\Column(name="ecoRepresentante", type="string", length=30, nullable=false)
     */
    private $ecorepresentante;

    /**
     * @var string $econitrepresentante
     *
     * @ORM\Column(name="ecoNitRepresentante", type="string", length=20, nullable=true)
     */
    private $econitrepresentante;


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
     * Get ecoid
     *
     * @return integer 
     */
    public function getEcoid()
    {
        return $this->ecoid;
    }

    /**
     * Set ecocodigo
     *
     * @param string $ecocodigo
     * @return TmEmpresacontratista
     */
    public function setEcocodigo($ecocodigo)
    {
        $this->ecocodigo = $ecocodigo;
    
        return $this;
    }

    /**
     * Get ecocodigo
     *
     * @return string 
     */
    public function getEcocodigo()
    {
        return $this->ecocodigo;
    }

    /**
     * Set econombre
     *
     * @param string $econombre
     * @return TmEmpresacontratista
     */
    public function setEconombre($econombre)
    {
        $this->econombre = $econombre;
    
        return $this;
    }

    /**
     * Get econombre
     *
     * @return string 
     */
    public function getEconombre()
    {
        return $this->econombre;
    }

    /**
     * Set econit
     *
     * @param string $econit
     * @return TmEmpresacontratista
     */
    public function setEconit($econit)
    {
        $this->econit = $econit;
    
        return $this;
    }

    /**
     * Get econit
     *
     * @return string 
     */
    public function getEconit()
    {
        return $this->econit;
    }

    /**
     * Set ecorepresentante
     *
     * @param string $ecorepresentante
     * @return TmEmpresacontratista
     */
    public function setEcorepresentante($ecorepresentante)
    {
        $this->ecorepresentante = $ecorepresentante;
    
        return $this;
    }

    /**
     * Get ecorepresentante
     *
     * @return string 
     */
    public function getEcorepresentante()
    {
        return $this->ecorepresentante;
    }

    /**
     * Set econitrepresentante
     *
     * @param string $econitrepresentante
     * @return TmEmpresacontratista
     */
    public function setEconitrepresentante($econitrepresentante)
    {
        $this->econitrepresentante = $econitrepresentante;
    
        return $this;
    }

    /**
     * Get econitrepresentante
     *
     * @return string 
     */
    public function getEconitrepresentante()
    {
        return $this->econitrepresentante;
    }

    
    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmEmpresacontratista
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
     * @return TmEmpresacontratista
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
        return $this->getEconombre();
    }
}