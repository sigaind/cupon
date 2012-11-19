<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmCausaserradicacion
 *
 * @ORM\Table(name="TM_CausasErradicacion")
 * @ORM\Entity
 */
class TmCausaserradicacion
{
    /**
     * @var integer $cerrid
     *
     * @ORM\Column(name="cerrId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cerrid;

    /**
     * @var string $cerrnombre
     *
     * @ORM\Column(name="cerrNombre", type="string", length=30, nullable=true)
     */
    private $cerrnombre;

    /**
     * @var string $cerrdescripcion
     *
     * @ORM\Column(name="cerrDescripcion", type="string", length=150, nullable=true)
     */
    private $cerrdescripcion;

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
     * Get cerrid
     *
     * @return integer 
     */
    public function getCerrid()
    {
        return $this->cerrid;
    }

    /**
     * Set cerrnombre
     *
     * @param string $cerrnombre
     * @return TmCausaserradicacion
     */
    public function setCerrnombre($cerrnombre)
    {
        $this->cerrnombre = $cerrnombre;
    
        return $this;
    }

    /**
     * Get cerrnombre
     *
     * @return string 
     */
    public function getCerrnombre()
    {
        return $this->cerrnombre;
    }

    /**
     * Set cerrdescripcion
     *
     * @param string $cerrdescripcion
     * @return TmCausaserradicacion
     */
    public function setCerrdescripcion($cerrdescripcion)
    {
        $this->cerrdescripcion = $cerrdescripcion;
    
        return $this;
    }

    /**
     * Get cerrdescripcion
     *
     * @return string 
     */
    public function getCerrdescripcion()
    {
        return $this->cerrdescripcion;
    }

    /**
     * Set empresa
     *
     * @param sigaind\siagBundle\Entity\Empresa $empresa
     * @return TmCausaserradicacion
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
    
    public function __toString()
    {
        return $this->getCerrnombre();
    }
}