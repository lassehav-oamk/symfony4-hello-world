<?php
/**
 * Created by PhpStorm.
 * User: lassehav
 * Date: 13.8.2018
 * Time: 10.48
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{
    public function menu()
    {
        return $this->render('actionHeroes/menubar.html.php');
    }

}