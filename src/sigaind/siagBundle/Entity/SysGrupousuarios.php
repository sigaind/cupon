<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysGrupousuarios
 *
 * @ORM\Table(name="SYS_GrupoUsuarios")
 * @ORM\Entity
 */
class SysGrupousuarios
{
    /**
     * @var integer $gusuid
     *
     * @ORM\Column(name="gusuId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gusuid;

    /**
     * @var string $gusunombre
     *
     * @ORM\Column(name="gusuNombre", type="string", length=45, nullable=true)
     */
    private $gusunombre;
    


    /**
     * Get gusuid
     *
     * @return integer 
     */
    public function getGusuid()
    {
        return $this->gusuid;
    }

    /**
     * Set gusunombre
     *
     * @param string $gusunombre
     * @return SysGrupousuarios
     */
    public function setGusunombre($gusunombre)
    {
        $this->gusunombre = $gusunombre;
    
        return $this;
    }

    /**
     * Get gusunombre
     *
     * @return string 
     */
    public function getGusunombre()
    {
        return $this->gusunombre;
    }   
    
    public function __toString()
    {
        return $this->getGusunombre();
    }
}