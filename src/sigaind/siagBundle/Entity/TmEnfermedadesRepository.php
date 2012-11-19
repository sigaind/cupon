<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmEnfermedadesRepository extends EntityRepository
{
    
    public function allEnfermedadesActivosPorEmpresa($empId)
    {
        $sql="SELECT e.enfid, e.enfcodigo, e.enfnombre, e.prioridad "
            ." FROM sigaind\siagBundle\Entity\TmEnfermedades e "
            ." where e.estid = 1 AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}
