<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\Migrations\Configuration\Migration\JsonFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user', methods: ['GET'])]
    public function getUsersList(UserRepository $userRepository, SerializerInterface $serializer): JsonResponse
    {
        $users = $userRepository->findAll();
        $jsonUsers = $serializer->serialize($users, 'json');

        return new JsonResponse($jsonUsers, Response::HTTP_OK, ['Content-Type' =>
        'application/json'], true);
    }

    #[Route('/user/new', name: 'app_user', methods: ['POST'])]
    public function addUser(JsonFile $user, SerializerInterface $serializer): JsonResponse
    {

        
        $jsonUsers = $serializer->serialize($user, 'json');

        return new JsonResponse($jsonUsers, Response::HTTP_OK, ['Content-Type' =>
        'application/json'], true);
    }

}
