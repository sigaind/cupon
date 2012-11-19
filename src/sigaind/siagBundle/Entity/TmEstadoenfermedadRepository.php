<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmEstadoenfermedadRepository extends EntityRepository
{
    
    public function allEstadosEnfermActivosPorEmpresa($empId)
    {
        $sql="SELECT e.eenid, e.eennombre, e.eensigla, e.prioridad, a.enfid "
            ." FROM sigaind\siagBundle\Entity\TmEstadoenfermedad e "
            ." JOIN e.enfid a "
            ." where e.estid = 1 AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}