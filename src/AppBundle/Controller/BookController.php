<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * Test changes in Linux
     */
    public function searchAction(Request $request)
    {
        // replace this example code with whatever you need
        dump($request);
        die();
    }
    
    public function latestAction()
    {
        $b= json_decode(file_get_contents('http://api/book/latestBook'));
     
        return $this->render("AppBundle:book:latest.html.twig", ['book' => $b->out[0]]);
    }
}
