<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmPlagasRepository extends EntityRepository
{
    
    public function allPlagasActivosPorEmpresa($empId)
    {
        $sql="SELECT p.plaid, p.planombre, p.prioridad, p.plasigla "
            ." FROM sigaind\siagBundle\Entity\TmPlagas p "
            ." where p.estid = 1 AND p.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}