<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTipocebos
 *
 * @ORM\Table(name="TM_TipoCebos")
 * @ORM\Entity
 */
class TmTipocebos
{
    /**
     * @var integer $cebid
     *
     * @ORM\Column(name="cebId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cebid;

    /**
     * @var string $cebnombre
     *
     * @ORM\Column(name="cebNombre", type="string", length=30, nullable=true)
     */
    private $cebnombre;

    /**
     * @var string $cebdescripcion
     *
     * @ORM\Column(name="cebDescripcion", type="string", length=150, nullable=true)
     */
    private $cebdescripcion;

    /**
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empId", referencedColumnName="empId")
     * })
     */
    private $empid;



    /**
     * Get cebid
     *
     * @return integer 
     */
    public function getCebid()
    {
        return $this->cebid;
    }

    /**
     * Set cebnombre
     *
     * @param string $cebnombre
     * @return TmTipocebos
     */
    public function setCebnombre($cebnombre)
    {
        $this->cebnombre = $cebnombre;
    
        return $this;
    }

    /**
     * Get cebnombre
     *
     * @return string 
     */
    public function getCebnombre()
    {
        return $this->cebnombre;
    }

    /**
     * Set cebdescripcion
     *
     * @param string $cebdescripcion
     * @return TmTipocebos
     */
    public function setCebdescripcion($cebdescripcion)
    {
        $this->cebdescripcion = $cebdescripcion;
    
        return $this;
    }

    /**
     * Get cebdescripcion
     *
     * @return string 
     */
    public function getCebdescripcion()
    {
        return $this->cebdescripcion;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmTipocebos
     */
    public function setEmpid(\sigaind\siagBundle\Entity\Empresa $empid = null)
    {
        $this->empid = $empid;
    
        return $this;
    }

    /**
     * Get empid
     *
     * @return sigaind\siagBundle\Entity\Empresa 
     */
    public function getEmpid()
    {
        return $this->empid;
    }
    
    public function __toString()
    {
        return $this->getCebnombre();
    }
}