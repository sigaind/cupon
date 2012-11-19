<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmProductoquimico
 *
 * @ORM\Table(name="TM_ProductoQuimico")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmProductoquimicoRepository")
 */
class TmProductoquimico
{
    /**
     * @var integer $proid
     *
     * @ORM\Column(name="proId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proid;

    /**
     * @var string $procodigo
     *
     * @ORM\Column(name="proCodigo", type="string", length=10, nullable=false)
     */
    private $procodigo;

    /**
     * @var string $pronombre
     *
     * @ORM\Column(name="proNombre", type="string", length=20, nullable=false)
     */
    private $pronombre;

    /**
     * @var integer $profactorconversion
     *
     * @ORM\Column(name="proFactorConversion", type="integer", nullable=false)
     */
    private $profactorconversion;

    /**
     * @var string $profertilizacionsanidad
     *
     * @ORM\Column(name="proFertilizacionSanidad", type="string", length=2, nullable=false)
     */
    private $profertilizacionsanidad;

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
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estId", referencedColumnName="estId")
     * })
     */
    private $estid;

    /**
     * @var TmUnidadmedida
     *
     * @ORM\ManyToOne(targetEntity="TmUnidadmedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uniId", referencedColumnName="uniId")
     * })
     */
    private $uniid;



    /**
     * Get proid
     *
     * @return integer 
     */
    public function getProid()
    {
        return $this->proid;
    }

    /**
     * Set procodigo
     *
     * @param string $procodigo
     * @return TmProductoquimico
     */
    public function setProcodigo($procodigo)
    {
        $this->procodigo = $procodigo;
    
        return $this;
    }

    /**
     * Get procodigo
     *
     * @return string 
     */
    public function getProcodigo()
    {
        return $this->procodigo;
    }

    /**
     * Set pronombre
     *
     * @param string $pronombre
     * @return TmProductoquimico
     */
    public function setPronombre($pronombre)
    {
        $this->pronombre = $pronombre;
    
        return $this;
    }

    /**
     * Get pronombre
     *
     * @return string 
     */
    public function getPronombre()
    {
        return $this->pronombre;
    }

    /**
     * Set profactorconversion
     *
     * @param integer $profactorconversion
     * @return TmProductoquimico
     */
    public function setProfactorconversion($profactorconversion)
    {
        $this->profactorconversion = $profactorconversion;
    
        return $this;
    }

    /**
     * Get profactorconversion
     *
     * @return integer 
     */
    public function getProfactorconversion()
    {
        return $this->profactorconversion;
    }

    /**
     * Set profertilizacionsanidad
     *
     * @param string $profertilizacionsanidad
     * @return TmProductoquimico
     */
    public function setProfertilizacionsanidad($profertilizacionsanidad)
    {
        $this->profertilizacionsanidad = $profertilizacionsanidad;
    
        return $this;
    }

    /**
     * Get profertilizacionsanidad
     *
     * @return string 
     */
    public function getProfertilizacionsanidad()
    {
        return $this->profertilizacionsanidad;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmProductoquimico
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

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmProductoquimico
     */
    public function setEstid(\sigaind\siagBundle\Entity\SysEstadoregistros $estid = null)
    {
        $this->estid = $estid;
    
        return $this;
    }

    /**
     * Get estid
     *
     * @return sigaind\siagBundle\Entity\SysEstadoregistros 
     */
    public function getEstid()
    {
        return $this->estid;
    }

    /**
     * Set uniid
     *
     * @param sigaind\siagBundle\Entity\TmUnidadmedida $uniid
     * @return TmProductoquimico
     */
    public function setUniid(\sigaind\siagBundle\Entity\TmUnidadmedida $uniid = null)
    {
        $this->uniid = $uniid;
    
        return $this;
    }

    /**
     * Get uniid
     *
     * @return sigaind\siagBundle\Entity\TmUnidadmedida 
     */
    public function getUniid()
    {
        return $this->uniid;
    }
    
    public function __toString()
    {
        return $this->getPronombre();
    }
}