<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmsController extends AbstractController
{
    #[Route('/films', name: 'app_films')]
    public function index(): Response
    {
        return $this->render('admin/composants/edit_films/liste_films.html.twig', [
            'controller_name' => 'FilmsController',
        ]);
    }
}
