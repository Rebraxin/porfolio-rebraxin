<?php

namespace App\Controller\RestaurantController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_restau")
     */
    public function index()
    {
        return $this->render('restaurant/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
