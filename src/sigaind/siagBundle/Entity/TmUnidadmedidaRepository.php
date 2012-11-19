<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmUnidadmedidaRepository extends EntityRepository
{
    
    public function allUnidadesMedidaActivos()
    {
        $sql="SELECT u.uniid, u.unicodigo, u.uninombre, u.unisigla "
            ." FROM sigaind\siagBundle\Entity\TmUnidadmedida u "
            ." where u.estid = 1 ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->getResult();
    }
}
