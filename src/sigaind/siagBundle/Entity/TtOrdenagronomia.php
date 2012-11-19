<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtOrdenagronomia
 *
 * @ORM\Table(name="TT_OrdenAgronomia")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TtOrdenagronomiaRepository")
 */
class TtOrdenagronomia
{
    /**
     * @var integer $oreid
     *
     * @ORM\Column(name="oreId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oreid;

    /**
     * @var integer $empid
     *
     * @ORM\Column(name="empId", type="smallint", nullable=true)
     */
    private $empid;

    /**
     * @var \DateTime $orefecha
     *
     * @ORM\Column(name="oreFecha", type="datetime", nullable=false)
     */
    private $orefecha;

     /**
     * @var \DateTime $orefechainicio
     *
     * @ORM\Column(name="oreFechaInicio", type="date", nullable=true)
     */
    private $orefechainicio;

    /**
     * @var \DateTime $orefechafin
     *
     * @ORM\Column(name="oreFechaFin", type="date", nullable=true)
     */
    private $orefechafin;
    
    
    
    /**
     * @var \DateTime $orefechainicioreal
     *
     * @ORM\Column(name="oreFechaInicioReal", type="date", nullable=true)
     */
    private $orefechainicioreal;

    /**
     * @var \DateTime $orefechafinreal
     *
     * @ORM\Column(name="oreFechaFinReal", type="date", nullable=true)
     */
    private $orefechafinreal;

    /**
     * @var float $orecantidadacumulada
     *
     * @ORM\Column(name="oreCantidadAcumulada", type="decimal", nullable=true)
     */
    private $orecantidadacumulada;

    /**
     * @var float $orediasestimados
     *
     * @ORM\Column(name="oreDiasEstimados", type="decimal", nullable=true)
     */
    private $orediasestimados;

    /**
     * @var integer $orecerrada
     *
     * @ORM\Column(name="oreCerrada", type="smallint", length=1, nullable=true)
     */
    private $orecerrada;

    /**
     * @var float $orecantidadejecutar
     *
     * @ORM\Column(name="oreCantidadEjecutar", type="decimal", nullable=true)
     */
    private $orecantidadejecutar;

    /**
     * @var TmTrabajadores
     *
     * @ORM\ManyToOne(targetEntity="TmTrabajadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supId", referencedColumnName="traId")
     * })
     */
    private $supid;

    /**
     * @var TmLotes
     *
     * @ORM\ManyToOne(targetEntity="TmLotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lotId", referencedColumnName="id")
     * })
     */
    private $lotid;


    /**
     * @var TmTipolabor
     *
     * @ORM\ManyToOne(targetEntity="TmTipolabor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="labId", referencedColumnName="id")
     * })
     */
    private $labid;
    
    

    /**
     * Get oreid
     *
     * @return integer 
     */
    public function getOreid()
    {
        return $this->oreid;
    }

    /**
     * Set empid
     *
     * @param integer $empid
     * @return TtOrdenagronomia
     */
    public function setEmpid($empid)
    {
        $this->empid = $empid;
    
        return $this;
    }

    /**
     * Get empid
     *
     * @return integer 
     */
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * Set orefecha
     *
     * @param \DateTime $orefecha
     * @return TtOrdenagronomia
     */
    public function setOrefecha($orefecha)
    {
        $this->orefecha = $orefecha;
    
        return $this;
    }

    /**
     * Get orefecha
     *
     * @return \DateTime 
     */
    public function getOrefecha()
    {
        return $this->orefecha;
    }

    
    /**
     * Set orefechainicio
     *
     * @param \DateTime $orefechainicio
     * @return TtOrdenagronomia
     */
    public function setOrefechainicio($orefechainicio)
    {
        $this->orefechainicio = $orefechainicio;
    
        return $this;
    }

    /**
     * Get orefechainicio
     *
     * @return \DateTime 
     */
    public function getOrefechainicio()
    {
        return $this->orefechainicio;
    }

    /**
     * Set orefechafin
     *
     * @param \DateTime $orefechafin
     * @return TtOrdenagronomia
     */
    public function setOrefechafin($orefechafin)
    {
        $this->orefechafin = $orefechafin;
    
        return $this;
    }

