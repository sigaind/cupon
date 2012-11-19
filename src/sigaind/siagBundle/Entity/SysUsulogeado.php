<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysUsulogeado
 *
 * @ORM\Table(name="SYS_usuLogeado")
 * @ORM\Entity
 */
class SysUsulogeado
{
    /**
     * @var string $idregistro
     *
     * @ORM\Column(name="idRegistro", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregistro;

    /**
     * @var integer $usuid
     *
     * @ORM\Column(name="usuId", type="integer", nullable=true)
     */
    private $usuid;

    /**
     * @var string $usunombre
     *
     * @ORM\Column(name="usuNombre", type="string", length=60, nullable=true)
     */
    private $usunombre;

    /**
     * @var integer $empid
     *
     * @ORM\Column(name="empId", type="integer", nullable=true)
     */
    private $empid;

    /**
     * @var \DateTime $fecha
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;



    /**
     * Get idregistro
     *
     * @return string 
     */
    public function getIdregistro()
    {
        return $this->idregistro;
    }

    /**
     * Set usuid
     *
     * @param integer $usuid
     * @return SysUsulogeado
     */
    public function setUsuid($usuid)
    {
        $this->usuid = $usuid;
    
        return $this;
    }

    /**
     * Get usuid
     *
     * @return integer 
     */
    public function getUsuid()
    {
        return $this->usuid;
    }

    /**
     * Set usunombre
     *
     * @param string $usunombre
     * @return SysUsulogeado
     */
    public function setUsunombre($usunombre)
    {
        $this->usunombre = $usunombre;
    
        return $this;
    }

    /**
     * Get usunombre
     *
     * @return string 
     */
    public function getUsunombre()
    {
        return $this->usunombre;
    }

    /**
     * Set empid
     *
     * @param integer $empid
     * @return SysUsulogeado
     */
    public function setEmpid($empid)
    {
        $this->empid = $empid;
    
        return $this;
    }

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return SysUsulogeado
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}