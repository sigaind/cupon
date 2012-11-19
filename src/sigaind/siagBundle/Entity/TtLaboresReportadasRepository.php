<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TtLaboresReportadasRepository extends EntityRepository
{
    
    public function allLaboresPorFechasActivos($f1, $f2)
    {
        $sql="SELECT L.lrepid, L.lrefecha, LA.nombre, L.lrecantidad, TR.tranombre, TR.tracodigo, "
            ."L.lrejornales,  L.lineainicial, L.lineafinal, LT.lotcodigo, CT.econombre, L.exportado, "
            ."SP.tranombre AS supervisor, ORD.oreid "
            ." FROM sigaind\siagBundle\Entity\TtLaboresreportadas L "
            ." LEFT JOIN L.ecoid CT  "
            ." LEFT JOIN L.traid TR  "
            ." LEFT JOIN L.lotid LT  "
            ." LEFT JOIN L.labid LA  "
            ." LEFT JOIN L.supid SP  "
            ." LEFT JOIN L.oreid ORD  "
            ." WHERE L.lrefecha BETWEEN :f1 AND  :f2";
            
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('f1', $f1)
                ->setParameter('f2', $f2)
                ->getResult();
    }
        
    
    public function LaboresReportadasPorOrdenActivos($oreId)
    {
        $sql="SELECT L.lrepid, L.lrefecha, L.lrecantidad, TR.tranombre, TR.tracodigo, "
            ."L.lrejornales,  L.lineainicial, L.lineafinal, CT.econombre, L.exportado, "
            ."SP.tranombre AS supervisor, ORD.oreid "
            ." FROM sigaind\siagBundle\Entity\TtLaboresreportadas L "
            ." LEFT JOIN L.ecoid CT  "
            ." LEFT JOIN L.traid TR  "
            ." LEFT JOIN L.supid SP  "
            ." LEFT JOIN L.oreid ORD  "
            ." WHERE ORD.oreid = :ore";
            
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('ore', $oreId)
                ->getResult();
    }
    
    public function allLaboresReportadasSinPasar()
    {
        $em = $this->getEntityManager();
        
        $dql="SELECT L.lrepid, L.lrefecha, LA.nombre, L.lrecantidad, TR.tranombre, TR.tracodigo, "
            ."L.lrejornales,  L.lineainicial, L.lineafinal, LT.lotcodigo, CT.econombre,LA.id, LA.codigo AS codlabor, "
            ."SP.tranombre AS supervisor, ORD.oreid, SM.simnombre "
            ." FROM sigaind\siagBundle\Entity\TtLaboresreportadas L "
            ." LEFT JOIN L.ecoid CT  "
            ." LEFT JOIN L.traid TR  "
            ." LEFT JOIN L.lotid LT  "
            ." LEFT JOIN L.labid LA  "
            ." LEFT JOIN L.supid SP  "
            ." LEFT JOIN L.oreid ORD  "
            ." LEFT JOIN LT.simid SM  "
            ." WHERE L.exportado = 0 ";
        
        $query = $em->createQuery($dql);
        $labores = $query->getResult();
        
        $idLote=$labores->getLotid()->getId();
        $idLabor=$labores->getLabid()->getId();
        $edad=$labores->getLotid()->getSimid();
        
        
        $dql=" L.id, L.codigo, L.nombre, L.rangosiembrainicial, L.rangosiembrafinal "
        ." FROM sigaind\siagBundle\Entity\TmLaborescampo L "
        ." LEFT JOIN L.tipolabor TL  ";
        
    }
}
