<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SysGrupopermisosRepository extends EntityRepository
{
    
    public function allPermisosUsuario($grupo)
    {
        $sql="SELECT p.id, g.gusuid, m.modid, p.lectura, p.escritura, p.update, p.delete "
            ." FROM sigaind\siagBundle\Entity\SysGrupopermisos p "                
            ." JOIN p.gusuid g "
            ." JOIN p.modid m "
            ." WHERE g.gusuid = :grupo ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('grupo', $grupo)
                ->getResult();
    }
}