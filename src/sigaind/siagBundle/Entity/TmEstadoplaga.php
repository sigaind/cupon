<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmEstadoplaga
 *
 * @ORM\Table(name="TM_EstadoPlaga")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmEstadoplagaRepository")
 */
class TmEstadoplaga
{
    /**
     * @var integer $eplid
     *
     * @ORM\Column(name="eplId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eplid;

    /**
     * @var string $eplnombre
     *
     * @ORM\Column(name="eplNombre", type="string", length=20, nullable=false)
     */
    private $eplnombre;

    /**
     * @var string $eplsiglas
     *
     * @ORM\Column(name="eplSiglas", type="string", length=4, nullable=false)
     */
    private $eplsiglas;

    /**
     * @var float $eplnivelcritico
     *
     * @ORM\Column(name="eplNivelCritico", type="decimal", nullable=true)
     */
    private $eplnivelcritico;

    /**
     * @var integer $prioridad
     *
     * @ORM\Column(name="prioridad", type="smallint", nullable=true)
     */
    private $prioridad;

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
     * @var TmPlagas
     *
     * @ORM\ManyToOne(targetEntity="TmPlagas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plaId", referencedColumnName="plaId")
     * })
     */
    private $plaid;



    /**
     * Get eplid
     *
     * @return integer 
     */
    public function getEplid()
    {
        return $this->eplid;
    }

    /**
     * Set eplnombre
     *
     * @param string $eplnombre
     * @return TmEstadoplaga
     */
    public function setEplnombre($eplnombre)
    {
        $this->eplnombre = $eplnombre;
    
        return $this;
    }

    /**
     * Get eplnombre
     *
     * @return string 
     */
    public function getEplnombre()
    {
        return $this->eplnombre;
    }

    /**
     * Set eplsiglas
     *
     * @param string $eplsiglas
     * @return TmEstadoplaga
     */
    public function setEplsiglas($eplsiglas)
    {
        $this->eplsiglas = $eplsiglas;
    
        return $this;
    }

    /**
     * Get eplsiglas
     *
     * @return string 
     */
    public function getEplsiglas()
    {
        return $this->eplsiglas;
    }

    /**
     * Set eplnivelcritico
     *
     * @param float $eplnivelcritico
     * @return TmEstadoplaga
     */
    public function setEplnivelcritico($eplnivelcritico)
    {
        $this->eplnivelcritico = $eplnivelcritico;
    
        return $this;
    }

    /**
     * Get eplnivelcritico
     *
     * @return float 
     */
    public function getEplnivelcritico()
    {
        return $this->eplnivelcritico;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return TmEstadoplaga
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmEstadoplaga
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
     * @return TmEstadoplaga
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

    /**
     * Set plaid
     *
     * @param sigaind\siagBundle\Entity\TmPlagas $plaid
     * @return TmEstadoplaga
     */
    public function setPlaid(\sigaind\siagBundle\Entity\TmPlagas $plaid = null)
    {
        $this->plaid = $plaid;
    
        return $this;
    }

    /**
     * Get plaid
     *
     * @return sigaind\siagBundle\Entity\TmPlagas 
     */
    public function getPlaid()
    {
        return $this->plaid;
    }
    
    public function __toString()
    {
        return $this->getEplnombre();
    }
}