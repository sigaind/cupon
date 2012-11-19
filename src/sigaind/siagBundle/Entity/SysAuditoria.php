<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysAuditoria
 *
 * @ORM\Table(name="SYS_Auditoria")
 * @ORM\Entity
 */
class SysAuditoria
{
    /**
     * @var integer $audid
     *
     * @ORM\Column(name="audId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $audid;

    /**
     * @var \DateTime $audfecha
     *
     * @ORM\Column(name="audFecha", type="datetime", nullable=true)
     */
    private $audfecha;

    /**
     * @var integer $updaid
     *
     * @ORM\Column(name="updaId", type="integer", nullable=true)
     */
    private $updaid;

    /**
     * @var integer $llaveprimaria
     *
     * @ORM\Column(name="llavePrimaria", type="bigint", nullable=true)
     */
    private $llaveprimaria;

    /**
     * @var string $nmtabla
     *
     * @ORM\Column(name="nmTabla", type="string", length=20, nullable=true)
     */
    private $nmtabla;

    /**
     * @var string $tipomovimiento
     *
     * @ORM\Column(name="tipoMovimiento", type="string", length=2, nullable=true)
     */
    private $tipomovimiento;



    /**
     * Get audid
     *
     * @return integer 
     */
    public function getAudid()
    {
        return $this->audid;
    }

    /**
     * Set audfecha
     *
     * @param \DateTime $audfecha
     * @return SysAuditoria
     */
    public function setAudfecha($audfecha)
    {
        $this->audfecha = $audfecha;
    
        return $this;
    }

    /**
     * Get audfecha
     *
     * @return \DateTime 
     */
    public function getAudfecha()
    {
        return $this->audfecha;
    }

    /**
     * Set updaid
     *
     * @param integer $updaid
     * @return SysAuditoria
     */
    public function setUpdaid($updaid)
    {
        $this->updaid = $updaid;
    
        return $this;
    }

    /**
     * Get updaid
     *
     * @return integer 
     */
    public function getUpdaid()
    {
        return $this->updaid;
    }

    /**
     * Set llaveprimaria
     *
     * @param integer $llaveprimaria
     * @return SysAuditoria
     */
    public function setLlaveprimaria($llaveprimaria)
    {
        $this->llaveprimaria = $llaveprimaria;
    
        return $this;
    }

    /**
     * Get llaveprimaria
     *
     * @return integer 
     */
    public function getLlaveprimaria()
    {
        return $this->llaveprimaria;
    }

    /**
     * Set nmtabla
     *
     * @param string $nmtabla
     * @return SysAuditoria
     */
    public function setNmtabla($nmtabla)
    {
        $this->nmtabla = $nmtabla;
    
        return $this;
    }

    /**
     * Get nmtabla
     *
     * @return string 
     */
    public function getNmtabla()
    {
        return $this->nmtabla;
    }

    /**
     * Set tipomovimiento
     *
     * @param string $tipomovimiento
     * @return SysAuditoria
     */
    public function setTipomovimiento($tipomovimiento)
    {
        $this->tipomovimiento = $tipomovimiento;
    
        return $this;
    }

    /**
     * Get tipomovimiento
     *
     * @return string 
     */
    public function getTipomovimiento()
    {
        return $this->tipomovimiento;
    }
}