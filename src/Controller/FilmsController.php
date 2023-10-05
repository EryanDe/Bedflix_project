<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilmsController extends AbstractController
{

    // Route principal qui mène à la liste des films
    #[Route('/films', name: 'app_films')]
    public function index(): Response
    {
        return $this->render('films/films.html.twig', [
            'controller_name' => 'FilmsController',
        ]);
    }


    // Route "secondaire" utilisable par l admin

    // Affichage liste films
    #[Route('/admin/films', name: 'app_admin_films')]
    public function admin_film(): Response
    {
        return $this->render('admin/composants/edit_films/liste_films.html.twig', [
            'controller_name' => 'FilmsController',
        ]);
    }


}