    /**
     * Get orefechafin
     *
     * @return \DateTime 
     */
    public function getOrefechafin()
    {
        return $this->orefechafin;
    }
    
    
    /**
     * Set orefechainicioreal
     *
     * @param \DateTime $orefechainicioreal
     * @return TtOrdenagronomia
     */
    public function setOrefechainicioreal($orefechainicioreal)
    {
        $this->orefechainicioreal = $orefechainicioreal;
    
        return $this;
    }

    /**
     * Get orefechainicioreal
     *
     * @return \DateTime 
     */
    public function getOrefechainicioreal()
    {
        return $this->orefechainicioreal;
    }
    
    
    /**
     * Set orefechafinreal
     *
     * @param \DateTime $orefechafinreal
     * @return TtOrdenagronomia
     */
    public function setOrefechafinreal($orefechafinreal)
    {
        $this->orefechafinreal = $orefechafinreal;
    
        return $this;
    }

    /**
     * Get orefechafinreal
     *
     * @return \DateTime 
     */
    public function getOrefechafinreal()
    {
        return $this->orefechafinreal;
    }

    /**
     * Set orecantidadacumulada
     *
     * @param float $orecantidadacumulada
     * @return TtOrdenagronomia
     */
    public function setOrecantidadacumulada($orecantidadacumulada)
    {
        $this->orecantidadacumulada = $orecantidadacumulada;
    
        return $this;
    }

    /**
     * Get orecantidadacumulada
     *
     * @return float 
     */
    public function getOrecantidadacumulada()
    {
        return $this->orecantidadacumulada;
    }

    /**
     * Set orediasestimados
     *
     * @param float $orediasestimados
     * @return TtOrdenagronomia
     */
    public function setOrediasestimados($orediasestimados)
    {
        $this->orediasestimados = $orediasestimados;
    
        return $this;
    }

    /**
     * Get orediasestimados
     *
     * @return float 
     */
    public function getOrediasestimados()
    {
        return $this->orediasestimados;
    }

    /**
     * Set orecerrada
     *
     * @param string $orecerrada
     * @return TtOrdenagronomia
     */
    public function setOrecerrada($orecerrada)
    {
        $this->orecerrada = $orecerrada;
    
        return $this;
    }

    /**
     * Get orecerrada
     *
     * @return string 
     */
    public function getOrecerrada()
    {
        return $this->orecerrada;
    }

    /**
     * Set orecantidadejecutar
     *
     * @param float $orecantidadejecutar
     * @return TtOrdenagronomia
     */
    public function setOrecantidadejecutar($orecantidadejecutar)
    {
        $this->orecantidadejecutar = $orecantidadejecutar;
    
        return $this;
    }

    /**
     * Get orecantidadejecutar
     *
     * @return float 
     */
    public function getOrecantidadejecutar()
    {
        return $this->orecantidadejecutar;
    }

    /**
     * Set supid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $supid
     * @return TtOrdenagronomia
     */
    public function setSupid(\sigaind\siagBundle\Entity\TmTrabajadores $supid=null)
    {
        $this->supid = $supid;
    
        return $this;
    }

    /**
     * Get supid
     *
     * @return sigaind\siagBundle\Entity\TmTrabajadores 
     */
    public function getSupid()
    {
        return $this->supid;
    }

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TtOrdenagronomia
     */
    public function setLotid(\sigaind\siagBundle\Entity\TmLotes $lotid = null)
    {
        $this->lotid = $lotid;
    
        return $this;
    }

    /**
     * Get lotid
     *
     * @return sigaind\siagBundle\Entity\TmLotes 
     */
    public function getLotid()
    {
        return $this->lotid;
    }
    
    
    /**
     * Set labid
     *
     * @param sigaind\siagBundle\Entity\TmTipolabor $labid
     * @return TtOrdenagronomia
     */
    public function setLabid(\sigaind\siagBundle\Entity\TmTipolabor $labid = null)
    {
        $this->labid = $labid;
    
        return $this;
    }

    /**
     * Get labid
     *
     * @return sigaind\siagBundle\Entity\TmTipolabor
     */
    public function getLabid()
    {
        return $this->labid;
    }
}