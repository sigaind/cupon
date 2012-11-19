<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysModulo
 *
 * @ORM\Table(name="SYS_Modulo")
 * @ORM\Entity
 */
class SysModulo
{
    /**
     * @var integer $modid
     *
     * @ORM\Column(name="modId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modid;

    /**
     * @var string $modnombre
     *
     * @ORM\Column(name="modNombre", type="string", length=30, nullable=true)
     */
    private $modnombre;

    /**
     * @var integer $menu
     *
     * @ORM\Column(name="menu", type="integer", nullable=true)
     */
    private $menu;

    /**
     * @var integer $modulo
     *
     * @ORM\Column(name="modulo", type="integer", nullable=true)
     */
    private $modulo;



    /**
     * Get modid
     *
     * @return integer 
     */
    public function getModid()
    {
        return $this->modid;
    }

    /**
     * Set modnombre
     *
     * @param string $modnombre
     * @return SysModulo
     */
    public function setModnombre($modnombre)
    {
        $this->modnombre = $modnombre;
    
        return $this;
    }

    /**
     * Get modnombre
     *
     * @return string 
     */
    public function getModnombre()
    {
        return $this->modnombre;
    }

    /**
     * Set menu
     *
     * @param integer $menu
     * @return SysModulo
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return integer 
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set modulo
     *
     * @param integer $modulo
     * @return SysModulo
     */
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;
    
        return $this;
    }

    /**
     * Get modulo
     *
     * @return integer 
     */
    public function getModulo()
    {
        return $this->modulo;
    }
}