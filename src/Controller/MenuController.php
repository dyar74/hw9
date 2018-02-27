<?php
/**
 * Created by PhpStorm.
 * User: yar-note
 * Date: 26.02.2018
 * Time: 21:18
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    private $menu = [];
    public function menu() {

        $fullRouteNames = array_keys($this->container->get('router')->getRouteCollection()->all());
        foreach ( $fullRouteNames as $route) {
            if (substr( $route, 0, 1) != "_") {
                $this->menu[] = $route;
            }
        }
        return $this->render('/menu/menu.html.twig', ['menu' => $this->menu]);
    }
}