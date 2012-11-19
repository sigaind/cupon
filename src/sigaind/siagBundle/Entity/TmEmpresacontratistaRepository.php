<?php

namespace sigaind\siagBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TmEmpresacontratistaRepository extends EntityRepository
{
    
    public function allEmpresaContratistaActivosPorEmpresa($empId)
    {
        $sql="SELECT c.ecoid, c.ecocodigo, c.econombre, c.econit, c.ecorepresentante, "
            ." e.empid, c.econitrepresentante "
            ." FROM sigaind\siagBundle\Entity\TmEmpresacontratista c "
            ." JOIN c.empid e "
            ." where c.estid = 1 AND e = :empresa ";
        return $this->getEntityManager()                
                ->createQuery($sql)
                ->setParameter('empresa', $empId)
                ->getResult();
    }
}