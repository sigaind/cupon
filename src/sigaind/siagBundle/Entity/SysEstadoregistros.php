<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysEstadoregistros
 *
 * @ORM\Table(name="SYS_EstadoRegistros")
 * @ORM\Entity
 */
class SysEstadoregistros
{
    /**
     * @var integer $estid
     *
     * @ORM\Column(name="estId", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $estid;

    /**
     * @var string $estnombre
     *
     * @ORM\Column(name="estNombre", type="string", length=10, nullable=true)
     */
    private $estnombre;



    /**
     * Get estid
     *
     * @return integer 
     */
    public function getEstid()
    {
        return $this->estid;
    }

    /**
     * Set estnombre
     *
     * @param string $estnombre
     * @return SysEstadoregistros
     */
    public function setEstnombre($estnombre)
    {
        $this->estnombre = $estnombre;
    
        return $this;
    }

    /**
     * Get estnombre
     *
     * @return string 
     */
    public function getEstnombre()
    {
        return $this->estnombre;
    }
    
    public function __toString()
    {
        return $this->getEstnombre();
    }
}