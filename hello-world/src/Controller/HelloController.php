<?php
/**
 * Created by PhpStorm.
 * User: lasse
 * Date: 8.8.2018
 * Time: 13.04
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    public function helloWorld()
    {
        return new Response("Hello world!");
    }

    public function helloName($name)
    {
        return new Response("Hello " . $name);
    }
}