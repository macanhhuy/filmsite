<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\UserBundle\Form\UserType;
use Acme\UserBundle\Form\ContactType;
class DefaultController extends Controller
{
    public function indexAction()
    {
    	$form = $this->createForm(new UserType());
        return $this->render('AcmeUserBundle:Default:index.html.twig', array('form'=>$form->createView()));
    }
}
