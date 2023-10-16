<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Series;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SeriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');

        $seriesArray = array();
        $categoryRandom = new Categories();
        $categoryRandom->setLibelleCategorie('Anime');
        $manager->persist($categoryRandom);

        for ($i = 1; $i <= 10; $i++) {
            $seriesArray[$i] = new Series();
            $seriesArray[$i]->setTitreSerie($faker->word());
            $seriesArray[$i]->setDescriptionSerie("description de la série");
            $seriesArray[$i]->setAfficheSerie($faker->word());
            $seriesArray[$i]->setLienSerie($faker->word());
            $seriesArray[$i]->addCategory($categoryRandom);

            $manager->persist($seriesArray[$i]);
        }

        $manager->flush();
    }
}
