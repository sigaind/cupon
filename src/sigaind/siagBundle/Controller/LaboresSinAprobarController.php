<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtLaboresreportadas;

class LaboresSinAprobarController extends Controller
{
    public function LaboresSinAprobarAction()
    {       
        $em = $this->get('doctrine')->getEntityManager();
        
        $usuario = $this->get('security.context')->getToken()->getUser();
        $traid = $usuario->getTraid()->getTraid();
        $labores = $em->getRepository('siagBundle:TtLaboresreportadastemporal')->allLaboresReportadasTemporalActivos($traid);
        
        return $this->render('siagBundle:Agronomia:LaboresAprobar.html.twig', array(
            'labores' => $labores
        ));
    }
    
    public function AprobarLaboresAction()
    {
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $id = $peticion->request->get('id', '0');
        $pos = $peticion->request->get('posicion', '0');
        $cantComparar=0;
        
        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->get('doctrine')->getEntityManager();
        $lab = $em->getRepository('siagBundle:TtLaboresreportadastemporal')->find($id);
        $labor = $em->getRepository('siagBundle:TtLaboresreportadastemporal')->findLaboresReportadasTemporalActivos($id);
        $reporte = new TtLaboresreportadas();
       
        
        if(count($labor)>0)
        {
            $oreId=$labor[0]["oreid"];
            
            $orden = $em->getRepository('siagBundle:TtOrdenagronomia')->find($oreId);
            
            $oreCerrada=$orden->getOrecerrada();
            if($oreCerrada==1)
            {
                $html=-15;
            }
            else
            {        
                $cantAcumulada=$orden->getOrecantidadacumulada();

                if(($labor[0]["tipocontrol"]<=1) || ($labor[0]["tipocontrol"]==null) || ($labor[0]["tipocontrol"]==""))
                {                    
                    $reporte->setOreid( $em->getRepository('siagBundle:TtOrdenagronomia')->find($oreId));
                    $reporte->setEcoid($em->getRepository('siagBundle:TmEmpresacontratista')->find($labor[0]["ecoid"]));
                    $reporte->setTraid($labor[0]["traid"]);
                    $reporte->setLabid($em->getRepository('siagBundle:TmTipolabor')->find($labor[0]["labid"]));
                    $reporte->setLotid($em->getRepository('siagBundle:TmLotes')->find($labor[0]["lotId"]));
                    $reporte->setLrefecha($labor[0]["pdmtfecha"]);
                    $reporte->setLrecantidad($labor[0]["pdmtcantidad"]);
                    $reporte->setLrejornales($labor[0]["pdmtjornales"]);
                    $reporte->setSupid($em->getRepository('siagBundle:TmTrabajadores')->find($labor[0]["supid"]));
                    $reporte->setExportado(0);
                    $reporte->setLineainicial($labor[0]["lineainicial"]);
                    $reporte->setLineafinal($labor[0]["lineafinal"]);
                    $em->persist($reporte);

                    $orden->setOrecantidadacumulada($cantAcumulada+$labor[0]["pdmtcantidad"]);
                    $em->persist($orden);

                    $em->remove($lab);

                    $em->flush();

                    $html=$pos; 
                }
                else
                {
                    if($labor[0]["tipocontrol"]==2)
                    {
                        $cantComparar=$labor[0]["lotnumeropalmas"];
                    }
                    else if($labor[0]["tipocontrol"]==3)
                    {
                        $cantComparar=$labor[0]["lothectarea"];
                    }
                    else if($labor[0]["tipocontrol"]==4)
                    {
                        $cantComparar=$labor[0]["lotdrenajes"];
                    }
                    
                    
                    if($cantAcumulada >= $cantComparar)
                    {
                            $orden -> setOrecerrada(1);
                            $em->persist($orden);
                            $em->flush();

                            $html=-15;
                    }
                    else if(($cantAcumulada+$labor[0]["pdmtcantidad"])<$cantComparar)
                    {                            
                            $reporte->setOreid( $em->getRepository('siagBundle:TtOrdenagronomia')->find($oreId));
                            $reporte->setEcoid($em->getRepository('siagBundle:TmEmpresacontratista')->find($labor[0]["ecoid"]));
                            $reporte->setTraid($em->getRepository('siagBundle:TmTrabajadores')->find($labor[0]["traid"]));
                            $reporte->setLabid($em->getRepository('siagBundle:TmTipolabor')->find($labor[0]["labid"]));
                            $reporte->setLotid($em->getRepository('siagBundle:TmLotes')->find($labor[0]["labid"]));
                            $reporte->setLrefecha($labor[0]["pdmtfecha"]);
                            $reporte->setLrecantidad($labor[0]["pdmtcantidad"]);
                            $reporte->setLrejornales($labor[0]["pdmtjornales"]);
                            $reporte->setSupid($em->getRepository('siagBundle:TmTrabajadores')->find($labor[0]["supid"]));
                            $reporte->setExportado(0);
                            $reporte->setLineainicial($labor[0]["lineainicial"]);
                            $reporte->setLineafinal($labor[0]["lineafinal"]);
                            $em->persist($reporte);

                            $orden->setOrecantidadacumulada($cantAcumulada+$labor[0]["pdmtcantidad"]);
                            $em->persist($orden);

                            $em->remove($lab);

                            $em->flush();

                            $html=$pos;
                    }
                    else if($cantComparar==($cantAcumulada+$labor[0]["pdmtcantidad"]))
                    {                        
                           $reporte->setOreid( $em->getRepository('siagBundle:TtOrdenagronomia')->find($oreId));
                            $reporte->setEcoid($em->getRepository('siagBundle:TmEmpresacontratista')->find($labor[0]["ecoid"]));
                            $reporte->setTraid($em->getRepository('siagBundle:TmTrabajadores')->find($labor[0]["traid"]));
                            $reporte->setLabid($em->getRepository('siagBundle:TmTipolabor')->find($labor[0]["labid"]));
                            $reporte->setLotid($em->getRepository('siagBundle:TmLotes')->find($labor[0]["labid"]));
                            $reporte->setLrefecha($labor[0]["pdmtfecha"]);
                            $reporte->setLrecantidad($labor[0]["pdmtcantidad"]);
                            $reporte->setLrejornales($labor[0]["pdmtjornales"]);
                            $reporte->setSupid($em->getRepository('siagBundle:TmTrabajadores')->find($labor[0]["supid"]));
                            $reporte->setExportado(0);
                            $reporte->setLineainicial($labor[0]["lineainicial"]);
                            $reporte->setLineafinal($labor[0]["lineafinal"]);
                            $em->persist($reporte);

                            $orden->setOrecantidadacumulada($cantAcumulada+$labor[0]["pdmtcantidad"]);
                            $orden -> setOrecerrada(1);
                            $em->persist($orden);

                            $em->remove($lab);

                            $em->flush();

                            $html=$pos;
                    }                    
                    else
                    {
                        $html=-10; 
                    }
                 }
            }
        }
        else
        {
          $html=-5;  
        }
        
        
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
    
    public function EliminarLaborAction()
    {
        
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $id = $peticion->request->get('codigo', '0');

        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->get('doctrine')->getEntityManager();        
        $labor = $em->getRepository('siagBundle:TtLaboresreportadastemporal')->find($id);
        $em->remove($labor);
        $em->flush();

        //ENVIAR LA RESPUESTA
        $html=$id;
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
}
