<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VerifierController extends AbstractController
{
    #[Route('/verifier', name: 'app_verifier')]
    public function index(): Response
    {
        return $this->render('verifier/index.html.twig', [
            'controller_name' => 'VerifierController',
        ]);
    }
}
