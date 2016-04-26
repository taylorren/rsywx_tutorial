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
        $posts = $this->getRecentPosts();
        $wp = array_shift($posts);

        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', ['wp' => $wp]);
    }

    public function latestBook()
    {
        
    }

    private function getRecentPosts($num = 4)
    {
        $res = json_decode(file_get_contents("http://api/wordpress/recentPosts/" . htmlspecialchars($num)));
        return $res->out;
    }

    public function coverAction($id, $title, $author, $width)
    {
        // Construct image file name based on 
        $path = 'covers/';
        $ext = '.jpg';
        $filename = $path . $id . $ext;

        $default = false;

        // Check if the file exists
        if (!file_exists($filename))
        {
            $filename = $path . 'default' . $ext;
            $default = true;
        }

        list($w, $h) = getimagesize($filename);

        $nw = 300;
        $nh = $nw / $w * $h; // Propotionally change the width/height
        // Resize image
        $oimg = imagecreatefromjpeg($filename);
        $nimg = imagecreatetruecolor($nw, $nh);

        imagecopyresampled($nimg, $oimg, 0, 0, 0, 0, $nw, $nh, $w, $h);

        // Print copyright texts
        $copytext1 = "任氏有无轩";
        $copytext2 = "版权所有";
        $copytext3 = "1989-" . date("Y");

        $color = imagecolorallocate($nimg, 255, 255, 255);
        $color2 = imagecolorallocate($nimg, 0, 0, 0);
        $font = $path . 'msyh.ttf';

        imagettftext($nimg, 10, 0, 10, 26, $color, $font, $copytext1);
        imagettftext($nimg, 10, 0, 10, 40, $color, $font, $copytext2);
        imagettftext($nimg, 10, 0, 10, 54, $color, $font, $copytext3);

        if ($default)
        {
            //Print title
            imagettftext($nimg, 12, 0, 10, 140, $color2, $font, $title);
            // Print author
            imagettftext($nimg, 24, 0, 10, 240, $color, $font, $author);
        }

        //Resize the image to fit into reading list
        if ($width <> 300) //300 is the image width for book detail
        {
            $height = $width / $nw * $nh;

            $timg = imagecreatetruecolor($width, $height);
            imagecopyresampled($timg, $nimg, 0, 0, 0, 0, $width, $height, $nw, $nh);
        }
        // Output the image
        header('Content-type: image/png');
        if ($width == 300)
        {
            imagepng($nimg, null, 9);
        }
        else
        {
            imagepng($timg, null, 9);
        }
        imagedestroy($nimg);
        imagedestroy($oimg);
        imagedestroy($timg);
    }

}
