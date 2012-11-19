<?php

namespace sigaind\wsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtLaboresreportadastemporal;
use sigaind\siagBundle\Entity\TtCensoplagas;

class TablasOperacionalesController extends Controller
{
    public function InsertarLaboresReportadasAction()
    {
        $peticion = $this->getRequest();
        $pdmtId = $peticion->get('pdmtId', '0');
        $oreId = $peticion->get('oreId', '0');                
        $ecoId = $peticion->get('ecoId', '0');
        $pdmtFecha = $peticion->get('pdmtFecha', '0');
        $traId = $peticion->get('traId', '0');
        $labId = $peticion->get('labId', '0');
        $lotId = $peticion->get('lotId', '0');
        $lineaInicial = $peticion->get('lineaInicial', '0');
        $lineaFinal = $peticion->get('lineaFinal', '0');
        $pdmtCantidad = $peticion->get('pdmtCantidad', '0');
        $pdmtJornales = $peticion->get('pdmtJornales', '0');
        $supId = $peticion->get('supId', '0');
        
        $d="off";

        if($pdmtId=="null")
            $d="off";
        
        if($oreId!=0)
        {
            $em = $this->get('doctrine')->getEntityManager();        
            $reporte = new TtLaboresreportadastemporal();
            $reporte->setOreid($em->getRepository('siagBundle:TtOrdenagronomia')->find((int)$oreId));
            $reporte->setEcoid($em->getRepository('siagBundle:TmEmpresacontratista')->find((int)$ecoId));
            $reporte->setTraid($em->getRepository('siagBundle:TmTrabajadores')->find((int)$traId));
            $reporte->setLabid($em->getRepository('siagBundle:TmTipolabor')->find((int)$labId));
            $reporte->setLotid($em->getRepository('siagBundle:TmLotes')->find((int)$lotId));
            $reporte->setPdmtfecha(new \DateTime($pdmtFecha));
            $reporte->setPdmtcantidad((double)$pdmtCantidad);
            $reporte->setPdmtjornales(1);
            $reporte->setSupid((int)$supId);
            $reporte->setLineainicial((int)$lineaInicial);
            $reporte->setLineafinal((int)$lineaFinal);
            $em->persist($reporte);
            $em->flush();
            $d="ok";
        }
        
                
        return new Response($d);
    }
    
    
    public function InsertarCensoPlagaAction()
    {
        $peticion = $this->getRequest();
        $cplaid = $peticion->get('cplaid', '0');
        $cplaconsecutivo = $peticion->get('cplaconsecutivo', '0');                
        $cplafecha = $peticion->get('cplafecha', '0');
        $lotid = $peticion->get('lotid', '0');
        $cplalinea = $peticion->get('cplalinea', '0');
        $cplapalma = $peticion->get('cplapalma', '0');
        $traid = $peticion->get('traid', '0');
        $plaid = $peticion->get('plaid', '0');
        $eplid = $peticion->get('eplid', '0');
        $cplacantidad = $peticion->get('cplacantidad', '0');
        $cplaobservacion = $peticion->get('cplaobservacion', '0');
        
        $d="off";

        if($cplaid=="null")
            $d="off";
        
        if($cplaconsecutivo!=0)
        {
            $em = $this->get('doctrine')->getEntityManager();        
            $censo = new TtCensoplagas;
            $censo->setCplaconsecutivo($cplaconsecutivo);
            $censo->setCplafecha(new \DateTime($cplafecha));
            $censo->setCplalinea((int)$cplalinea);
            $censo->setCplapalma((int)$cplapalma);            
            $censo->setLotid($em->getRepository('siagBundle:TmLotes')->find((int)$lotid));
            $censo->setTraid($em->getRepository('siagBundle:TmTrabajadores')->find((int)$traid));                        
            $censo->setPlaid($em->getRepository('siagBundle:TmPlagas')->find((int)$plaid));
            $censo->setEplid($em->getRepository('siagBundle:TmEstadoplaga')->find((int)$eplid));
            $censo->setCplacantidad((int)$cplacantidad);
            $censo->setCplaobservacion($cplaobservacion);
           
            $em->persist($censo);
            $em->flush();
            $d="ok";
        }
        
                
        return new Response($d);
    }
}