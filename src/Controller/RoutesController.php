<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoutesController extends AbstractController
{
    /**
     * @Route("/", name="dashboard-page", methods={"GET"}))
     */
    public function dashboard()
    {
        return $this->render('base.html.twig');
    }
}
