<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddproduitController extends AbstractController
{
    #[Route('/addproduit', name: 'app_addproduit')]
    public function index(): Response
    {
        return $this->render('addproduit/index.html.twig');
    }
}
