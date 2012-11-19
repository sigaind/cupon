<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SysUsuariosRepository extends EntityRepository
{
    
    public function allUsuariosActivosPorEmpresa()
    {
        $sql="SELECT u.usuid, u.updalogin, u.ptw, u.empid, t.traid, g.gusuid "
            ." FROM sigaind\siagBundle\Entity\SysUsuarios u "
            ." JOIN u.gusuid g "
            ." JOIN u.traid t ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->getResult();
    }
}
