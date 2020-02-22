<?php

namespace App\Controller\RestaurantController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index_restau")
     */
    public function index()
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
        ]);
    }
}
