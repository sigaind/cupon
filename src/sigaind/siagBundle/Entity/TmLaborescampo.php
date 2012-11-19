<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmLaborescampo
 *
 * @ORM\Table(name="TM_LaboresCampo")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmLaborescampoRepository")
 */
class TmLaborescampo
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
     * @ORM\Column(name="codigo", type="string", length=15, nullable=false)
     */
    private $codigo;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string $cuentacontable
     *
     * @ORM\Column(name="cuentacontable", type="string", length=50, nullable=true)
     */
    private $cuentacontable;

    /**
     * @var integer $periodicidad
     *
     * @ORM\Column(name="periodicidad", type="integer", nullable=true)
     */
    private $periodicidad;

    /**
     * @var integer $loteId
     *
     * @ORM\Column(name="lote_id", type="integer", nullable=true)
     */
    private $loteId;

    /**
     * @var integer $rangosiembrainicial
     *
     * @ORM\Column(name="rangosiembrainicial", type="smallint", nullable=true)
     */
    private $rangosiembrainicial;

    /**
     * @var integer $rangosiembrafinal
     *
     * @ORM\Column(name="rangosiembrafinal", type="smallint", nullable=true)
     */
    private $rangosiembrafinal;

    /**
     * @var float $costocontratista
     *
     * @ORM\Column(name="costocontratista", type="decimal", nullable=true)
     */
    private $costocontratista;

    /**
     * @var float $costotrabajador
     *
     * @ORM\Column(name="costotrabajador", type="decimal", nullable=true)
     */
    private $costotrabajador;


    /**
     * @var TmTipolabor
     *
     * @ORM\ManyToOne(targetEntity="TmTipolabor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipolabor_id", referencedColumnName="id")
     * })
     */
    private $tipolabor;

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
     * @var TmTipovinculacion
     *
     * @ORM\ManyToOne(targetEntity="TmTipovinculacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vinculacion_id", referencedColumnName="id")
     * })
     */
    private $vinculacion;

    /**
     * @var TmCecos
     *
     * @ORM\ManyToOne(targetEntity="TmCecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ceco_id", referencedColumnName="cecId")
     * })
     */
    private $ceco;

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
     * Set codigo
     *
     * @param string $codigo
     * @return TmLaborescampo
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
     * @return TmLaborescampo
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
     * Set cuentacontable
     *
     * @param string $cuentacontable
     * @return TmLaborescampo
     */
    public function setCuentacontable($cuentacontable)
    {
        $this->cuentacontable = $cuentacontable;
    
        return $this;
    }

    /**
     * Get cuentacontable
     *
     * @return string 
     */
    public function getCuentacontable()
    {
        return $this->cuentacontable;
    }

    /**
     * Set periodicidad
     *
     * @param integer $periodicidad
     * @return TmLaborescampo
     */
    public function setPeriodicidad($periodicidad)
    {
        $this->periodicidad = $periodicidad;
    
        return $this;
    }

    /**
     * Get periodicidad
     *
     * @return integer 
     */
    public function getPeriodicidad()
    {
        return $this->periodicidad;
    }


    /**
     * Set loteId
     *
     * @param integer $loteId
     * @return TmLaborescampo
     */
    public function setLoteId($loteId)
    {
        $this->loteId = $loteId;
    
        return $this;
    }

    /**
     * Get loteId
     *
     * @return integer 
     */
    public function getLoteId()
    {
        return $this->loteId;
    }

    /**
     * Set rangosiembrainicial
     *
     * @param integer $rangosiembrainicial
     * @return TmLaborescampo
     */
    public function setRangosiembrainicial($rangosiembrainicial)
    {
        $this->rangosiembrainicial = $rangosiembrainicial;
    
        return $this;
    }

    /**
     * Get rangosiembrainicial
     *
     * @return integer 
     */
    public function getRangosiembrainicial()
    {
        return $this->rangosiembrainicial;
    }

    /**
     * Set rangosiembrafinal
     *
     * @param integer $rangosiembrafinal
     * @return TmLaborescampo
     */
    public function setRangosiembrafinal($rangosiembrafinal)
    {
        $this->rangosiembrafinal = $rangosiembrafinal;
    
        return $this;
    }

    /**
     * Get rangosiembrafinal
     *
     * @return integer 
     */
    public function getRangosiembrafinal()
    {
        return $this->rangosiembrafinal;
    }

    /**
     * Set costocontratista
     *
     * @param float $costocontratista
     * @return TmLaborescampo
     */
    public function setCostocontratista($costocontratista)
    {
        $this->costocontratista = $costocontratista;
    
        return $this;
    }

    /**
     * Get costocontratista
     *
     * @return float 
     */
    public function getCostocontratista()
    {
        return $this->costocontratista;
    }

    /**
     * Set costotrabajador
     *
     * @param float $costotrabajador
     * @return TmLaborescampo
     */
    public function setCostotrabajador($costotrabajador)
    {
        $this->costotrabajador = $costotrabajador;
    
        return $this;
    }

    /**
     * Get costotrabajador
     *
     * @return float 
     */
    public function getCostotrabajador()
    {
        return $this->costotrabajador;
    }
    

    /**
     * Set tipolabor
     *
     * @param sigaind\siagBundle\Entity\TmTipolabor $tipolabor
     * @return TmLaborescampo
     */
    public function setTipolabor(\sigaind\siagBundle\Entity\TmTipolabor $tipolabor = null)
    {
        $this->tipolabor = $tipolabor;
    
        return $this;
    }

    /**
     * Get tipolabor
     *
     * @return sigaind\siagBundle\Entity\TmTipolabor 
     */
    public function getTipolabor()
    {
        return $this->tipolabor;
    }

    /**
     * Set estadoregistro
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estadoregistro
     * @return TmLaborescampo
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
     * Set vinculacion
     *
     * @param sigaind\siagBundle\Entity\TmTipovinculacion $vinculacion
     * @return TmLaborescampo
     */
    public function setVinculacion(\sigaind\siagBundle\Entity\TmTipovinculacion $vinculacion = null)
    {
        $this->vinculacion = $vinculacion;
    
        return $this;
    }

    /**
     * Get vinculacion
     *
     * @return sigaind\siagBundle\Entity\TmTipovinculacion 
     */
    public function getVinculacion()
    {
        return $this->vinculacion;
    }

    /**
     * Set ceco
     *
     * @param sigaind\siagBundle\Entity\TmCecos $ceco
     * @return TmLaborescampo
     */
    public function setCeco(\sigaind\siagBundle\Entity\TmCecos $ceco = null)
    {
        $this->ceco = $ceco;
    
        return $this;
    }

    /**
     * Get ceco
     *
     * @return sigaind\siagBundle\Entity\TmCecos 
     */
    public function getCeco()
    {
        return $this->ceco;
    }

    /**
     * Set empresa
     *
     * @param sigaind\siagBundle\Entity\Empresa $empresa
     * @return TmLaborescampo
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