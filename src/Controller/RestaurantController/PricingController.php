<?php

namespace App\Controller\RestaurantController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class PricingController extends AbstractController
{
    /**
     * @Route("/pricing", name="pricing_restau")
     */
    public function index()
    {
        return $this->render('restaurant/pricing.html.twig', [
            'controller_name' => 'PricingController',
        ]);
    }
}
