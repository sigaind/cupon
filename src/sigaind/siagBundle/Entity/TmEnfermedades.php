<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmEnfermedades
 *
 * @ORM\Table(name="TM_Enfermedades")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmEnfermedadesRepository")
 */
class TmEnfermedades
{
    /**
     * @var integer $enfid
     *
     * @ORM\Column(name="enfid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enfid;

    /**
     * @var string $enfcodigo
     *
     * @ORM\Column(name="enfCodigo", type="string", length=10, nullable=false)
     */
    private $enfcodigo;

    /**
     * @var string $enfnombre
     *
     * @ORM\Column(name="enfNombre", type="string", length=20, nullable=false)
     */
    private $enfnombre;

    /**
     * @var integer $prioridad
     *
     * @ORM\Column(name="prioridad", type="integer", nullable=true)
     */
    private $prioridad;

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
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empId", referencedColumnName="empId")
     * })
     */
    private $empid;



    /**
     * Get enfid
     *
     * @return integer 
     */
    public function getEnfid()
    {
        return $this->enfid;
    }

    /**
     * Set enfcodigo
     *
     * @param string $enfcodigo
     * @return TmEnfermedades
     */
    public function setEnfcodigo($enfcodigo)
    {
        $this->enfcodigo = $enfcodigo;
    
        return $this;
    }

    /**
     * Get enfcodigo
     *
     * @return string 
     */
    public function getEnfcodigo()
    {
        return $this->enfcodigo;
    }

    /**
     * Set enfnombre
     *
     * @param string $enfnombre
     * @return TmEnfermedades
     */
    public function setEnfnombre($enfnombre)
    {
        $this->enfnombre = $enfnombre;
    
        return $this;
    }

    /**
     * Get enfnombre
     *
     * @return string 
     */
    public function getEnfnombre()
    {
        return $this->enfnombre;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return TmEnfermedades
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
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmEnfermedades
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
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmEnfermedades
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
    
    public function __toString()
    {
        return $this->getEnfnombre();
    }
}