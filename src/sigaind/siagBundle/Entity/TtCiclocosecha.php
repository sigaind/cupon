<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\TtCiclocosecha
 *
 * @ORM\Table(name="TT_CicloCosecha")
 * @ORM\Entity
 */
class TtCiclocosecha
{
    /**
     * @var integer $ccosid
     *
     * @ORM\Column(name="ccosId", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccosid;

    /**
     * @var \DateTime $ccosfechaingreso
     *
     * @ORM\Column(name="ccosFechaIngreso", type="date", nullable=true)
     */
    private $ccosfechaingreso;

    /**
     * @var \DateTime $ccosfechasalida
     *
     * @ORM\Column(name="ccosFechaSalida", type="date", nullable=true)
     */
    private $ccosfechasalida;

    /**
     * @var TmLotes
     *
     * @ORM\ManyToOne(targetEntity="TmLotes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="lotId", referencedColumnName="id")
     * })
     */
    private $lotid;



    /**
     * Get ccosid
     *
     * @return integer 
     */
    public function getCcosid()
    {
        return $this->ccosid;
    }

    /**
     * Set ccosfechaingreso
     *
     * @param \DateTime $ccosfechaingreso
     * @return TtCiclocosecha
     */
    public function setCcosfechaingreso($ccosfechaingreso)
    {
        $this->ccosfechaingreso = $ccosfechaingreso;
    
        return $this;
    }

    /**
     * Get ccosfechaingreso
     *
     * @return \DateTime 
     */
    public function getCcosfechaingreso()
    {
        return $this->ccosfechaingreso;
    }

    /**
     * Set ccosfechasalida
     *
     * @param \DateTime $ccosfechasalida
     * @return TtCiclocosecha
     */
    public function setCcosfechasalida($ccosfechasalida)
    {
        $this->ccosfechasalida = $ccosfechasalida;
    
        return $this;
    }

    /**
     * Get ccosfechasalida
     *
     * @return \DateTime 
     */
    public function getCcosfechasalida()
    {
        return $this->ccosfechasalida;
    }

    /**
     * Set lotid
     *
     * @param sigaind\siagBundle\Entity\TmLotes $lotid
     * @return TtCiclocosecha
     */
    public function setLotid(\sigaind\siagBundle\Entity\TmLotes $lotid = null)
    {
        $this->lotid = $lotid;
    
        return $this;
    }

    /**
     * Get lotid
     *
     * @return sigaind\siagBundle\Entity\TmLotes 
     */
    public function getLotid()
    {
        return $this->lotid;
    }
}