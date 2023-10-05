<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        $userArray = array();

        for ($i = 0; $i < 10; $i++) {
            $userArray[$i] = new User();
            $userArray[$i]->setEmail($faker->email);
            $userArray[$i]->setRoles([]);
            $userArray[$i]->setPassword($faker->password());
            $userArray[$i]->setNomUtilisateur($faker->lastName);
            $userArray[$i]->setPrenomUtilisateur($faker->name);
            $userArray[$i]->setPseudoUtilisateur($faker->userName);
            $userArray[$i]->setPhotoProfilUtilisateur('');
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
