<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmProductoquimicoRepository extends EntityRepository
{
    
    public function allProductoQuimicoActivosPorEmpresa($empId)
    {
        $sql="SELECT p.proid, p.procodigo, p.pronombre, u.uniid, p.profactorconversion, "
            ." p.profertilizacionsanidad "
            ." FROM sigaind\siagBundle\Entity\TmProductoquimico p "
            ." JOIN p.uniid u "
            ." JOIN p.empid e "
            ." JOIN p.estid es "
            ." where es.estid = 1 AND e.empid = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}