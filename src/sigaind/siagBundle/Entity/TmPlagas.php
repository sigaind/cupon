<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmPlagas
 *
 * @ORM\Table(name="TM_Plagas")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmPlagasRepository")
 */
class TmPlagas
{
    /**
     * @var integer $plaid
     *
     * @ORM\Column(name="plaId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $plaid;

    /**
     * @var string $planombre
     *
     * @ORM\Column(name="plaNombre", type="string", length=20, nullable=false)
     */
    private $planombre;

    /**
     * @var integer $prioridad
     *
     * @ORM\Column(name="prioridad", type="smallint", nullable=true)
     */
    private $prioridad;

    /**
     * @var string $plasigla
     *
     * @ORM\Column(name="plaSigla", type="string", length=5, nullable=true)
     */
    private $plasigla;

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
     * @var TmTipoplagas
     *
     * @ORM\ManyToOne(targetEntity="TmTipoplagas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tplId", referencedColumnName="tplId")
     * })
     */
    private $tplid;



    /**
     * Get plaid
     *
     * @return integer 
     */
    public function getPlaid()
    {
        return $this->plaid;
    }

    /**
     * Set planombre
     *
     * @param string $planombre
     * @return TmPlagas
     */
    public function setPlanombre($planombre)
    {
        $this->planombre = $planombre;
    
        return $this;
    }

    /**
     * Get planombre
     *
     * @return string 
     */
    public function getPlanombre()
    {
        return $this->planombre;
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return TmPlagas
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
     * Set plasigla
     *
     * @param string $plasigla
     * @return TmPlagas
     */
    public function setPlasigla($plasigla)
    {
        $this->plasigla = $plasigla;
    
        return $this;
    }

    /**
     * Get plasigla
     *
     * @return string 
     */
    public function getPlasigla()
    {
        return $this->plasigla;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmPlagas
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
     * @return TmPlagas
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
     * Set tplid
     *
     * @param sigaind\siagBundle\Entity\TmTipoplagas $tplid
     * @return TmPlagas
     */
    public function setTplid(\sigaind\siagBundle\Entity\TmTipoplagas $tplid = null)
    {
        $this->tplid = $tplid;
    
        return $this;
    }

    /**
     * Get tplid
     *
     * @return sigaind\siagBundle\Entity\TmTipoplagas 
     */
    public function getTplid()
    {
        return $this->tplid;
    }
    
    public function __toString()
    {
        return $this->getPlanombre();
    }
}