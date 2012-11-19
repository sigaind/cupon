<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\Empresa
 *
 * @ORM\Table(name="Empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer $empid
     *
     * @ORM\Column(name="empId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $empid;
    
    /**
     * @var string $empcodigo
     *
     * @ORM\Column(name="empCodigo", type="string", length=50, nullable=true)
     */
    private $empcodigo;

    /**
     * @var string $paiid
     *
     * @ORM\Column(name="paiId", type="string", length=50, nullable=false)
     */
    private $paiid;

    /**
     * @var string $ciuid
     *
     * @ORM\Column(name="ciuId", type="string", length=50, nullable=false)
     */
    private $ciuid;

    /**
     * @var string $empnit
     *
     * @ORM\Column(name="empNit", type="string", length=50, nullable=false)
     */
    private $empnit;

    /**
     * @var string $empnombre
     *
     * @ORM\Column(name="empNombre", type="string", length=50, nullable=false)
     */
    private $empnombre;

    /**
     * @var string $empdireccion
     *
     * @ORM\Column(name="empDireccion", type="string", length=50, nullable=false)
     */
    private $empdireccion;

    /**
     * @var string $emptelefonos
     *
     * @ORM\Column(name="empTelefonos", type="string", length=50, nullable=true)
     */
    private $emptelefonos;

    /**
     * @var string $empfax
     *
     * @ORM\Column(name="empFax", type="string", length=50, nullable=true)
     */
    private $empfax;

    /**
     * @var string $empemail
     *
     * @ORM\Column(name="empEmail", type="string", length=50, nullable=true)
     */
    private $empemail;

    /**
     * @var string $emprepresentantelegal
     *
     * @ORM\Column(name="empRepresentanteLegal", type="string", length=50, nullable=false)
     */
    private $emprepresentantelegal;

    /**
     * @var float $empsalariominimo
     *
     * @ORM\Column(name="empSalarioMinimo", type="decimal", nullable=true)
     */
    private $empsalariominimo;

    /**
     * @var float $empmumd
     *
     * @ORM\Column(name="empMuMd", type="decimal", nullable=true)
     */
    private $empmumd;

    /**
     * @var float $empajustedominicales
     *
     * @ORM\Column(name="empAjusteDominicales", type="decimal", nullable=true)
     */
    private $empajustedominicales;

    /**
     * @var integer $estadoregistroId
     *
     * @ORM\Column(name="estadoregistro_id", type="smallint", nullable=true)
     */
    private $estadoregistroId;

    
    
    
    /**
     * Get empid
     *
     * @return integer 
     */
    public function getEmpid()
    {
        return $this->empid;
    }

    /**
     * Set empcodigo
     *
     * @param string $empcodigo
     * @return Empresa
     */
    public function setEmpcodigo($empcodigo)
    {
        $this->empcodigo = $empcodigo;
    
        return $this;
    }

    /**
     * Get empcodigo
     *
     * @return string 
     */
    public function getEmpcodigo()
    {
        return $this->empcodigo;
    }

    /**
     * Set paiid
     *
     * @param string $paiid
     * @return Empresa
     */
    public function setPaiid($paiid)
    {
        $this->paiid = $paiid;
    
        return $this;
    }

    /**
     * Get paiid
     *
     * @return string 
     */
    public function getPaiid()
    {
        return $this->paiid;
    }

    /**
     * Set ciuid
     *
     * @param string $ciuid
     * @return Empresa
     */
    public function setCiuid($ciuid)
    {
        $this->ciuid = $ciuid;
    
        return $this;
    }

    /**
     * Get ciuid
     *
     * @return string 
     */
    public function getCiuid()
    {
        return $this->ciuid;
    }

    /**
     * Set empnit
     *
     * @param string $empnit
     * @return Empresa
     */
    public function setEmpnit($empnit)
    {
        $this->empnit = $empnit;
    
        return $this;
    }

    /**
     * Get empnit
     *
     * @return string 
     */
    public function getEmpnit()
    {
        return $this->empnit;
    }

    /**
     * Set empnombre
     *
     * @param string $empnombre
     * @return Empresa
     */
    public function setEmpnombre($empnombre)
    {
        $this->empnombre = $empnombre;
    
        return $this;
    }

    /**
     * Get empnombre
     *
     * @return string 
     */
    public function getEmpnombre()
    {
        return $this->empnombre;
    }

    /**
     * Set empdireccion
     *
     * @param string $empdireccion
     * @return Empresa
     */
    public function setEmpdireccion($empdireccion)
    {
        $this->empdireccion = $empdireccion;
    
        return $this;
    }

    /**
     * Get empdireccion
     *
     * @return string 
     */
    public function getEmpdireccion()
    {
        return $this->empdireccion;
    }

    /**
     * Set emptelefonos
     *
     * @param string $emptelefonos
     * @return Empresa
     */
    public function setEmptelefonos($emptelefonos)
    {
        $this->emptelefonos = $emptelefonos;
    
        return $this;
    }

    /**
     * Get emptelefonos
     *
     * @return string 
     */
    public function getEmptelefonos()
    {
        return $this->emptelefonos;
    }

    /**
     * Set empfax
     *
     * @param string $empfax
     * @return Empresa
     */
    public function setEmpfax($empfax)
    {
        $this->empfax = $empfax;
    
        return $this;
    }

    /**
     * Get empfax
     *
     * @return string 
     */
    public function getEmpfax()
    {
        return $this->empfax;
    }

    /**
     * Set empemail
     *
     * @param string $empemail
     * @return Empresa
     */
    public function setEmpemail($empemail)
    {
        $this->empemail = $empemail;
    
        return $this;
    }

    /**
     * Get empemail
     *
     * @return string 
     */
    public function getEmpemail()
    {
        return $this->empemail;
    }

    /**
     * Set emprepresentantelegal
     *
     * @param string $emprepresentantelegal
     * @return Empresa
     */
    public function setEmprepresentantelegal($emprepresentantelegal)
    {
        $this->emprepresentantelegal = $emprepresentantelegal;
    
        return $this;
    }

    /**
     * Get emprepresentantelegal
     *
     * @return string 
     */
    public function getEmprepresentantelegal()
    {
        return $this->emprepresentantelegal;
    }

    /**
     * Set empsalariominimo
     *
     * @param float $empsalariominimo
     * @return Empresa
     */
    public function setEmpsalariominimo($empsalariominimo)
    {
        $this->empsalariominimo = $empsalariominimo;
    
        return $this;
    }

    /**
     * Get empsalariominimo
     *
     * @return float 
     */
    public function getEmpsalariominimo()
    {
        return $this->empsalariominimo;
    }

    /**
     * Set empmumd
     *
     * @param float $empmumd
     * @return Empresa
     */
    public function setEmpmumd($empmumd)
    {
        $this->empmumd = $empmumd;
    
        return $this;
    }

    /**
     * Get empmumd
     *
     * @return float 
     */
    public function getEmpmumd()
    {
        return $this->empmumd;
    }

    /**
     * Set empajustedominicales
     *
     * @param float $empajustedominicales
     * @return Empresa
     */
    public function setEmpajustedominicales($empajustedominicales)
    {
        $this->empajustedominicales = $empajustedominicales;
    
        return $this;
    }

    /**
     * Get empajustedominicales
     *
     * @return float 
     */
    public function getEmpajustedominicales()
    {
        return $this->empajustedominicales;
    }

    /**
     * Set estadoregistroId
     *
     * @param integer $estadoregistroId
     * @return Empresa
     */
    public function setEstadoregistroId($estadoregistroId)
    {
        $this->estadoregistroId = $estadoregistroId;
    
        return $this;
    }

    /**
     * Get estadoregistroId
     *
     * @return integer 
     */
    public function getEstadoregistroId()
    {
        return $this->estadoregistroId;
    }

    
    public function __toString()
    {
        return $this->getEmpnombre();
    }
}