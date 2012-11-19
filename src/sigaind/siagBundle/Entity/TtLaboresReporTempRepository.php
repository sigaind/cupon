<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TtLaboresReporTempRepository extends EntityRepository
{
    
    public function allLaboresReportadasTemporalActivos($traid)
    {
        $sql="SELECT L.pdmtid, L.pdmtfecha, LA.nombre, L.pdmtcantidad, TR.tranombre, TR.tracodigo, "
            ."L.pdmtjornales, L.supid, L.lineainicial, L.lineafinal, LT.lotcodigo, CT.econombre  "
            ." FROM sigaind\siagBundle\Entity\TtLaboresreportadastemporal L "
            ." LEFT JOIN L.ecoid CT  "
            ." LEFT JOIN L.traid TR  "
            ." LEFT JOIN L.lotid LT  "
            ." LEFT JOIN L.labid LA  "
            ." WHERE TR.traid = :id ";
            
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('id', $traid)
                ->getResult();
    }
    
    public function findLaboresReportadasTemporalActivos($id)
    {
        $sql="SELECT L.pdmtid, L.pdmtfecha, L.pdmtcantidad, CT.ecoid, TR.traid, "
            ."L.pdmtjornales, L.supid, L.lineainicial, L.lineafinal, OA.oreid, LB.nombre, LB.id AS labid, "
            ."TC.tcoid AS tipocontrol, LT.id AS lotid, LT.lotcodigo, LT.lothectarea, LT.lotnumeropalmas, LT.lotdrenajes "
            ." FROM sigaind\siagBundle\Entity\TtLaboresreportadastemporal L "
            ." LEFT JOIN L.ecoid CT  "
            ." LEFT JOIN L.traid TR  "
            ." LEFT JOIN L.lotid LT  "
            ." LEFT JOIN L.oreid OA  "
            ." LEFT JOIN L.labid LB  "
            ." LEFT JOIN LB.tipocontrol TC  "
            ." WHERE L.pdmtid = :id ";
            
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('id', $id)
                ->getResult();
    }
}
