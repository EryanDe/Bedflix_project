<?php

namespace App\Controller;

use App\Entity\Utilisateurs;
use App\Form\RegistrationFormType;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, 
    // Interface pour l'authentification : 
    UserAuthenticatorInterface $userAuthenticator, 
    LoginAuthenticator $authenticator, 
    // Accéder à ses entités : 
    EntityManagerInterface $entityManager): Response
    {
        // Création d'un utilisateur 
        $user = new Utilisateurs();
        // Formulaie correspondant : 
        $form = $this->createForm(RegistrationFormType::class, $user);
        // Gérer le form correspondant : 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { // →    Si le formulaire est bon : 
            // l'inscription est gérée ↓  ↓ 
            // encode the plain password
            $user->setPassword(
                // hasher le mdp et le stocker en BDD : 
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // On persiste et on flush : on inscrit dans la base ↓ 
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            // TODO ici : envoi d'email 

            // Ici, on authentfie l'utilisateur si le form est bon  : 
            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        // Si le form n'a pas été envoyé, on envoie sa vue dans le fichier htm .twig : 
        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
