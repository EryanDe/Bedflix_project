<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{


    //  Lien ne fonctionne pas chercher le soucie --> 

            // #[Route('/', name: 'app_accueil')]
            // public function index(): Response
            // {
            //     return $this->render('accueil/index.html.twig', [
            //         'controller_name' => 'AccueilController',
            //     ]);
            // }


    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
}
