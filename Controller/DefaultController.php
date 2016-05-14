<?php

namespace Levit00\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Levit00ForumBundle:Default:index.html.twig');
    }
}
