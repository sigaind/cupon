<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtLaboresreportadastemporal
 *
 * @ORM\Table(name="TT_LaboresReportadasTemporal")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TtLaboresReporTempRepository")
 * 
 */

class TtLaboresreportadastemporal
{
    /**
     * @var integer $pdmtid
     *
     * @ORM\Column(name="pdmtId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pdmtid;

    /**
     * @var TtOrdenagronomia
     *
     * @ORM\ManyToOne(targetEntity="TtOrdenagronomia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oreId", referencedColumnName="oreId")
     * })
     */
    private $oreid;

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
     * @var \DateTime $pdmtfecha
     *
     * @ORM\Column(name="pdmtFecha", type="datetime", nullable=false)
     */
    private $pdmtfecha;

     /**
     * @var TmTrabajadores
     *
     * @ORM\ManyToOne(targetEntity="TmTrabajadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="traId", referencedColumnName="traId")
     * })
     */
    private $traid;

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
     * @var TmLotes
     *
     * @ORM\ManyToOne(targetEntity="TmLotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lotId", referencedColumnName="id")
     * })
     */
    private $lotid;

    /**
     * @var float $pdmtcantidad
     *
     * @ORM\Column(name="pdmtCantidad", type="decimal", nullable=false)
     */
    private $pdmtcantidad;

    /**
     * @var integer $pdmtjornales
     *
     * @ORM\Column(name="pdmtJornales", type="integer", nullable=false)
     */
    private $pdmtjornales;

    /**
     * @var integer $supid
     *
     * @ORM\Column(name="supId", type="bigint", nullable=false)
     */
    private $supid;

    
    /**
     * @var integer $lineainicial
     *
     * @ORM\Column(name="lineaInicial", type="integer", nullable=true)
     */
    private $lineainicial;

    /**
     * @var integer $lineafinal
     *
     * @ORM\Column(name="lineaFinal", type="integer", nullable=true)
     */
    private $lineafinal;



    /**
     * Get pdmtid
     *
     * @return integer 
     */
    public function getPdmtid()
    {
        return $this->pdmtid;
    }
    
    /**
     * Set oreid
     *
     * @param sigaind\siagBundle\Entity\TtOrdenagronomia $oreid
     * @return TtLaboresreportadastemporal
     */
    public function setOreid(\sigaind\siagBundle\Entity\TtOrdenagronomia $oreid = null )
    {
        $this->oreid = $oreid;
    
        return $this;
    }

    /**
     * Get oreid
     *
     * @return sigaind\siagBundle\Entity\TtOrdenagronomia 
     */
    public function getOreid()
    {
        return $this->oreid;
    }
    
    /**
     * Set ecoid
     *
     * @param sigaind\siagBundle\Entity\TmEmpresacontratista  $ecoid
     * @return TtLaboresreportadastemporal
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
     * Set pdmtfecha
     *
     * @param \DateTime $pdmtfecha
     * @return TtLaboresreportadastemporal
     */
    public function setPdmtfecha($pdmtfecha)
    {
        $this->pdmtfecha = $pdmtfecha;
    
        return $this;
    }

    /**
     * Get pdmtfecha
     *
     * @return \DateTime 
     */
    public function getPdmtfecha()
    {
        return $this->pdmtfecha;
    }

    /**
     * Set traid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $traid
     * @return TtLaboresreportadastemporal
     */
    public function setTraid(\sigaind\siagBundle\Entity\TmTrabajadores $traid=null)
    {
        $this->traid = $traid;
    
        return $this;
    }

    /**
     * Get traid
     *
     * @return sigaind\siagBundle\Entity\TmTrabajadores 
     */
    public function getTraid()
    {
        return $this->traid;
    }

    /**
     * Set labid
     *
     * @param sigaind\siagBundle\Entity\TmTipolabor $labid
     * @return TtLaboresreportadastemporal
     */
    public function setLabid(\sigaind\siagBundle\Entity\TmTipolabor $labid=null )
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

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TtLaboresreportadastemporal
     */
    public function setLotid(\sigaind\siagBundle\Entity\TmLotes $lotid=null)
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
     * Set pdmtcantidad
     *
     * @param float $pdmtcantidad
     * @return TtLaboresreportadastemporal
     */
    public function setPdmtcantidad($pdmtcantidad)
    {
        $this->pdmtcantidad = $pdmtcantidad;
    
        return $this;
    }

    /**
     * Get pdmtcantidad
     *
     * @return float 
     */
    public function getPdmtcantidad()
    {
        return $this->pdmtcantidad;
    }

    /**
     * Set pdmtjornales
     *
     * @param integer $pdmtjornales
     * @return TtLaboresreportadastemporal
     */
    public function setPdmtjornales($pdmtjornales)
    {
        $this->pdmtjornales = $pdmtjornales;
    
        return $this;
    }

    /**
     * Get pdmtjornales
     *
     * @return integer 
     */
    public function getPdmtjornales()
    {
        return $this->pdmtjornales;
    }

    /**
     * Set supid
     *
     * @param integer $supid
     * @return TtLaboresreportadastemporal
     */
    public function setSupid($supid)
    {
        $this->supid = $supid;
    
        return $this;
    }

    /**
     * Get supid
     *
     * @return integer 
     */
    public function getSupid()
    {
        return $this->supid;
    }

    
    /**
     * Set lineainicial
     *
     * @param integer $lineainicial
     * @return TtLaboresreportadastemporal
     */
    public function setLineainicial($lineainicial)
    {
        $this->lineainicial = $lineainicial;
    
        return $this;
    }

    /**
     * Get lineainicial
     *
     * @return integer 
     */
    public function getLineainicial()
    {
        return $this->lineainicial;
    }

    /**
     * Set lineafinal
     *
     * @param integer $lineafinal
     * @return TtLaboresreportadastemporal
     */
    public function setLineafinal($lineafinal)
    {
        $this->lineafinal = $lineafinal;
    
        return $this;
    }

    /**
     * Get lineafinal
     *
     * @return integer 
     */
    public function getLineafinal()
    {
        return $this->lineafinal;
    }
}