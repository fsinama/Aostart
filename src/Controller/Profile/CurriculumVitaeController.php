<?php

namespace App\Controller\Profile;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurriculumVitaeController extends AbstractController
{
    #[Route('/profile/curriculumvitae', name: 'profile_curriculum_vitae')]
    public function index(): Response
    {
        return $this->render('profile/curriculum_vitae/index.html.twig', []);
    }
}
