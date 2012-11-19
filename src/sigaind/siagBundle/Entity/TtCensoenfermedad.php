<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtCensoenfermedad
 *
 * @ORM\Table(name="TT_CensoEnfermedad")
 * @ORM\Entity
 */
class TtCensoenfermedad
{
    /**
     * @var integer $cenid
     *
     * @ORM\Column(name="cenId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cenid;

    /**
     * @var integer $consecutivo
     *
     * @ORM\Column(name="consecutivo", type="integer", nullable=true)
     */
    private $consecutivo;

    /**
     * @var \DateTime $cenfecha
     *
     * @ORM\Column(name="cenFecha", type="datetime", nullable=false)
     */
    private $cenfecha;

    /**
     * @var integer $lotid
     *
     * @ORM\Column(name="lotId", type="integer", nullable=false)
     */
    private $lotid;

    /**
     * @var integer $traid
     *
     * @ORM\Column(name="traId", type="integer", nullable=false)
     */
    private $traid;

    /**
     * @var integer $cenlinea
     *
     * @ORM\Column(name="cenLinea", type="smallint", nullable=false)
     */
    private $cenlinea;

    /**
     * @var integer $cenpalma
     *
     * @ORM\Column(name="cenPalma", type="smallint", nullable=false)
     */
    private $cenpalma;

    /**
     * @var integer $enfid
     *
     * @ORM\Column(name="enfId", type="integer", nullable=false)
     */
    private $enfid;

    /**
     * @var integer $eenid
     *
     * @ORM\Column(name="eenId", type="integer", nullable=false)
     */
    private $eenid;

    /**
     * @var string $cenobservacion
     *
     * @ORM\Column(name="cenObservacion", type="string", length=200, nullable=true)
     */
    private $cenobservacion;

    /**
     * @var string $a11010601
     *
     * @ORM\Column(name="a11010601", type="string", length=22, nullable=true)
     */
    private $a11010601;

    /**
     * @var integer $exportado
     *
     * @ORM\Column(name="exportado", type="smallint", nullable=true)
     */
    private $exportado;



    /**
     * Get cenid
     *
     * @return integer 
     */
    public function getCenid()
    {
        return $this->cenid;
    }

    /**
     * Set consecutivo
     *
     * @param integer $consecutivo
     * @return TtCensoenfermedad
     */
    public function setConsecutivo($consecutivo)
    {
        $this->consecutivo = $consecutivo;
    
        return $this;
    }

    /**
     * Get consecutivo
     *
     * @return integer 
     */
    public function getConsecutivo()
    {
        return $this->consecutivo;
    }

    /**
     * Set cenfecha
     *
     * @param \DateTime $cenfecha
     * @return TtCensoenfermedad
     */
    public function setCenfecha($cenfecha)
    {
        $this->cenfecha = $cenfecha;
    
        return $this;
    }

    /**
     * Get cenfecha
     *
     * @return \DateTime 
     */
    public function getCenfecha()
    {
        return $this->cenfecha;
    }

    /**
     * Set lotid
     *
     * @param integer $lotid
     * @return TtCensoenfermedad
     */
    public function setLotid($lotid)
    {
        $this->lotid = $lotid;
    
        return $this;
    }

    /**
     * Get lotid
     *
     * @return integer 
     */
    public function getLotid()
    {
        return $this->lotid;
    }

    /**
     * Set traid
     *
     * @param integer $traid
     * @return TtCensoenfermedad
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
     * Set cenlinea
     *
     * @param integer $cenlinea
     * @return TtCensoenfermedad
     */
    public function setCenlinea($cenlinea)
    {
        $this->cenlinea = $cenlinea;
    
        return $this;
    }

    /**
     * Get cenlinea
     *
     * @return integer 
     */
    public function getCenlinea()
    {
        return $this->cenlinea;
    }

    /**
     * Set cenpalma
     *
     * @param integer $cenpalma
     * @return TtCensoenfermedad
     */
    public function setCenpalma($cenpalma)
    {
        $this->cenpalma = $cenpalma;
    
        return $this;
    }

    /**
     * Get cenpalma
     *
     * @return integer 
     */
    public function getCenpalma()
    {
        return $this->cenpalma;
    }

    /**
     * Set enfid
     *
     * @param integer $enfid
     * @return TtCensoenfermedad
     */
    public function setEnfid($enfid)
    {
        $this->enfid = $enfid;
    
        return $this;
    }

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
     * Set eenid
     *
     * @param integer $eenid
     * @return TtCensoenfermedad
     */
    public function setEenid($eenid)
    {
        $this->eenid = $eenid;
    
        return $this;
    }

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
     * Set cenobservacion
     *
     * @param string $cenobservacion
     * @return TtCensoenfermedad
     */
    public function setCenobservacion($cenobservacion)
    {
        $this->cenobservacion = $cenobservacion;
    
        return $this;
    }

    /**
     * Get cenobservacion
     *
     * @return string 
     */
    public function getCenobservacion()
    {
        return $this->cenobservacion;
    }

    /**
     * Set a11010601
     *
     * @param string $a11010601
     * @return TtCensoenfermedad
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
     * @param integer $exportado
     * @return TtCensoenfermedad
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
}