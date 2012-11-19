<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AutocompleteController extends Controller
{
    public function LaborAction()
    {
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $data = $peticion->query->get('term', '');
        
        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "select a.id AS id, a.nombre AS value from siagBundle:TmTipolabor a where a.nombre like :data";
        $query = $em->createQuery($dql);
        $query->setParameter('data', '%'.$data.'%');
        $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
                
        
        //ENVIAR LA RESPUESTA
        return $this->render('siagBundle:Default:autocomplete.html.twig', array(
            'datos' => $datos
        ));
    }
    
    public function LotesAction()
    {
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $data = $peticion->query->get('term', '');
        
        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "select a.id AS id, a.lotcodigo AS value from siagBundle:TmLotes a where a.lotcodigo like :data";
        $query = $em->createQuery($dql);
        $query->setParameter('data', '%'.$data.'%');
        $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
                
        
        //ENVIAR LA RESPUESTA
        return $this->render('siagBundle:Default:autocomplete.html.twig', array(
            'datos' => $datos
        ));
    }
    
    public function TrabajadoresAction()
    {
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $data = $peticion->query->get('term', '');
        
        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "select a.traid AS id, a.tranombre AS value from siagBundle:TmTrabajadores a where (a.tracargo='Supervisor') AND (a.tranombre like :data)";
        $query = $em->createQuery($dql);
        $query->setParameter('data', '%'.$data.'%');
        $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
                
        
        //ENVIAR LA RESPUESTA
        return $this->render('siagBundle:Default:autocomplete.html.twig', array(
            'datos' => $datos
        ));
    }
    
    
    public function TrabajadoresTodosAction()
    {
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $data = $peticion->query->get('term', '');
        
        //INVOCAR LA CLASE DE DOCTRINE Y ELIMINAR LA LABOR
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "select a.traid AS id, a.tranombre AS value from siagBundle:TmTrabajadores a where (a.estid=1) AND (a.tranombre like :data)";
        $query = $em->createQuery($dql);
        $query->setParameter('data', '%'.$data.'%');
        $datos = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
                
        
        //ENVIAR LA RESPUESTA
        return $this->render('siagBundle:Default:autocomplete.html.twig', array(
            'datos' => $datos
        ));
    }
}
