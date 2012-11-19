<?php

namespace sigaind\sigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\sigBundle\Entity\A110106
 *
 * @ORM\Table(name="a110106")
 * @ORM\Entity
 */
class A110106
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $a11010601
     *
     * @ORM\Column(name="a11010601", type="integer", nullable=true)
     */
    private $a11010601;

    /**
     * @var boolean $a11010603
     *
     * @ORM\Column(name="a11010603", type="boolean", nullable=true)
     */
    private $a11010603;

    /**
     * @var boolean $a11010606
     *
     * @ORM\Column(name="a11010606", type="boolean", nullable=true)
     */
    private $a11010606;

    /**
     * @var boolean $a11010607
     *
     * @ORM\Column(name="a11010607", type="boolean", nullable=true)
     */
    private $a11010607;

    /**
     * @var integer $a11010401
     *
     * @ORM\Column(name="a11010401", type="integer", nullable=true)
     */
    private $a11010401;

    /**
     * @var \DateTime $fechasiembra
     *
     * @ORM\Column(name="fechaSiembra", type="date", nullable=true)
     */
    private $fechasiembra;



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
     * Set a11010601
     *
     * @param integer $a11010601
     * @return A110106
     */
    public function setA11010601($a11010601)
    {
        $this->a11010601 = $a11010601;
    
        return $this;
    }

    /**
     * Get a11010601
     *
     * @return integer 
     */
    public function getA11010601()
    {
        return $this->a11010601;
    }

    /**
     * Set a11010603
     *
     * @param boolean $a11010603
     * @return A110106
     */
    public function setA11010603($a11010603)
    {
        $this->a11010603 = $a11010603;
    
        return $this;
    }

    /**
     * Get a11010603
     *
     * @return boolean 
     */
    public function getA11010603()
    {
        return $this->a11010603;
    }

    /**
     * Set a11010606
     *
     * @param boolean $a11010606
     * @return A110106
     */
    public function setA11010606($a11010606)
    {
        $this->a11010606 = $a11010606;
    
        return $this;
    }

    /**
     * Get a11010606
     *
     * @return boolean 
     */
    public function getA11010606()
    {
        return $this->a11010606;
    }

    /**
     * Set a11010607
     *
     * @param boolean $a11010607
     * @return A110106
     */
    public function setA11010607($a11010607)
    {
        $this->a11010607 = $a11010607;
    
        return $this;
    }

    /**
     * Get a11010607
     *
     * @return boolean 
     */
    public function getA11010607()
    {
        return $this->a11010607;
    }

    /**
     * Set a11010401
     *
     * @param integer $a11010401
     * @return A110106
     */
    public function setA11010401($a11010401)
    {
        $this->a11010401 = $a11010401;
    
        return $this;
    }

    /**
     * Get a11010401
     *
     * @return integer 
     */
    public function getA11010401()
    {
        return $this->a11010401;
    }

    /**
     * Set fechasiembra
     *
     * @param \DateTime $fechasiembra
     * @return A110106
     */
    public function setFechasiembra($fechasiembra)
    {
        $this->fechasiembra = $fechasiembra;
    
        return $this;
    }

    /**
     * Get fechasiembra
     *
     * @return \DateTime 
     */
    public function getFechasiembra()
    {
        return $this->fechasiembra;
    }
}