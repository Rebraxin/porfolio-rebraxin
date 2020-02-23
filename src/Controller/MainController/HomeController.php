<?php

namespace App\Controller\MainController;

use App\Entity\Skill;
use App\Entity\Language;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $languages = $this->getDoctrine()->getRepository(Language::class)->findAll();
        $skills = $this->getDoctrine()->getRepository(Skill::class)->findAll();

        return $this->render('main/homepage.html.twig', [
            'languages' => $languages,
            'skills' => $skills,
        ]);
    }
}
