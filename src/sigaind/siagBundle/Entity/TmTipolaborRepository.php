<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmTipolaborRepository extends EntityRepository
{
    
    public function allLotesActivosPorEmpresa($empId)
    {
        $sql="SELECT l.id, l.lotcodigo, l.lotnombre , l.lothectarea, l.lotnumeropalmas, "
            ." l.lotdensidadsiembra, l.lotppr, l.codcatastral, l.lotdrenajes, z.zonid, m.matid, s.simid "
            ." FROM sigaind\siagBundle\Entity\TmLotes l "
            ." JOIN l.zonid z "
            ." JOIN l.empid e " 
            ." JOIN l.matid m "
            ." JOIN l.simid s  "
            ." JOIN l.estid est  "
            ." WHERE est.estid = 1  "
            ." AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}