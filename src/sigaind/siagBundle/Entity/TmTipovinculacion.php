<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTipovinculacion
 *
 * @ORM\Table(name="TM_TipoVinculacion")
 * @ORM\Entity
 */
class TmTipovinculacion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=30, nullable=true)
     */
    private $descripcion;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TmTipovinculacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TmTipovinculacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estadoregistro
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro
     * @return TmTipovinculacion
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
     * @return TmTipovinculacion
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
        return $this->getNombre();
    }
}