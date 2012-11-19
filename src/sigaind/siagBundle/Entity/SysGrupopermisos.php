<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysGrupopermisos
 *
 * @ORM\Table(name="sys_grupopermisos")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\SysGrupopermisosRepository")
 */
class SysGrupopermisos
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
     * @var SysGrupousuarios
     *
     * @ORM\ManyToOne(targetEntity="SysGrupousuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gusuId", referencedColumnName="gusuId")
     * })
     */
    private $gusuid;
    
    
    /**
     * @var SysModulo
     *
     * @ORM\ManyToOne(targetEntity="SysModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modId", referencedColumnName="modId")
     * })
     */
    private $modid;
    
    /**
     * @var boolean $lectura
     *
     * @ORM\Column(name="lectura", type="smallint", nullable=true)
     */
    private $lectura;

    /**
     * @var boolean $escritura
     *
     * @ORM\Column(name="escritura", type="smallint", nullable=true)
     */
    private $escritura;

    /**
     * @var boolean $update
     *
     * @ORM\Column(name="update", type="smallint", nullable=true)
     */
    private $update;

    /**
     * @var boolean $delete
     *
     * @ORM\Column(name="delete", type="smallint", nullable=true)
     */
    private $delete;
    


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
     * Set gusuid
     *
     * @param sigaind\siagBundle\Entity\SysGrupousuarios $gusuid
     * @return SysGrupopermisos
     */
    public function setGusuid(\sigaind\siagBundle\Entity\SysGrupousuarios $gusuid = null)
    {
        $this->gusuid = $gusuid;
    
        return $this;
    }

    /**
     * Get gusuid
     *
     * @return sigaind\siagBundle\Entity\SysGrupousuarios 
     */
    public function getGusuid()
    {
        return $this->gusuid;
    }
    
    
    /**
     * Set modid
     *
     * @param sigaind\siagBundle\Entity\SysModulo $modid
     * @return SysGrupopermisos
     */
    public function setModid(\sigaind\siagBundle\Entity\SysGrupousuarios $modid = null)
    {
        $this->modid = $modid;
    
        return $this;
    }

    /**
     * Get modid
     *
     * @return sigaind\siagBundle\Entity\SysGrupousuarios 
     */
    public function getModid()
    {
        return $this->modid;
    }
    
    /**
     * Set lectura
     *
     * @param smallint $lectura
     * @return SysGrupousuarios
     */
    public function setLectura($lectura)
    {
        $this->lectura = $lectura;
    
        return $this;
    }

    /**
     * Get lectura
     *
     * @return smallint 
     */
    public function getLectura()
    {
        return $this->lectura;
    }

    /**
     * Set escritura
     *
     * @param smallint $escritura
     * @return SysGrupopermisos
     */
    public function setEscritura($escritura)
    {
        $this->escritura = $escritura;
    
        return $this;
    }

    /**
     * Get escritura
     *
     * @return smallint 
     */
    public function getEscritura()
    {
        return $this->escritura;
    }

    /**
     * Set update
     *
     * @param smallint $update
     * @return SysGrupopermisos
     */
    public function setUpdate($update)
    {
        $this->update = $update;
    
        return $this;
    }

    /**
     * Get update
     *
     * @return smallint 
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Set delete
     *
     * @param boolean $delete
     * @return SysGrupopermisos
     */
    public function setGusudelete($delete)
    {
        $this->delete = $delete;
    
        return $this;
    }

    /**
     * Get delete
     *
     * @return smallint 
     */
    public function getDelete()
    {
        return $this->delete;
    }
}