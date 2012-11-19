<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtOrdenagronomia;


class InformesAgronomiaController extends Controller
{
    public function indexAction()
    {                     
        return $this->render('siagBundle:Informes\Agronomia:LaboresProgramadas.html.twig');
    }
    
    public function insertAction()
    {   
        $html=3;
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $labor = $peticion->request->get('labor', '0');
        $lote = $peticion->request->get('lote', '0');
        $f1 = $peticion->request->get('f1', '0');
        $f2 = $peticion->request->get('f2', '0');
        $sup = $peticion->request->get('sup', '0');
        
        
        $em = $this->get('doctrine')->getEntityManager(); 
        
        $orden = $em->getRepository('siagBundle:TtOrdenagronomia')->findBy(
                                array('lotid' => $lote,'labid' => $labor,'orecerrada' => 0 ));
        
        if(count($orden)>0)
        {
            $html=-1;
        }
        else
        {
            $html=1;
            $newOrden = new TtOrdenagronomia();            
            $newOrden ->setLotid($em->getRepository('siagBundle:TmLotes')->find((int)$lote));
            $newOrden ->setLabid($em->getRepository('siagBundle:TmTipolabor')->find((int)$labor));
            $newOrden ->setOrefecha(new \DateTime());
            $newOrden ->setOrefechainicio(new \DateTime($f1));
            $newOrden ->setOrefechafin(new \DateTime($f2));
            $newOrden ->setOrecerrada(0);
            $newOrden ->setOrecantidadacumulada(0);
            $newOrden ->setSupid($em->getRepository('siagBundle:TmTrabajadores')->find((int)$sup));
            
            $em->persist($newOrden);
            $em->flush();
        }
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
        
        
    public function ConsultaAction()
    {
        //OBTENER FECHAS DE LA PETICION
        $peticion = $this->getRequest();
        $oreId = $peticion->query->get('id', '0');
        $labor = $peticion->query->get('labor', '0');
        $lote = $peticion->query->get('lote', '0');
        $fCreacion = $peticion->query->get('fCreacion', '0');
        $estado = $peticion->query->get('estado', '0');
        
        $em = $this->get('doctrine')->getEntityManager();        
        $ordenes = $em->getRepository('siagBundle:TtOrdenagronomia')->allOrdenesConsultaActivos($oreId, $labor, $lote, $fCreacion, $estado);        
        
         return $this->render('siagBundle:Agronomia\OrdenesAgronomia:ListaOrdenesConsulta.html.twig', array(
            'ordenes' => $ordenes
        ));
    }
    
    public function DetalleOrdenAction()
    {
        //OBTENER FECHAS DE LA PETICION
        $peticion = $this->getRequest();
        $oreId = $peticion->query->get('oreId', '0');
        
        $em = $this->get('doctrine')->getEntityManager();        
        $ordenes = $em->getRepository('siagBundle:TtOrdenagronomia')->allOrdenesConsultaActivos($oreId, "", "", "", "", "", "");
        
        $labores = $em->getRepository('siagBundle:TtLaboresreportadas')->LaboresReportadasPorOrdenActivos($oreId);
        
         return $this->render('siagBundle:Agronomia\OrdenesAgronomia:DetalleOrdenAgronomia.html.twig', array(
            'orden' => $ordenes,
            'labores' =>$labores
        ));
    }
    
    public function cerrarOrdenAction()
    {
        $peticion = $this->getRequest();
        $oreId = $peticion->request->get('id', '0');
        $html=0;
        $em = $this->get('doctrine')->getEntityManager();
        
        if($oreId>0)
        {
            $orden = $em->getRepository('siagBundle:TtOrdenagronomia')->find($oreId);                       
            $orden ->setOrecerrada(1);            
            
            $em->persist($orden);
            $em->flush();
            $html=1;
        }
        else
            $html=-1;
        
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }        
}
