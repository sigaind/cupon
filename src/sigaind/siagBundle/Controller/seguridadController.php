<?php

namespace sigaind\siagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\SysUsuarios;

class seguridadController extends Controller
{
    public function registroAction()
    {
        return $this->render('siagBundle:Seguridad:registroUsuarios.html.twig');
    }
    
    public function insertAction()
    {   
        $html=3;
        //OBTENER EL ID DE LA LABOR A ELIMINAR
        $peticion = $this->getRequest();
        $login = $peticion->request->get('usu', '0');
        $clave = $peticion->request->get('clave', '0');
        $traId = $peticion->request->get('traid', '0');
        $grupo = $peticion->request->get('grupo', '0');
        $estid = $peticion->request->get('estado', '0');
                
        $em = $this->get('doctrine')->getEntityManager(); 
                
        $usuario = new SysUsuarios();
        $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);        
        $usuario->setEmpid(1);
        $usuario->setUpdalogin($login);
        $usuario->setGusuid($em->getRepository('siagBundle:SysGrupousuarios')->find((int)$grupo));
        $usuario->setTraid($em->getRepository('siagBundle:TmTrabajadores')->find((int)$traId));
        $usuario->setEstid($em->getRepository('siagBundle:SysEstadoregistros')->find((int)$estid));
        $usuario->setPtw($clave);
        $usuario->setSalt(md5(time()));
        $passwordCodificado = $encoder->encodePassword(
                   $clave, $usuario->getSalt()
          );
        $usuario->setPassword($passwordCodificado);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($usuario);
        $em->flush();
        
        return new Response($html, 200, array('Content-Type' => 'text/html'));
    }
}
