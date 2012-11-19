<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtCensoplagas
 *
 * @ORM\Table(name="TT_CensoPlagas")
 * @ORM\Entity
 */
class TtCensoplagas
{
    /**
     * @var integer $cplaid
     *
     * @ORM\Column(name="cplaId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cplaid;

    /**
     * @var integer $cplaconsecutivo
     *
     * @ORM\Column(name="cplaConsecutivo", type="integer", nullable=true)
     */
    private $cplaconsecutivo;

    /**
     * @var \DateTime $cplafecha
     *
     * @ORM\Column(name="cplaFecha", type="datetime", nullable=false)
     */
    private $cplafecha;

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
     * @var integer $cplalinea
     *
     * @ORM\Column(name="cplaLinea", type="smallint", nullable=false)
     */
    private $cplalinea;

    /**
     * @var integer $cplapalma
     *
     * @ORM\Column(name="cplaPalma", type="smallint", nullable=false)
     */
    private $cplapalma;

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
     * @var TmPlagas
     *
     * @ORM\ManyToOne(targetEntity="TmPlagas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plaId", referencedColumnName="plaId")
     * })
     */
    private $plaid;

    /**
     * @var TmEstadoplaga
     *
     * @ORM\ManyToOne(targetEntity="TmEstadoplaga")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eplId", referencedColumnName="eplId")
     * })
     */
    private $eplid;

    /**
     * @var integer $cplacantidad
     *
     * @ORM\Column(name="cplaCantidad", type="smallint", nullable=false)
     */
    private $cplacantidad;

    /**
     * @var string $cplaobservacion
     *
     * @ORM\Column(name="cplaObservacion", type="string", length=50, nullable=true)
     */
    private $cplaobservacion;

    /**
     * @var string $a11010601
     *
     * @ORM\Column(name="a11010601", type="string", length=22, nullable=true)
     */
    private $a11010601;

    /**
     * @var boolean $exportado
     *
     * @ORM\Column(name="exportado", type="boolean", nullable=true)
     */
    private $exportado;



    /**
     * Get cplaid
     *
     * @return integer 
     */
    public function getCplaid()
    {
        return $this->cplaid;
    }

    /**
     * Set cplaconsecutivo
     *
     * @param integer $cplaconsecutivo
     * @return TtCensoplagas
     */
    public function setCplaconsecutivo($cplaconsecutivo)
    {
        $this->cplaconsecutivo = $cplaconsecutivo;
    
        return $this;
    }

    /**
     * Get cplaconsecutivo
     *
     * @return integer 
     */
    public function getCplaconsecutivo()
    {
        return $this->cplaconsecutivo;
    }

    /**
     * Set cplafecha
     *
     * @param \DateTime $cplafecha
     * @return TtCensoplagas
     */
    public function setCplafecha($cplafecha)
    {
        $this->cplafecha = $cplafecha;
    
        return $this;
    }

    /**
     * Get cplafecha
     *
     * @return \DateTime 
     */
    public function getCplafecha()
    {
        return $this->cplafecha;
    }

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TtCensoplagas
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
     * Set cplalinea
     *
     * @param integer $cplalinea
     * @return TtCensoplagas
     */
    public function setCplalinea($cplalinea)
    {
        $this->cplalinea = $cplalinea;
    
        return $this;
    }

    /**
     * Get cplalinea
     *
     * @return integer 
     */
    public function getCplalinea()
    {
        return $this->cplalinea;
    }

    /**
     * Set cplapalma
     *
     * @param integer $cplapalma
     * @return TtCensoplagas
     */
    public function setCplapalma($cplapalma)
    {
        $this->cplapalma = $cplapalma;
    
        return $this;
    }

    /**
     * Get cplapalma
     *
     * @return integer 
     */
    public function getCplapalma()
    {
        return $this->cplapalma;
    }

    /**
     * Set traid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $traid
     * @return TtCensoplagas
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
     * Set plaid
     *
     * @param sigaind\siagBundle\Entity\TmPlagas $plaid
     * @return TtCensoplagas
     */
    public function setPlaid(\sigaind\siagBundle\Entity\TmPlagas $plaid=null)
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

    /**
     * Set eplid
     *
     * @param sigaind\siagBundle\Entity\TmEstadoplaga $eplid
     * @return TtCensoplagas
     */
    public function setEplid(\sigaind\siagBundle\Entity\TmEstadoplaga $eplid=null)
    {
        $this->eplid = $eplid;
    
        return $this;
    }

    /**
     * Get eplid
     *
     * @return sigaind\siagBundle\Entity\TmEstadoplaga 
     */
    public function getEplid()
    {
        return $this->eplid;
    }

    /**
     * Set cplacantidad
     *
     * @param integer $cplacantidad
     * @return TtCensoplagas
     */
    public function setCplacantidad($cplacantidad)
    {
        $this->cplacantidad = $cplacantidad;
    
        return $this;
    }

    /**
     * Get cplacantidad
     *
     * @return integer 
     */
    public function getCplacantidad()
    {
        return $this->cplacantidad;
    }

    /**
     * Set cplaobservacion
     *
     * @param string $cplaobservacion
     * @return TtCensoplagas
     */
    public function setCplaobservacion($cplaobservacion)
    {
        $this->cplaobservacion = $cplaobservacion;
    
        return $this;
    }

    /**
     * Get cplaobservacion
     *
     * @return string 
     */
    public function getCplaobservacion()
    {
        return $this->cplaobservacion;
    }

    /**
     * Set a11010601
     *
     * @param string $a11010601
     * @return TtCensoplagas
     */
    public function setA11010601($a11010601)
    {
        $this->a11010601 = $a11010601;
    
        return $this;
    }

    /**
     * Get a11010601
     *
     * @return string 
     */
    public function getA11010601()
    {
        return $this->a11010601;
    }

    /**
     * Set exportado
     *
     * @param boolean $exportado
     * @return TtCensoplagas
     */
    public function setExportado($exportado)
    {
        $this->exportado = $exportado;
    
        return $this;
    }

    /**
     * Get exportado
     *
     * @return boolean 
     */
    public function getExportado()
    {
        return $this->exportado;
    }
}