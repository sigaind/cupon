<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmLotes
 *
 * @ORM\Table(name="TM_Lotes")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\TmLotesRepository")
 */
class TmLotes
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
     * @var string $lotcodigo
     *
     * @ORM\Column(name="lotCodigo", type="string", length=10, nullable=false)
     */
    private $lotcodigo;

    /**
     * @var string $lotnombre
     *
     * @ORM\Column(name="lotNombre", type="string", length=20, nullable=false)
     */
    private $lotnombre;

    /**
     * @var float $lothectarea
     *
     * @ORM\Column(name="lotHectarea", type="decimal", nullable=false)
     */
    private $lothectarea;

    /**
     * @var integer $lotnumeropalmas
     *
     * @ORM\Column(name="lotNumeroPalmas", type="integer", nullable=false)
     */
    private $lotnumeropalmas;

    /**
     * @var float $lotdensidadsiembra
     *
     * @ORM\Column(name="lotDensidadSiembra", type="decimal", nullable=false)
     */
    private $lotdensidadsiembra;

    /**
     * @var integer $lotgrupo
     *
     * @ORM\Column(name="lotGrupo", type="integer", nullable=false)
     */
    private $lotgrupo;

    /**
     * @var integer $lotsiembraadulta
     *
     * @ORM\Column(name="lotSiembraAdulta", type="integer", nullable=false)
     */
    private $lotsiembraadulta;

    /**
     * @var float $lotppr
     *
     * @ORM\Column(name="lotPPr", type="decimal", nullable=false)
     */
    private $lotppr;

    /**
     * @var integer $lotpalmasiniciales
     *
     * @ORM\Column(name="lotPalmasIniciales", type="integer", nullable=true)
     */
    private $lotpalmasiniciales;

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
     * @var string $codcatastral
     *
     * @ORM\Column(name="codCatastral", type="string", length=15, nullable=true)
     */
    private $codcatastral;

    /**
     * @var float $lotdrenajes
     *
     * @ORM\Column(name="lotDrenajes", type="decimal", nullable=true)
     */
    private $lotdrenajes;

    /**
     * @var TmMaterial
     *
     * @ORM\ManyToOne(targetEntity="TmMaterial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matId", referencedColumnName="matId")
     * })
     */
    private $matid;

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
     * @var TmSiembraprograma
     *
     * @ORM\ManyToOne(targetEntity="TmSiembraprograma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="simId", referencedColumnName="simId")
     * })
     */
    private $simid;

    /**
     * @var TmZonaplantacion
     *
     * @ORM\ManyToOne(targetEntity="TmZonaplantacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zonId", referencedColumnName="zonId")
     * })
     */
    private $zonid;



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
     * Set lotcodigo
     *
     * @param string $lotcodigo
     * @return TmLotes
     */
    public function setLotcodigo($lotcodigo)
    {
        $this->lotcodigo = $lotcodigo;
    
        return $this;
    }

    /**
     * Get lotcodigo
     *
     * @return string 
     */
    public function getLotcodigo()
    {
        return $this->lotcodigo;
    }

    /**
     * Set lotnombre
     *
     * @param string $lotnombre
     * @return TmLotes
     */
    public function setLotnombre($lotnombre)
    {
        $this->lotnombre = $lotnombre;
    
        return $this;
    }

    /**
     * Get lotnombre
     *
     * @return string 
     */
    public function getLotnombre()
    {
        return $this->lotnombre;
    }

    /**
     * Set lothectarea
     *
     * @param float $lothectarea
     * @return TmLotes
     */
    public function setLothectarea($lothectarea)
    {
        $this->lothectarea = $lothectarea;
    
        return $this;
    }

    /**
     * Get lothectarea
     *
     * @return float 
     */
    public function getLothectarea()
    {
        return $this->lothectarea;
    }

    /**
     * Set lotnumeropalmas
     *
     * @param integer $lotnumeropalmas
     * @return TmLotes
     */
    public function setLotnumeropalmas($lotnumeropalmas)
    {
        $this->lotnumeropalmas = $lotnumeropalmas;
    
        return $this;
    }

    /**
     * Get lotnumeropalmas
     *
     * @return integer 
     */
    public function getLotnumeropalmas()
    {
        return $this->lotnumeropalmas;
    }

    /**
     * Set lotdensidadsiembra
     *
     * @param float $lotdensidadsiembra
     * @return TmLotes
     */
    public function setLotdensidadsiembra($lotdensidadsiembra)
    {
        $this->lotdensidadsiembra = $lotdensidadsiembra;
    
        return $this;
    }

    /**
     * Get lotdensidadsiembra
     *
     * @return float 
     */
    public function getLotdensidadsiembra()
    {
        return $this->lotdensidadsiembra;
    }

    /**
     * Set lotgrupo
     *
     * @param integer $lotgrupo
     * @return TmLotes
     */
    public function setLotgrupo($lotgrupo)
    {
        $this->lotgrupo = $lotgrupo;
    
        return $this;
    }

    /**
     * Get lotgrupo
     *
     * @return integer 
     */
    public function getLotgrupo()
    {
        return $this->lotgrupo;
    }

    /**
     * Set lotsiembraadulta
     *
     * @param integer $lotsiembraadulta
     * @return TmLotes
     */
    public function setLotsiembraadulta($lotsiembraadulta)
    {
        $this->lotsiembraadulta = $lotsiembraadulta;
    
        return $this;
    }

    /**
     * Get lotsiembraadulta
     *
     * @return integer 
     */
    public function getLotsiembraadulta()
    {
        return $this->lotsiembraadulta;
    }

    /**
     * Set lotppr
     *
     * @param float $lotppr
     * @return TmLotes
     */
    public function setLotppr($lotppr)
    {
        $this->lotppr = $lotppr;
    
        return $this;
    }

    /**
     * Get lotppr
     *
     * @return float 
     */
    public function getLotppr()
    {
        return $this->lotppr;
    }

    /**
     * Set lotpalmasiniciales
     *
     * @param integer $lotpalmasiniciales
     * @return TmLotes
     */
    public function setLotpalmasiniciales($lotpalmasiniciales)
    {
        $this->lotpalmasiniciales = $lotpalmasiniciales;
    
        return $this;
    }

    /**
     * Get lotpalmasiniciales
     *
     * @return integer 
     */
    public function getLotpalmasiniciales()
    {
        return $this->lotpalmasiniciales;
    }

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return TmEstadoplaga
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
     * Set codcatastral
     *
     * @param string $codcatastral
     * @return TmLotes
     */
    public function setCodcatastral($codcatastral)
    {
        $this->codcatastral = $codcatastral;
    
        return $this;
    }

    /**
     * Get codcatastral
     *
     * @return string 
     */
    public function getCodcatastral()
    {
        return $this->codcatastral;
    }

    /**
     * Set lotdrenajes
     *
     * @param float $lotdrenajes
     * @return TmLotes
     */
    public function setLotdrenajes($lotdrenajes)
    {
        $this->lotdrenajes = $lotdrenajes;
    
        return $this;
    }

    /**
     * Get lotdrenajes
     *
     * @return float 
     */
    public function getLotdrenajes()
    {
        return $this->lotdrenajes;
    }

    /**
     * Set matid
     *
     * @param sigaind\siagBundle\Entity\TmMaterial $matid
     * @return TmLotes
     */
    public function setMatid(\sigaind\siagBundle\Entity\TmMaterial $matid = null)
    {
        $this->matid = $matid;
    
        return $this;
    }

    /**
     * Get matid
     *
     * @return sigaind\siagBundle\Entity\TmMaterial 
     */
    public function getMatid()
    {
        return $this->matid;
    }

    /**
     * Set empid
     *
     * @param sigaind\siagBundle\Entity\Empresa $empid
     * @return TmLotes
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
     * Set simid
     *
     * @param sigaind\siagBundle\Entity\TmSiembraprograma $simid
     * @return TmLotes
     */
    public function setSimid(\sigaind\siagBundle\Entity\TmSiembraprograma $simid = null)
    {
        $this->simid = $simid;
    
        return $this;
    }

    /**
     * Get simid
     *
     * @return sigaind\siagBundle\Entity\TmSiembraprograma 
     */
    public function getSimid()
    {
        return $this->simid;
    }

    /**
     * Set zonid
     *
     * @param sigaind\siagBundle\Entity\TmZonaplantacion $zonid
     * @return TmLotes
     */
    public function setZonid(\sigaind\siagBundle\Entity\TmZonaplantacion $zonid = null)
    {
        $this->zonid = $zonid;
    
        return $this;
    }

    /**
     * Get zonid
     *
     * @return sigaind\siagBundle\Entity\TmZonaplantacion 
     */
    public function getZonid()
    {
        return $this->zonid;
    }
    
    public function __toString()
    {
        return $this->getLotcodigo();
    }
}