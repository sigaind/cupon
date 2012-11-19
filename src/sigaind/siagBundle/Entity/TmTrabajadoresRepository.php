<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmTrabajadoresRepository extends EntityRepository
{
    
    public function allTrabajadoresActivosPorEmpresa($empId)
    {
        $sql="SELECT t.traid, t.tracodigo, t.tranombre, e.ecoid "
            ." FROM sigaind\siagBundle\Entity\TmTrabajadores t "
            ." JOIN t.ecoid e "
            ." where t.estid = 1 AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}