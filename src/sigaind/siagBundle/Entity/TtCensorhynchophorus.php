<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtCensorhynchophorus
 *
 * @ORM\Table(name="TT_CensoRhynchophorus")
 * @ORM\Entity
 */
class TtCensorhynchophorus
{
    /**
     * @var integer $crhyid
     *
     * @ORM\Column(name="crhyId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $crhyid;

    /**
     * @var integer $crhyconsecutivo
     *
     * @ORM\Column(name="crhyConsecutivo", type="integer", nullable=true)
     */
    private $crhyconsecutivo;

    /**
     * @var \DateTime $crhyfecha
     *
     * @ORM\Column(name="crhyFecha", type="datetime", nullable=true)
     */
    private $crhyfecha;

    /**
     * @var integer $traid
     *
     * @ORM\Column(name="traId", type="integer", nullable=true)
     */
    private $traid;

    /**
     * @var integer $crhynumeromachos
     *
     * @ORM\Column(name="crhyNumeroMachos", type="integer", nullable=true)
     */
    private $crhynumeromachos;

    /**
     * @var integer $crhynumerohembras
     *
     * @ORM\Column(name="crhyNumeroHembras", type="integer", nullable=true)
     */
    private $crhynumerohembras;

    /**
     * @var boolean $crhymttocebo
     *
     * @ORM\Column(name="crhyMttoCebo", type="boolean", nullable=true)
     */
    private $crhymttocebo;

    /**
     * @var boolean $crhymttotrampa
     *
     * @ORM\Column(name="crhyMttoTrampa", type="boolean", nullable=true)
     */
    private $crhymttotrampa;

    /**
     * @var TmTramparhynchop
     *
     * @ORM\ManyToOne(targetEntity="TmTramparhynchop")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTrampaRhyncho", referencedColumnName="trhyId")
     * })
     */
    private $idtramparhyncho;



    /**
     * Get crhyid
     *
     * @return integer 
     */
    public function getCrhyid()
    {
        return $this->crhyid;
    }

    /**
     * Set crhyconsecutivo
     *
     * @param integer $crhyconsecutivo
     * @return TtCensorhynchophorus
     */
    public function setCrhyconsecutivo($crhyconsecutivo)
    {
        $this->crhyconsecutivo = $crhyconsecutivo;
    
        return $this;
    }

    /**
     * Get crhyconsecutivo
     *
     * @return integer 
     */
    public function getCrhyconsecutivo()
    {
        return $this->crhyconsecutivo;
    }

    /**
     * Set crhyfecha
     *
     * @param \DateTime $crhyfecha
     * @return TtCensorhynchophorus
     */
    public function setCrhyfecha($crhyfecha)
    {
        $this->crhyfecha = $crhyfecha;
    
        return $this;
    }

    /**
     * Get crhyfecha
     *
     * @return \DateTime 
     */
    public function getCrhyfecha()
    {
        return $this->crhyfecha;
    }

    /**
     * Set traid
     *
     * @param integer $traid
     * @return TtCensorhynchophorus
     */
    public function setTraid($traid)
    {
        $this->traid = $traid;
    
        return $this;
    }

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
     * Set crhynumeromachos
     *
     * @param integer $crhynumeromachos
     * @return TtCensorhynchophorus
     */
    public function setCrhynumeromachos($crhynumeromachos)
    {
        $this->crhynumeromachos = $crhynumeromachos;
    
        return $this;
    }

    /**
     * Get crhynumeromachos
     *
     * @return integer 
     */
    public function getCrhynumeromachos()
    {
        return $this->crhynumeromachos;
    }

    /**
     * Set crhynumerohembras
     *
     * @param integer $crhynumerohembras
     * @return TtCensorhynchophorus
     */
    public function setCrhynumerohembras($crhynumerohembras)
    {
        $this->crhynumerohembras = $crhynumerohembras;
    
        return $this;
    }

    /**
     * Get crhynumerohembras
     *
     * @return integer 
     */
    public function getCrhynumerohembras()
    {
        return $this->crhynumerohembras;
    }

    /**
     * Set crhymttocebo
     *
     * @param boolean $crhymttocebo
     * @return TtCensorhynchophorus
     */
    public function setCrhymttocebo($crhymttocebo)
    {
        $this->crhymttocebo = $crhymttocebo;
    
        return $this;
    }

    /**
     * Get crhymttocebo
     *
     * @return boolean 
     */
    public function getCrhymttocebo()
    {
        return $this->crhymttocebo;
    }

    /**
     * Set crhymttotrampa
     *
     * @param boolean $crhymttotrampa
     * @return TtCensorhynchophorus
     */
    public function setCrhymttotrampa($crhymttotrampa)
    {
        $this->crhymttotrampa = $crhymttotrampa;
    
        return $this;
    }

    /**
     * Get crhymttotrampa
     *
     * @return boolean 
     */
    public function getCrhymttotrampa()
    {
        return $this->crhymttotrampa;
    }

    /**
     * Set idtramparhyncho
     *
     * @param sigaind\siagBundle\Entity\TmTramparhynchop $idtramparhyncho
     * @return TtCensorhynchophorus
     */
    public function setIdtramparhyncho(\sigaind\siagBundle\Entity\TmTramparhynchop $idtramparhyncho = null)
    {
        $this->idtramparhyncho = $idtramparhyncho;
    
        return $this;
    }

    /**
     * Get idtramparhyncho
     *
     * @return sigaind\siagBundle\Entity\TmTramparhynchop 
     */
    public function getIdtramparhyncho()
    {
        return $this->idtramparhyncho;
    }
}