<?php

namespace sigaind\sigBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\sigBundle\Entity\A110104
 *
 * @ORM\Table(name="a110104")
 * @ORM\Entity
 */
class A110104
{
    /**
     * @var integer $idLote
     *
     * @ORM\Column(name="id_lote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLote;

    /**
     * @var integer $lotid
     *
     * @ORM\Column(name="lotId", type="integer", nullable=true)
     */
    private $lotid;

    /**
     * @var string $codigo
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=false)
     */
    private $codigo;



    /**
     * Get idLote
     *
     * @return integer 
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set lotid
     *
     * @param integer $lotid
     * @return A110104
     */
    public function setLotid($lotid)
    {
        $this->lotid = $lotid;
    
        return $this;
    }

    /**
     * Get lotid
     *
     * @return integer 
     */
    public function getLotid()
    {
        return $this->lotid;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return A110104
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}