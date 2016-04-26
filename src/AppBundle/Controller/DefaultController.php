<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * Test changes in Linux
     */
    public function indexAction(Request $request)
    {
        $posts=$this->getRecentPosts();
        $wp=array_shift($posts);
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', ['wp'=>$wp]);
    }
    
    public function latestBook()
    {
        
    }
    
    private function getRecentPosts($num=4)
    {
        $res=  json_decode(file_get_contents("http://api/wordpress/recentPosts/". htmlspecialchars($num)));
        return $res->out;
    }
            
}
