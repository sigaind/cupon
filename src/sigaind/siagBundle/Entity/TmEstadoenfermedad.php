<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmEstadoenfermedad
 *
 * @ORM\Table(name="TM_EstadoEnfermedad")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmEstadoenfermedadRepository")
 */
class TmEstadoenfermedad
{
    /**
     * @var integer $eenid
     *
     * @ORM\Column(name="eenId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eenid;

    /**
     * @var string $eennombre
     *
     * @ORM\Column(name="eenNombre", type="string", length=20, nullable=false)
     */
    private $eennombre;

    /**
     * @var string $eensigla
     *
     * @ORM\Column(name="eenSigla", type="string", length=4, nullable=false)
     */
    private $eensigla;

    /**
     * @var integer $prioridad
     *
     * @ORM\Column(name="prioridad", type="smallint", nullable=true)
     */
    private $prioridad;

    /**
     * @var TmEnfermedades
     *
     * @ORM\ManyToOne(targetEntity="TmEnfermedades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enfid", referencedColumnName="enfid")
     * })
     */
    private $enfid;

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
     * Get eenid
     *
     * @return integer 
     */
    public function getEenid()
    {
        return $this->eenid;
    }

    /**
     * Set eennombre
     *
     * @param string $eennombre
     * @return TmEstadoenfermedad
     */
    public function setEennombre($eennombre)
    {
        $this->eennombre = $eennombre;
    
        return $this;
    }

    /**
     * Get eennombre
     *
     * @return string 
     */
    public function getEennombre()
    {
        return $this->eennombre;
    }

    /**
     * Set eensigla
     *
     * @param string $eensigla
     * @return TmEstadoenfermedad
     */
    public function setEensigla($eensigla)
    {
        $this->eensigla = $eensigla;
    
        return $this;
    }

    /**
     * Get eensigla
     *
     * @return string 
     */
    public function getEensigla()
    {
        return $this->eensigla;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return TmEstadoenfermedad
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
     * Set enfid
     *
     * @param sigaind\siagBundle\Entity\TmEnfermedades $enfid
     * @return TmEstadoenfermedad
     */
    public function setEnfid(\sigaind\siagBundle\Entity\TmEnfermedades $enfid = null)
    {
        $this->enfid = $enfid;
    
        return $this;
    }

    /**
     * Get enfid
     *
     * @return sigaind\siagBundle\Entity\TmEnfermedades 
     */
    public function getEnfid()
    {
        return $this->enfid;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmEstadoenfermedad
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
     * @return TmEstadoenfermedad
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
        return $this->getEennombre();
    }
}