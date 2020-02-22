<?php

namespace App\Controller\RestaurantController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class PortfolioController extends AbstractController
{
    /**
     * @Route("/portfolio", name="portfolio_restau")
     */
    public function index()
    {
        return $this->render('restaurant/portfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
