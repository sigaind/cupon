<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTramparhynchop
 *
 * @ORM\Table(name="TM_TrampaRhynchop")
 * @ORM\Entity
 */
class TmTramparhynchop
{
    /**
     * @var integer $trhyid
     *
     * @ORM\Column(name="trhyId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $trhyid;

    /**
     * @var string $codtampa
     *
     * @ORM\Column(name="codTampa", type="string", length=10, nullable=true)
     */
    private $codtampa;

    /**
     * @var integer $linea
     *
     * @ORM\Column(name="linea", type="integer", nullable=true)
     */
    private $linea;

    /**
     * @var integer $palma
     *
     * @ORM\Column(name="palma", type="integer", nullable=true)
     */
    private $palma;

    /**
     * @var integer $cebid
     *
     * @ORM\Column(name="cebId", type="integer", nullable=true)
     */
    private $cebid;

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
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="empId")
     * })
     */
    private $empresa;

    /**
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoregistro_id", referencedColumnName="estId")
     * })
     */
    private $estadoregistro;



    /**
     * Get trhyid
     *
     * @return integer 
     */
    public function getTrhyid()
    {
        return $this->trhyid;
    }

    /**
     * Set codtampa
     *
     * @param string $codtampa
     * @return TmTramparhynchop
     */
    public function setCodtampa($codtampa)
    {
        $this->codtampa = $codtampa;
    
        return $this;
    }

    /**
     * Get codtampa
     *
     * @return string 
     */
    public function getCodtampa()
    {
        return $this->codtampa;
    }

    

    /**
     * Set linea
     *
     * @param integer $linea
     * @return TmTramparhynchop
     */
    public function setLinea($linea)
    {
        $this->linea = $linea;
    
        return $this;
    }

    /**
     * Get linea
     *
     * @return integer 
     */
    public function getLinea()
    {
        return $this->linea;
    }

    /**
     * Set palma
     *
     * @param integer $palma
     * @return TmTramparhynchop
     */
    public function setPalma($palma)
    {
        $this->palma = $palma;
    
        return $this;
    }

    /**
     * Get palma
     *
     * @return integer 
     */
    public function getPalma()
    {
        return $this->palma;
    }

    /**
     * Set cebid
     *
     * @param integer $cebid
     * @return TmTramparhynchop
     */
    public function setCebid($cebid)
    {
        $this->cebid = $cebid;
    
        return $this;
    }

    /**
     * Get cebid
     *
     * @return integer 
     */
    public function getCebid()
    {
        return $this->cebid;
    }

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TmTramparhynchop
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
     * Set empresa
     *
     * @param sigaind\siagBundle\Entity\Empresa $empresa
     * @return TmTramparhynchop
     */
    public function setEmpresa(\sigaind\siagBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;
    
        return $this;
    }

    /**
     * Get empresa
     *
     * @return sigaind\siagBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set estadoregistro
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro
     * @return TmTramparhynchop
     */
    public function setEstadoregistro(\sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro = null)
    {
        $this->estadoregistro = $estadoregistro;
    
        return $this;
    }

    /**
     * Get estadoregistro
     *
     * @return sigaind\siagBundle\Entity\SysEstadoregistros 
     */
    public function getEstadoregistro()
    {
        return $this->estadoregistro;
    }
    
    public function __toString()
    {
        return $this->getCodtampa();
    }
}