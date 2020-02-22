<?php

namespace App\Controller\RestaurantController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/restaurant")
 */
class TeamController extends AbstractController
{
    /**
     * @Route("/team", name="team_restau")
     */
    public function index()
    {
        return $this->render('restaurant/team.html.twig', [
            'controller_name' => 'TeamController',
        ]);
    }
}
