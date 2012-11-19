<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TtOrdenagronomiaRepository extends EntityRepository
{
    
    public function allOrdenesConsultaActivos($id, $labor, $lote, $fCreacion, $estado)
    {
        $em = $this->getEntityManager();
        
        $dql="SELECT O.oreid, O.orefecha, O.orefechainicio, O.orefechafin, O.orefechainicioreal, "
            ." O.orefechafinreal, O.orecantidadacumulada, O.orecerrada, LT.lotcodigo, LB.nombre, "
            ." TR.tracodigo, TR.tranombre "                
            ." FROM sigaind\siagBundle\Entity\TtOrdenagronomia O "
            ." LEFT JOIN O.lotid LT  "
            ." LEFT JOIN O.labid LB  "
            ." LEFT JOIN O.supid TR  ";        
        $dql.=" WHERE O.empid=1 ";
        
                
        
        
        
        if(($id!=0) || ($id!=null) || ($id!=""))
        {
            $dql.=" AND O.oreid = :id ";
            $query = $em->createQuery($dql);
            $query->setParameter('id',$id);
            $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        }
        else
        {
            if(($labor!=0) || ($labor!=null) || ($labor!=""))
            {
                $dql.=" AND LB.id = :labor ";
            }
            if(($lote!=0) || ($lote!=null) || ($lote!=""))
            {
                $dql.=" AND LT.id = :lote ";
            }
            if(($fCreacion!=0) || ($fCreacion!=null) || ($fCreacion!=""))
            {
                $dql.=" AND O.orefecha = :fCreacion ";
            }
            if($estado>=0)
            {
                $dql.=" AND O.orecerrada = :estado ";
            }
            
            $query = $em->createQuery($dql);
            
            if(($labor!=0) || ($labor!=null) || ($labor!=""))
            {
                $query->setParameter('labor',$labor);
            }
            if(($lote!=0) || ($lote!=null) || ($lote!=""))
            {
                $query->setParameter('lote',$lote);
            }
            if(($fCreacion!=0) || ($fCreacion!=null) || ($fCreacion!=""))
            {
                $query->setParameter('fCreacion',$fCreacion);
            }
            if($estado>=0)
            {
                $query->setParameter('estado',$estado);
            }
            
            $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        }
        
        return $datos;
    }
    
    public function allLotesProgramadosActivos($empId, $supId)
    {
        
        $dql="SELECT l.id, l.lotcodigo, l.lotnombre , l.lothectarea, l.lotnumeropalmas, "
            ." l.lotdensidadsiembra, l.lotppr, l.codcatastral, l.lotdrenajes, z.zonid, m.matid, s.simid "                                
            ." FROM sigaind\siagBundle\Entity\TtOrdenagronomia O "
            ." LEFT JOIN O.lotid l  "
            ." LEFT JOIN O.supid SP  "
            ." LEFT JOIN l.zonid z "
            ." LEFT JOIN l.empid e " 
            ." LEFT JOIN l.matid m "
            ." LEFT JOIN l.simid s  "
            ." WHERE O.orecerrada=0 "
            ." AND SP.traid =:sup "       
            ." AND O.empid=:empId ";
            return $this->getEntityManager()                
                ->createQuery($dql)
                ->setParameter('sup', $supId)
                ->setParameter('empId', $empId)
                ->getResult();
    }
    
    public function allLaboresProgramadosActivos($empId, $supId)
    {
        
        $dql="SELECT l.id, l.codigo, l.nombre, u.unicodigo, c.tcoid, c.tcounidad "                                
            ." FROM sigaind\siagBundle\Entity\TtOrdenagronomia O "
            ." LEFT JOIN O.labid l  "
            ." LEFT JOIN O.supid SP  "
            ." LEFT JOIN l.unidadmedida u "
            ." LEFT JOIN l.tipocontrol c "
            ." WHERE O.orecerrada=0 "
            ." AND SP.traid =:sup "       
            ." AND O.empid=:empId ";
            return $this->getEntityManager()                
                ->createQuery($dql)
                ->setParameter('sup', $supId)
                ->setParameter('empId', $empId)
                ->getResult();
    }
    
    public function allOrdenesActivasUsuario($empId, $supId)
    {
        
        $dql="SELECT O.oreid, O.orecantidadacumulada, O.orecerrada, LT.id AS lotid, LB.id AS labid "              
            ." FROM sigaind\siagBundle\Entity\TtOrdenagronomia O "
            ." LEFT JOIN O.lotid LT  "
            ." LEFT JOIN O.labid LB  "
            ." LEFT JOIN O.supid SP  "
            ." WHERE O.orecerrada=0 "
            ." AND SP.traid =:sup "       
            ." AND O.empid=:empId ";
            return $this->getEntityManager()                
                ->createQuery($dql)
                ->setParameter('sup', $supId)
                ->setParameter('empId', $empId)
                ->getResult();
        
    }
}
