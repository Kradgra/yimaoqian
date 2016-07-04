<?php

namespace Yimaoqian\YimaoqianBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YimaoqianYimaoqianBundle:Default:index.html.twig');
    }
}
