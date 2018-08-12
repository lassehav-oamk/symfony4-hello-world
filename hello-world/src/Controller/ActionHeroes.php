<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActionHeroes extends AbstractController
{
    public function chuckNorris()
    {
        return $this->render('actionHeroes/hero.html.php',
            array(
                'heroName' => 'Chuck Norris',
                'heroDescription' => 'The best'
            ));
    }

    public function sylvesterStallone()
    {
        return $this->render('actionHeroes/hero.html.php',
            array(
                'heroName' => 'Sylvester Stallone',
                'heroDescription' => 'Rambo'
            ));
    }

    public function arnoldSchwarzenegger()
    {
        return $this->render('actionHeroes/hero.html.php',
            array(
                'heroName' => 'Arnold Schwarzenegger',
                'heroDescription' => 'Mr. Olympia'
            ));
    }
}