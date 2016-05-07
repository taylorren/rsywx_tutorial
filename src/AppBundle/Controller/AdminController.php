<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{

    public function indexAction()
    {
        $vc=json_decode(file_get_contents("http://api/visit/total"))->out;
        $rv=json_decode(file_get_contents("http://api/visit/recent/20"))->out;
        $mv=json_decode(file_get_contents("http://api/visit/most/20"))->out;
        $lv=json_decode(file_get_contents("http://api/visit/least/20"))->out;
        $rvd=json_decode(file_get_contents("http://api/visit/byDay/14"))->out;
        $nlvd=json_decode(file_get_contents("http://api/visit/forgotten/7/20"))->out;
        
        $info=json_decode(file_get_contents("https://api.kiwivm.it7.net/v1/getServiceInfo?veid=87393&api_key=private_wT0hq5qIdGhCHUnnhqCBTLDE"));
        return $this->render("AppBundle:admin:index.html.twig", array('vc'=>$vc, 'rv'=>$rv, 'mv'=>$mv, 'lv'=>$lv, 'rvd'=>$rvd, 'nlvd'=>$nlvd, 'info'=>$info));
    }
}