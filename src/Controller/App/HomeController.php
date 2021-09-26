<?php

namespace App\Controller\App;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route(path: ['/','/profile/curriculumvitae'], name: 'profile_curriculum_vitae')]
    public function index(): Response
    {
        return $this->render('profile/curriculum_vitae/index.html.twig', []);
    }


    #[Route('/portfolio/', name: 'portfolio_app')]
    public function portfolio(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'AppController',
        ]);
    }
}
