<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmSiembraprogramaRepository extends EntityRepository
{
    
    public function allSiembrasActivosPorEmpresa($empId)
    {
        $sql="SELECT s.simid, s.simnombre "
            ." FROM sigaind\siagBundle\Entity\TmSiembraprograma s "
            ." where s.estid = 1 AND s.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}