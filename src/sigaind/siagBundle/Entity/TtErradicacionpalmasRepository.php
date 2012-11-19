<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TtErradicacionpalmasRepository extends EntityRepository
{
    
    public function allErradicaciones($lotid, $causa,$f1, $f2, $empid)
    {
        $em = $this->getEntityManager();
        
        $dql="SELECT  P.id, LT.lotcodigo, P.linea, P.palma, P.fecha, CE.cerrnombre "
            ." FROM sigaind\siagBundle\Entity\TtErradicacionpalmas P "
            ." LEFT JOIN P.lotid LT  " 
            ." LEFT JOIN P.causaId CE  " 
            ." WHERE LT.empid = :empId ";
            
        if(($lotid!=0) || ($lotid!=null) || ($lotid!=""))
        {
            $dql.=" AND LT.id = :lote ";
        }
        if(($f1!=0) || ($f1!=null) || ($f1!=""))
        {
            $dql.=" AND P.fecha BETWEEN :f1 AND :f2 ";
        }
        
        $query = $em->createQuery($dql);
        $query->setParameter('empId',$empid);
        
        if(($lotid!=0) || ($lotid!=null) || ($lotid!=""))
        {
            $query->setParameter('lote',$lotid);
        }
        if(($f1!=0) || ($f1!=null) || ($f1!=""))
        {
            $query->setParameter('f1',$f1);
            $query->setParameter('f2',$f2);
        }
        
        $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        return $datos;
    }                
}
