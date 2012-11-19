<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtErradicacionpalmas;


class ErradicarPalmasController extends Controller
{
    public function indexAction()
    {
        $usuario = $this->get('security.context')->getToken()->getUser();
        $empid = $usuario->getEmpid();
        
        $em = $this->get('doctrine')->getEntityManager();
        $CausasErradicacion= $em->getRepository('siagBundle:TmCausaserradicacion')->findBy(array('empresa' => $empid));
        return $this->render('siagBundle:Agronomia\sanidad:ErradicarPalmas.html.twig',array(
                'causas' => $CausasErradicacion )
                );
    }
    
    public function insertAction()
    {   
        $html=3;
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $lotId = $peticion->request->get('lotId', '0');
        $linea = $peticion->request->get('linea', '0');
        $palma = $peticion->request->get('palma', '0');
        $f1 = $peticion->request->get('f1', '0');
        $causa = $peticion->request->get('causa', '0');
        
        
        $em = $this->get('doctrine')->getEntityManager(); 
        
        $erradicacion = $em->getRepository('siagBundle:TtErradicacionpalmas')->findBy(
                                array('lotid' => $lotId,'linea' => $linea,'palma' => $palma ));
        
        if(count($erradicacion)>0)
        {
            $html=-1;
        }
        else
        {
            $lote = $em->getRepository('siagBundle:TmLotes')->find($lotId);
            $cantPalmas=$lote->getLotnumeropalmas() - 1;
            $lote->setLotnumeropalmas($cantPalmas);
            $em->persist($lote);
            
            $html=1;
            $errad = new TtErradicacionpalmas();
            $errad ->setLotid($em->getRepository('siagBundle:TmLotes')->find($lotId));
            $errad ->setFecha(new \DateTime($f1));
            $errad ->setLinea($linea);
            $errad ->setPalma($palma);
            $errad ->setCausaId($em->getRepository('siagBundle:TmCausaserradicacion')->find((int)$causa));
            
            $em->persist($errad);
            $em->flush();
        }
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
        
        
    public function ConsultaAction()
    {
        //OBTENER FECHAS DE LA PETICION
        $peticion = $this->getRequest();
        $lote = $peticion->query->get('lotId', '0');
        $f1 = $peticion->query->get('f1', '0');
        $f2 = $peticion->query->get('f2', '0');
        
        $usuario = $this->get('security.context')->getToken()->getUser();
        $empid = $usuario->getEmpid();
        
        $em = $this->get('doctrine')->getEntityManager();        
        $erradicaciones = $em->getRepository('siagBundle:TtErradicacionpalmas')->allErradicaciones($lote, null, $f1, $f2, $empid);        
        
         return $this->render('siagBundle:Agronomia\sanidad:ListaPalmasErradicadas.html.twig', array(
            'erradicaciones' => $erradicaciones
        ));
    }
    
     
    
    public function ConsultaCaudasErradicacionAction()
    {        
        $em = $this->get('doctrine')->getEntityManager();
        
        $usuario = $this->get('security.context')->getToken()->getUser();
        $empid = $usuario->getEmpid();
        
        $CausasErradicacion= $em->getRepository('siagBundle:TmCausaserradicacion')->findBy(array('empresa' => $empid));            
        $i=0;
        $array=array();
        foreach ($CausasErradicacion as $causas) {
            $array[$i] = array("id"=>$causas->getCerrid());
            $array[$i] = array("name"=>$causas->getCerrnombre());
            $i++;
        }
        
        return new Response(json_encode($array));
    }
}
