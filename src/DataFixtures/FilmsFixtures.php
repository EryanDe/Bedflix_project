<?php


namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Films;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FilmsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');

        $filmsArray = array();
        $categoryRandom = new Categories();
        $categoryRandom->setLibelleCategorie('Noël');
        $manager->persist($categoryRandom);

        for ($i = 1; $i <= 10; $i++) {
            $filmsArray[$i] = new Films();
            $filmsArray[$i]->setTitreFilm($faker->word());
            $filmsArray[$i]->setDescriptionFilm("description du film");
            $filmsArray[$i]->setAfficheFilm($faker->word());
            $filmsArray[$i]->setLienFilm($faker->word());
            $filmsArray[$i]->addCategory($categoryRandom);

            $manager->persist($filmsArray[$i]);
        }

        $manager->flush();
    }
}
