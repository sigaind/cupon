<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtProdutoquimicoaplicado
 *
 * @ORM\Table(name="TT_ProdutoQuimicoAplicado")
 * @ORM\Entity
 */
class TtProdutoquimicoaplicado
{
    /**
     * @var integer $paplid
     *
     * @ORM\Column(name="paplId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paplid;

    /**
     * @var integer $oreid
     *
     * @ORM\Column(name="oreId", type="bigint", nullable=true)
     */
    private $oreid;

    /**
     * @var float $paplcantidad
     *
     * @ORM\Column(name="paplCantidad", type="decimal", nullable=true)
     */
    private $paplcantidad;

    /**
     * @var \DateTime $paplfecha
     *
     * @ORM\Column(name="paplFecha", type="datetime", nullable=true)
     */
    private $paplfecha;

    /**
     * @var integer $supid
     *
     * @ORM\Column(name="supId", type="integer", nullable=true)
     */
    private $supid;



    /**
     * Get paplid
     *
     * @return integer 
     */
    public function getPaplid()
    {
        return $this->paplid;
    }

    /**
     * Set oreid
     *
     * @param integer $oreid
     * @return TtProdutoquimicoaplicado
     */
    public function setOreid($oreid)
    {
        $this->oreid = $oreid;
    
        return $this;
    }

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
     * Set paplcantidad
     *
     * @param float $paplcantidad
     * @return TtProdutoquimicoaplicado
     */
    public function setPaplcantidad($paplcantidad)
    {
        $this->paplcantidad = $paplcantidad;
    
        return $this;
    }

    /**
     * Get paplcantidad
     *
     * @return float 
     */
    public function getPaplcantidad()
    {
        return $this->paplcantidad;
    }

    /**
     * Set paplfecha
     *
     * @param \DateTime $paplfecha
     * @return TtProdutoquimicoaplicado
     */
    public function setPaplfecha($paplfecha)
    {
        $this->paplfecha = $paplfecha;
    
        return $this;
    }

    /**
     * Get paplfecha
     *
     * @return \DateTime 
     */
    public function getPaplfecha()
    {
        return $this->paplfecha;
    }

    /**
     * Set supid
     *
     * @param integer $supid
     * @return TtProdutoquimicoaplicado
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
}