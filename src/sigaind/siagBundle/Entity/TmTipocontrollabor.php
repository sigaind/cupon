<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TmTipocontrollabor
 *
 * @ORM\Table(name="TM_TipoControlLabor")
 * @ORM\Entity
 */
class TmTipocontrollabor
{
    /**
     * @var integer $tcoid
     *
     * @ORM\Column(name="tcoId", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcoid;

    /**
     * @var string $tcounidad
     *
     * @ORM\Column(name="tcoUnidad", type="string", length=30, nullable=false)
     */
    private $tcounidad;



    /**
     * Get tcoid
     *
     * @return integer 
     */
    public function getTcoid()
    {
        return $this->tcoid;
    }

    /**
     * Set tcounidad
     *
     * @param string $tcounidad
     * @return TmTipocontrollabor
     */
    public function setTcounidad($tcounidad)
    {
        $this->tcounidad = $tcounidad;
    
        return $this;
    }

    /**
     * Get tcounidad
     *
     * @return string 
     */
    public function getTcounidad()
    {
        return $this->tcounidad;
    }
    
    public function __toString()
    {
        return $this->getTcounidad();
    }
}