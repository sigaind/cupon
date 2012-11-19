<?php

namespace sigaind\wsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {   $name="Harold";     
        $helloworld = array('hello' => $name);
        return new Response(json_encode(array('message' => $helloworld)));                
    }
}
