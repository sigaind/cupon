<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmCecos
 *
 * @ORM\Table(name="TM_cecos")
 * @ORM\Entity
 */
class TmCecos
{
    /**
     * @var integer $cecid
     *
     * @ORM\Column(name="cecId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cecid;

    /**
     * @var string $ceccodigo
     *
     * @ORM\Column(name="cecCodigo", type="string", length=15, nullable=false)
     */
    private $ceccodigo;

    /**
     * @var string $cecnombre
     *
     * @ORM\Column(name="cecNombre", type="string", length=30, nullable=false)
     */
    private $cecnombre;

    /**
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoregistro_id", referencedColumnName="estId")
     * })
     */
    private $estadoregistro;

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
     * Get cecid
     *
     * @return integer 
     */
    public function getCecid()
    {
        return $this->cecid;
    }

    /**
     * Set ceccodigo
     *
     * @param string $ceccodigo
     * @return TmCecos
     */
    public function setCeccodigo($ceccodigo)
    {
        $this->ceccodigo = $ceccodigo;
    
        return $this;
    }

    /**
     * Get ceccodigo
     *
     * @return string 
     */
    public function getCeccodigo()
    {
        return $this->ceccodigo;
    }

    /**
     * Set cecnombre
     *
     * @param string $cecnombre
     * @return TmCecos
     */
    public function setCecnombre($cecnombre)
    {
        $this->cecnombre = $cecnombre;
    
        return $this;
    }

    /**
     * Get cecnombre
     *
     * @return string 
     */
    public function getCecnombre()
    {
        return $this->cecnombre;
    }

    /**
     * Set estadoregistro
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro
     * @return TmCecos
     */
    public function setEstadoregistro(\sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro = null)
    {
        $this->estadoregistro = $estadoregistro;
    
        return $this;
    }

    /**
     * Get estadoregistro
     *
     * @return sigaind\siagBundle\Entity\SysEstadoregistros 
     */
    public function getEstadoregistro()
    {
        return $this->estadoregistro;
    }

    /**
     * Set empresa
     *
     * @param sigaind\siagBundle\Entity\Empresa $empresa
     * @return TmCecos
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
        return $this->getCecnombre();
    }
}