<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTipolabor
 *
 * @ORM\Table(name="TM_TipoLabor")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmTipolaborRepository")
 */
class TmTipolabor
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
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string", length=50, nullable=false)
     */
    private $codigo;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

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
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estadoregistro_id", referencedColumnName="estId")
     * })
     */
    private $estadoregistro;

    /**
     * @var TmCategorialabores
     *
     * @ORM\ManyToOne(targetEntity="TmCategorialabores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="catagorialabor_id", referencedColumnName="id")
     * })
     */
    private $catagorialabor;

    /**
     * @var TmUnidadmedida
     *
     * @ORM\ManyToOne(targetEntity="TmUnidadmedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadmedida_id", referencedColumnName="uniId")
     * })
     */
    private $unidadmedida;

     /**
     * @var TmTipocontrollabor
     *
     * @ORM\ManyToOne(targetEntity="TmTipocontrollabor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipocontrol_id", referencedColumnName="tcoId")
     * })
     */
    private $tipocontrol;


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
     * Set codigo
     *
     * @param string $codigo
     * @return TmTipolabor
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TmTipolabor
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
     * Set empresa
     *
     * @param sigaind\siagBundle\Entity\Empresa $empresa
     * @return TmTipolabor
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

    /**
     * Set estadoregistro
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro
     * @return TmTipolabor
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
     * Set catagorialabor
     *
     * @param sigaind\siagBundle\Entity\TmCategorialabores $catagorialabor
     * @return TmTipolabor
     */
    public function setCatagorialabor(\sigaind\siagBundle\Entity\TmCategorialabores $catagorialabor = null)
    {
        $this->catagorialabor = $catagorialabor;
    
        return $this;
    }

    /**
     * Get catagorialabor
     *
     * @return sigaind\siagBundle\Entity\TmCategorialabores 
     */
    public function getCatagorialabor()
    {
        return $this->catagorialabor;
    }

    /**
     * Set unidadmedida
     *
     * @param sigaind\siagBundle\Entity\TmUnidadmedida $unidadmedida
     * @return TmTipolabor
     */
    public function setUnidadmedida(\sigaind\siagBundle\Entity\TmUnidadmedida $unidadmedida = null)
    {
        $this->unidadmedida = $unidadmedida;
    
        return $this;
    }

    /**
     * Get unidadmedida
     *
     * @return sigaind\siagBundle\Entity\TmUnidadmedida 
     */
    public function getUnidadmedida()
    {
        return $this->unidadmedida;
    }
    
    /**
     * Set tipocontrol
     *
     * @param sigaind\siagBundle\Entity\TmTipocontrollabor $tipocontrol
     * @return TmTipolabor
     */
    public function setTipocontrol(\sigaind\siagBundle\Entity\TmTipocontrollabor $tipocontrol = null)
    {
        $this->tipocontrol = $tipocontrol;
    
        return $this;
    }

    /**
     * Get tipocontrol
     *
     * @return sigaind\siagBundle\Entity\TmTipocontrollabor 
     */
    public function getTipocontrol()
    {
        return $this->tipocontrol;
    }
    
    public function __toString()
    {
        return $this->getNombre();
    }
}