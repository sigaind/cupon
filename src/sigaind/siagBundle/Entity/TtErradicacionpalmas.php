<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtErradicacionpalmas
 *
 * @ORM\Table(name="tt_erradicacionpalmas")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TtErradicacionpalmasRepository")
 */
class TtErradicacionpalmas
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var boolean $linea
     *
     * @ORM\Column(name="linea", type="boolean", nullable=true)
     */
    private $linea;

    /**
     * @var boolean $palma
     *
     * @ORM\Column(name="palma", type="boolean", nullable=true)
     */
    private $palma;

    /**
     * @var TmCausaserradicacion
     *
     * @ORM\ManyToOne(targetEntity="TmCausaserradicacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="causa_id", referencedColumnName="cerrId")
     * })
     */
    private $causaId;

    /**
     * @var \DateTime $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TtErradicacionpalmas
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
     * Set linea
     *
     * @param boolean $linea
     * @return TtErradicacionpalmas
     */
    public function setLinea($linea)
    {
        $this->linea = $linea;
    
        return $this;
    }

    /**
     * Get linea
     *
     * @return boolean 
     */
    public function getLinea()
    {
        return $this->linea;
    }

    /**
     * Set palma
     *
     * @param boolean $palma
     * @return TtErradicacionpalmas
     */
    public function setPalma($palma)
    {
        $this->palma = $palma;
    
        return $this;
    }

    /**
     * Get palma
     *
     * @return boolean 
     */
    public function getPalma()
    {
        return $this->palma;
    }

    /**
     * Set causaId
     *
     * @param sigaind\siagBundle\Entity\TmCausaserradicacion $causaId
     * @return TtErradicacionpalmas
     */
    public function setCausaId($causaId)
    {
        $this->causaId = $causaId;
    
        return $this;
    }

    /**
     * Get causaId
     *
     * @return sigaind\siagBundle\Entity\TmCausaserradicacion 
     */
    public function getCausaId()
    {
        return $this->causaId;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return TtErradicacionpalmas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}