<?php
/**
 * Created by PhpStorm.
 * User: yar-note
 * Date: 26.02.2018
 * Time: 21:18
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Menu extends Controller
{
    private $menu = [];
    public function menu() {
        $this->render('/menu/menu.html.twig', ['menu' => $this->menu]);
    }
}