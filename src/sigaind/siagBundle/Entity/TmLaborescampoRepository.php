<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmLaborescampoRepository extends EntityRepository
{
    
    public function allLaboresActivosPorEmpresa($empId)
    {
        $sql="SELECT l.id AS labid, l.codigo, l.nombre "
            ." FROM sigaind\siagBundle\Entity\TmLaborescampo l "
            ." JOIN l.empresa e "
            ." WHERE  e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}
