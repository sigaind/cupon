<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmEstadoplagaRepository extends EntityRepository
{
    
    public function allEstadoPlagActivosPorEmpresa($empId)
    {
        $sql="SELECT e.eplid, e.eplnombre, e.eplsiglas, e.eplnivelcritico, e.prioridad, p.plaid "
            ." FROM sigaind\siagBundle\Entity\TmEstadoplaga e "
            ." JOIN e.plaid p  "
            ." where e.estid = 1 AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}