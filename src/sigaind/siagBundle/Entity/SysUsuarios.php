<?php

namespace sigaind\siagBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * sigaind\siagBundle\Entity\SysUsuarios
 *
 * @ORM\Table(name="SYS_usuarios")
 * @ORM\Entity(repositoryClass="sigaind\siagBundle\Entity\SysUsuariosRepository")
 */
class SysUsuarios implements UserInterface, \Serializable
{
    /**
     * @var integer $usuid
     *
     * @ORM\Column(name="usuId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuid;

    /**
     * @var string $updalogin
     *
     * @ORM\Column(name="updaLogin", type="string", length=50, nullable=true)
     */
    private $updalogin;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=200, nullable=true)
     */
    private $password;

    /**
     * @var integer $cenid
     *
     * @ORM\Column(name="cenId", type="integer", nullable=true)
     */
    private $cenid;

    /**
     * @var integer $empid
     *
     * @ORM\Column(name="empId", type="integer", nullable=true)
     */
    private $empid;

    /**
     * @var TmTrabajadores
     *
     * @ORM\ManyToOne(targetEntity="TmTrabajadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="traId", referencedColumnName="traId")
     * })
     */
    private $traid;

    /**
     * @var SysEstadoregistros
     *
     * @ORM\ManyToOne(targetEntity="SysEstadoregistros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estId", referencedColumnName="estId")
     * })
     */
    private $estid;

    
    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=100, nullable=true)
     */
    private $salt;
    
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
     * @var string $ptw
     *
     * @ORM\Column(name="ptw", type="string", length=200, nullable=true)
     */
    private $ptw;
    

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
     * Set updalogin
     *
     * @param string $updalogin
     * @return SysUsuarios
     */
    public function setUpdalogin($updalogin)
    {
        $this->updalogin = $updalogin;
    
        return $this;
    }

    /**
     * Get updalogin
     *
     * @return string 
     */
    public function getUpdalogin()
    {
        return $this->updalogin;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return SysUsuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    
    /**
     * Set ptw
     *
     * @param string $ptw
     * @return SysUsuarios
     */
    public function setptw($ptw)
    {
        $this->ptw = $ptw;
    
        return $this;
    }

    /**
     * Get ptw
     *
     * @return string 
     */
    public function getPtw()
    {
        return $this->ptw;
    }
    
    

    /**
     * Set cenid
     *
     * @param integer $cenid
     * @return SysUsuarios
     */
    public function setCenid($cenid)
    {
        $this->cenid = $cenid;
    
        return $this;
    }

    /**
     * Get cenid
     *
     * @return integer 
     */
    public function getCenid()
    {
        return $this->cenid;
    }

    /**
     * Set empid
     *
     * @param integer $empid
     * @return SysUsuarios
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
     * Set traid
     *
     * @param sigaind\siagBundle\Entity\TmTrabajadores $traid
     * @return SysUsuarios
     */
    public function setTraid(\sigaind\siagBundle\Entity\TmTrabajadores $traid=null)
    {
        $this->traid = $traid;
    
        return $this;
    }

    /**
     * Get traid
     *
     * return sigaind\siagBundle\Entity\TmTrabajadores 
     */
    public function getTraid()
    {
        return $this->traid;
    }

    /**
     * Set estid
     *
     * @param sigaind\siagBundle\Entity\SysEstadoregistros $estid
     * @return SysUsuarios
     */
    public function setEstid(\sigaind\siagBundle\Entity\SysEstadoregistros $estid = null)
    {
        $this->estid = $estid;
    
        return $this;
    }

    /**
     * Get estid
     *
     * @return sigaind\siagBundle\Entity\SysEstadoregistros 
     */
    public function getEstid()
    {
        return $this->estid;
    }

    /**
     * Set gusuid
     *
     * @param sigaind\siagBundle\Entity\SysGrupousuarios $gusuid
     * @return SysUsuarios
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
    
    
    function eraseCredentials()
    {
    }
    function getRoles()
    {
        return array('ROLE_USUARIO');
    }
    function getUsername()
    {
        return $this->getUpdalogin();
    }
    
    public function serialize()
    {
       return serialize($this->getUsuid());
    }
 
    public function unserialize($data)
    {
        $this->usuid = unserialize($data);
    }
    
    /**
     * Set salt
     *
     * @param integer $salt
     * @return SysUsuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getsalt()
    {
        return $this->salt;
    }
        
}