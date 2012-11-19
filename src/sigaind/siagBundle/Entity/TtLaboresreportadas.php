<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtLaboresreportadas
 *
 * @ORM\Table(name="TT_LaboresReportadas")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TtLaboresReportadasRepository")
 */
class TtLaboresreportadas
{
    /**
     * @var integer $lrepid
     *
     * @ORM\Column(name="lrepId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $lrepid;

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
     * @var \DateTime $lrefecha
     *
     * @ORM\Column(name="lreFecha", type="datetime", nullable=true)
     */
    private $lrefecha;

    /**
     * @var float $lrecantidad
     *
     * @ORM\Column(name="lreCantidad", type="decimal", nullable=true)
     */
    private $lrecantidad;

    /**
     * @var float $lrejornales
     *
     * @ORM\Column(name="lreJornales", type="decimal", nullable=true)
     */
    private $lrejornales;

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
     * @var integer $exportado
     *
     * @ORM\Column(name="exportado", type="integer", nullable=true)
     */
    private $exportado;

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
     * Get lrepid
     *
     * @return integer 
     */
    public function getLrepid()
    {
        return $this->lrepid;
    }

    /**
     * Set oreid
     *
     * @param sigaind\siagBundle\Entity\TtOrdenagronomia $oreid
     * @return TtLaboresreportadas
     */
    public function setOreid(\sigaind\siagBundle\Entity\TtOrdenagronomia $oreid = null)
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
     * @return TtLaboresreportadas
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
     * Set traid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $traid
     * @return TtLaboresreportadas
     */
    public function setTraid(\sigaind\siagBundle\Entity\TmTrabajadores $traid=null)
    {
        $this->traid = $traid;
    
        return $this;
    }

    /**
     * Get traid
     *
     * return sigaind\siagBundle\Entity\TmTrabajadores 
     */
    public function getTraid()
    {
        return $this->traid;
    }

    /**
     * Set labid
     *
     * @param sigaind\siagBundle\Entity\TmTipolabor $labid
     * @return TtLaboresreportadas
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
     * @return TtLaboresreportadas
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
     * Set lrefecha
     *
     * @param \DateTime $lrefecha
     * @return TtLaboresreportadas
     */
    public function setLrefecha($lrefecha)
    {
        $this->lrefecha = $lrefecha;
    
        return $this;
    }

    /**
     * Get lrefecha
     *
     * @return \DateTime 
     */
    public function getLrefecha()
    {
        return $this->lrefecha;
    }

    /**
     * Set lrecantidad
     *
     * @param float $lrecantidad
     * @return TtLaboresreportadas
     */
    public function setLrecantidad($lrecantidad)
    {
        $this->lrecantidad = $lrecantidad;
    
        return $this;
    }

    /**
     * Get lrecantidad
     *
     * @return float 
     */
    public function getLrecantidad()
    {
        return $this->lrecantidad;
    }

    /**
     * Set lrejornales
     *
     * @param float $lrejornales
     * @return TtLaboresreportadas
     */
    public function setLrejornales($lrejornales)
    {
        $this->lrejornales = $lrejornales;
    
        return $this;
    }

    /**
     * Get lrejornales
     *
     * @return float 
     */
    public function getLrejornales()
    {
        return $this->lrejornales;
    }

    /**
     * Set supid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $supid
     * @return TtLaboresreportadas
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
     * Set exportado
     *
     * @param integer $exportado
     * @return TtLaboresreportadas
     */
    public function setExportado($exportado)
    {
        $this->exportado = $exportado;
    
        return $this;
    }

    /**
     * Get exportado
     *
     * @return integer 
     */
    public function getExportado()
    {
        return $this->exportado;
    }
    
     /**
     * Set lineainicial
     *
     * @param integer $lineainicial
     * @return TtLaboresreportadas
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
     * @return TtLaboresreportadas
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