<?php

namespace Amce\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AmceFilmBundle:Default:index.html.twig', array('name' => $name));
    }
}
