<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTrabajadores
 *
 * @ORM\Table(name="TM_Trabajadores")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmTrabajadoresRepository")
 */
class TmTrabajadores
{
    /**
     * @var integer $traid
     *
     * @ORM\Column(name="traId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traid;

    /**
     * @var string $tracodigo
     *
     * @ORM\Column(name="traCodigo", type="string", length=10, nullable=false)
     */
    private $tracodigo;

    /**
     * @var string $tracedula
     *
     * @ORM\Column(name="traCedula", type="string", length=20, nullable=true)
     */
    private $tracedula;

    /**
     * @var string $tranombre
     *
     * @ORM\Column(name="traNombre", type="string", length=30, nullable=false)
     */
    private $tranombre;

    /**
     * @var string $tracargo
     *
     * @ORM\Column(name="traCargo", type="string", length=20, nullable=true)
     */
    private $tracargo;

    /**
     * @var TmEmpresacontratista
     *
     * @ORM\ManyToOne(targetEntity="TmEmpresacontratista")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecoId", referencedColumnName="ecoId")
     * })
     */
    private $ecoid;

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
     * Get traid
     *
     * @return integer 
     */
    public function getTraid()
    {
        return $this->traid;
    }

    /**
     * Set tracodigo
     *
     * @param string $tracodigo
     * @return TmTrabajadores
     */
    public function setTracodigo($tracodigo)
    {
        $this->tracodigo = $tracodigo;
    
        return $this;
    }

    /**
     * Get tracodigo
     *
     * @return string 
     */
    public function getTracodigo()
    {
        return $this->tracodigo;
    }

    /**
     * Set tracedula
     *
     * @param string $tracedula
     * @return TmTrabajadores
     */
    public function setTracedula($tracedula)
    {
        $this->tracedula = $tracedula;
    
        return $this;
    }

    /**
     * Get tracedula
     *
     * @return string 
     */
    public function getTracedula()
    {
        return $this->tracedula;
    }

    /**
     * Set tranombre
     *
     * @param string $tranombre
     * @return TmTrabajadores
     */
    public function setTranombre($tranombre)
    {
        $this->tranombre = $tranombre;
    
        return $this;
    }

    /**
     * Get tranombre
     *
     * @return string 
     */
    public function getTranombre()
    {
        return $this->tranombre;
    }

    /**
     * Set tracargo
     *
     * @param string $tracargo
     * @return TmTrabajadores
     */
    public function setTracargo($tracargo)
    {
        $this->tracargo = $tracargo;
    
        return $this;
    }

    /**
     * Get tracargo
     *
     * @return string 
     */
    public function getTracargo()
    {
        return $this->tracargo;
    }

    /**
     * Set ecoid
     *
     * @param sigaind\siagBundle\Entity\TmEmpresacontratista $ecoid
     * @return TmTrabajadores
     */
    public function setEcoid(\sigaind\siagBundle\Entity\TmEmpresacontratista $ecoid = null)
    {
        $this->ecoid = $ecoid;
    
        return $this;
    }

    /**
     * Get ecoid
     *
     * @return sigaind\siagBundle\Entity\TmEmpresacontratista 
     */
    public function getEcoid()
    {
        return $this->ecoid;
    }

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmTrabajadores
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
        return $this->getTracodigo();
    }
}