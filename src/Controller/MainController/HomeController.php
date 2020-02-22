<?php

namespace App\Controller\MainController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('main/homepage.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
