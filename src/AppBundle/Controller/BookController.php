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
        $b = json_decode(file_get_contents('http://api/book/latestBook'));

        return $this->render("AppBundle:book:latest.html.twig", ['book' => $b->out[0]]);
    }

    public function summaryAction()
    {
        $summary = json_decode(file_get_contents('http://api/book/summary'))->out;
        return $this->render("AppBundle:book:summary.html.twig", ['summary' => $summary]);
    }

    public function detailAction($id, Request $request)
    {
        $logger = $this->createLogger();

        $books = json_decode(file_get_contents("http://api/book/bookByBookId/$id"))->out;

        if (count($books) == 0) // Book not found
        {
            return $this->render("AppBundle:book:BookNotFound.html.twig", array('bookid' => $id));
        }
        $book = $books[0];
        $isbn = $book->isbn;
        $douban = json_decode(file_get_contents("http://api/douban/douban/$isbn"))->out;

        if ($douban->summary == '（豆瓣找不到）')
        {
            $logger->addError('豆瓣找不到ISBN ' . $book->isbn . '的书：' . $book->title);
        }
        else
        {
            $logger->addInfo('豆瓣找到ISBN ' . $book->isbn . '的书：' . $book->title);
        }

        $lvt = json_decode(file_get_contents("http://api/book/lastvisit/" . $book->bookid))->out;

        $session = $request->getSession();
        $count = $session->get('addvc', 1);
        $session->remove('addvc');

        $vc = json_decode(file_get_contents("http://api/book/visitCount/" . $book->id . "," . $count))->out;
        return $this->render("AppBundle:book:detail.html.twig", array('book' => $book, 'douban' => $douban, 'vc' => $vc, 'lvt' => $lvt));
    }

    private function createLogger()
    {
        $logger = new \Monolog\Logger('my_logger');
        $logger->pushHandler(new \Monolog\Handler\StreamHandler('douban.log', \Monolog\Logger::DEBUG));
        $logger->pushHandler(new \Symfony\Bridge\Monolog\Handler\FirePHPHandler);

        return $logger;
    }

    public function tagsbyidAction($id)
    {
        $tags = json_decode(file_get_contents("http://api/book/tagsByBookId/$id"))->out;

        return $this->render("AppBundle:book:tags.html.twig", array('tags' => $tags));
    }

    public function tagsAddAction(Request $req)
    {
        $q = $req->request->all();
        $tags = $q['newtags'];
        $id = $q['id'];

        $bookid = $this->processTagAdd($tags, $id);
        $url = $this->get('router')->generate('book_detail', array('id' => $bookid));

        //Add session to notify controller that we are refreshing and visit count should remain
        $session = $req->getSession();
        $session->set('addvc', '0');

        return $this->redirect($url);
    }

    private function processTagAdd($tags, $id)
    {
        $existing = $this->convertTagsToArray(json_decode(file_get_contents("http://api/book/tagsByBookId/$id"))->out);

        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('AppBundle:BookBook')->findOneBy(array('id' => $id));

        $tags = trim($tags);
        $tagslist = explode(' ', $tags);

        foreach ($tagslist as $tag)
        {
            if (!in_array($tag, $existing)) //This is a new tag
            {
                $booktaglist = new \AppBundle\Entity\BookTaglist();
                $booktaglist->setBid($book);
                $booktaglist->setTag($tag);

                $em->persist($booktaglist);
            }
            $em->flush();
        }
        return $book->getBookId();
    }

    private function convertTagsToArray($existing)
    {
        $ret = array();
        foreach ($existing as $value)
        {
            $ret[] = $value->tag;
        }
        return $ret;
    }

}
