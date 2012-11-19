<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtPolinizacion
 *
 * @ORM\Table(name="TT_Polinizacion")
 * @ORM\Entity
 */
class TtPolinizacion
{
    /**
     * @var integer $cpolid
     *
     * @ORM\Column(name="cpolId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpolid;

    /**
     * @var integer $lotid
     *
     * @ORM\Column(name="lotId", type="bigint", nullable=true)
     */
    private $lotid;

    /**
     * @var integer $cpollinea
     *
     * @ORM\Column(name="cpolLinea", type="integer", nullable=true)
     */
    private $cpollinea;

    /**
     * @var integer $cpolpalma
     *
     * @ORM\Column(name="cpolPalma", type="integer", nullable=true)
     */
    private $cpolpalma;

    /**
     * @var integer $cpolflorespolinizadas
     *
     * @ORM\Column(name="cpolFloresPolinizadas", type="integer", nullable=true)
     */
    private $cpolflorespolinizadas;

    /**
     * @var \DateTime $cpolfecha
     *
     * @ORM\Column(name="cpolFecha", type="datetime", nullable=true)
     */
    private $cpolfecha;

    /**
     * @var string $traid
     *
     * @ORM\Column(name="traId", type="string", length=10, nullable=true)
     */
    private $traid;

    /**
     * @var string $a11010601
     *
     * @ORM\Column(name="a11010601", type="string", length=22, nullable=true)
     */
    private $a11010601;



    /**
     * Get cpolid
     *
     * @return integer 
     */
    public function getCpolid()
    {
        return $this->cpolid;
    }

    /**
     * Set lotid
     *
     * @param integer $lotid
     * @return TtPolinizacion
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
     * Set cpollinea
     *
     * @param integer $cpollinea
     * @return TtPolinizacion
     */
    public function setCpollinea($cpollinea)
    {
        $this->cpollinea = $cpollinea;
    
        return $this;
    }

    /**
     * Get cpollinea
     *
     * @return integer 
     */
    public function getCpollinea()
    {
        return $this->cpollinea;
    }

    /**
     * Set cpolpalma
     *
     * @param integer $cpolpalma
     * @return TtPolinizacion
     */
    public function setCpolpalma($cpolpalma)
    {
        $this->cpolpalma = $cpolpalma;
    
        return $this;
    }

    /**
     * Get cpolpalma
     *
     * @return integer 
     */
    public function getCpolpalma()
    {
        return $this->cpolpalma;
    }

    /**
     * Set cpolflorespolinizadas
     *
     * @param integer $cpolflorespolinizadas
     * @return TtPolinizacion
     */
    public function setCpolflorespolinizadas($cpolflorespolinizadas)
    {
        $this->cpolflorespolinizadas = $cpolflorespolinizadas;
    
        return $this;
    }

    /**
     * Get cpolflorespolinizadas
     *
     * @return integer 
     */
    public function getCpolflorespolinizadas()
    {
        return $this->cpolflorespolinizadas;
    }

    /**
     * Set cpolfecha
     *
     * @param \DateTime $cpolfecha
     * @return TtPolinizacion
     */
    public function setCpolfecha($cpolfecha)
    {
        $this->cpolfecha = $cpolfecha;
    
        return $this;
    }

    /**
     * Get cpolfecha
     *
     * @return \DateTime 
     */
    public function getCpolfecha()
    {
        return $this->cpolfecha;
    }

    /**
     * Set traid
     *
     * @param string $traid
     * @return TtPolinizacion
     */
    public function setTraid($traid)
    {
        $this->traid = $traid;
    
        return $this;
    }

    /**
     * Get traid
     *
     * @return string 
     */
    public function getTraid()
    {
        return $this->traid;
    }

    /**
     * Set a11010601
     *
     * @param string $a11010601
     * @return TtPolinizacion
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
}