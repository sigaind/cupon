<?php

namespace sigaind\integracionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use sigaind\siagBundle\Entity\TtLaboresreportadas;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->get('doctrine')->getEntityManager();
                
        $lotes = $em->getRepository('siagBundle:TtLaboresreportadas')->allLaboresReportadasSinPasar();
        return $this->render('integracionBundle:Default:index.html.twig', array(
            'lotes' => $lotes
        ));
    }
}
