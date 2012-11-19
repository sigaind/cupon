<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmUnidadmedida
 *
 * @ORM\Table(name="TM_UnidadMedida")
 * @ORM\Entity
 */
class TmUnidadmedida
{
    
     /**
     * @var integer $uniid
     *
     * @ORM\Column(name="uniId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniid;
    
    /**
     * @var string $unicodigo
     *
     * @ORM\Column(name="uniCodigo", type="string", length=10, nullable=true)
     */
    private $unicodigo;

    /**
     * @var string $uninombre
     *
     * @ORM\Column(name="uniNombre", type="string", length=20, nullable=false)
     */
    private $uninombre;

    /**
     * @var string $unisigla
     *
     * @ORM\Column(name="uniSigla", type="string", length=5, nullable=false)
     */
    private $unisigla;


    /**
     * Get uniid
     *
     * @return integer 
     */
    public function getUniid()
    {
        return $this->uniid;
    }
    
    /**
     * Set unicodigo
     *
     * @param string $unicodigo
     * @return TmUnidadmedida
     */
    public function setUnicodigo($unicodigo)
    {
        $this->unicodigo = $unicodigo;
    
        return $this;
    }

    /**
     * Get unicodigo
     *
     * @return string 
     */
    public function getUnicodigo()
    {
        return $this->unicodigo;
    }

    /**
     * Set uninombre
     *
     * @param string $uninombre
     * @return TmUnidadmedida
     */
    public function setUninombre($uninombre)
    {
        $this->uninombre = $uninombre;
    
        return $this;
    }

    /**
     * Get uninombre
     *
     * @return string 
     */
    public function getUninombre()
    {
        return $this->uninombre;
    }

    /**
     * Set unisigla
     *
     * @param string $unisigla
     * @return TmUnidadmedida
     */
    public function setUnisigla($unisigla)
    {
        $this->unisigla = $unisigla;
    
        return $this;
    }

    /**
     * Get unisigla
     *
     * @return string 
     */
    public function getUnisigla()
    {
        return $this->unisigla;
    }
    
    public function __toString()
    {
        return $this->getUninombre();
    }
}