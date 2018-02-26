<?php
/**
 * Created by PhpStorm.
 * User: yduplyak
 * Date: 20.02.18
 * Time: 15:47
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class HW9Controller extends Controller
{

    public function text()
    {


        return $this->render('/hw9/text.html.twig');
    }
    /**
     *
     *
     * @Route("/temp", name="templates")
     */

    public function temp()
    {
        return $this->render('base.html.twig');
    }

    /**
     *
     *
     * @Route("/json_test", name="json_example")
     */

    public function jsonTest()
    {
        return new JsonResponse([
            'a' => 3,
            'b' => 2,
        ]);
    }

    /**
     *
     *
     * @Route(" /test_name/{name}", name="name_example")
     */

    public function name(Session $session, $name)
    {

        $session->set('name', $name);
        return new Response(
            "session name:" . $session->get('name')
        );
    }


    /**
     *
     *
     * @Route("/red_test", name="redirect_example")
     */

    public function redTest()
    {
        return $this->redirect("https://google.com");
    }


    /**
     * @Route("/post/page/{page}", name="page_example_route", defaults={"page": 1}, methods={"GET"}, requirements={"page"="^\d{1,2}$"})
     */

    public function numberPage(Request $query, $page)
    {

        return $this->render('/hw9/number-page.html.twig', ['page' => $page]);
    }


}