<?php
/**
 * Created by PhpStorm.
 * User: lasse
 * Date: 8.8.2018
 * Time: 13.04
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    public function helloWorld()
    {
        return new Response("Hello world!");
    }

    public function helloName($name)
    {
        return new Response("Hello " . $name);
    }

    public function helloTemplate()
    {
        return $this->render('hello/world.html.php', array('randomNumber' => random_int(0, 10000)));
    }
}