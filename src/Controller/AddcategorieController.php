<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddcategorieController extends AbstractController
{
    #[Route('/addcategorie', name: 'app_addcategorie')]
    public function index(): Response
    {
        return $this->render('addcategorie/index.html.twig');
    }
}
