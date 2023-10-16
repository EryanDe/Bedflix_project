<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Episodes;
use App\Entity\Saisons;
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

            $saisonNumber = 1;
            $saisonArray = array();
            for ($j = 0; $j < 3; $j++) {
                $saisonArray[$j] = new Saisons();
                $saisonArray[$j]->setNumeroSaison($saisonNumber);
                $saisonArray[$j]->setTitreSaison($faker->languageCode);
                $saisonArray[$j]->setSerie($seriesArray[$i]);
                $saisonNumber++;
                $manager->persist($saisonArray[$j]);
                
                $episodeArray = array();
                $episodeNumber = 1;
                
                for ($k = 0; $k < 10; $k++) {
                    $episodeArray[$k] = new Episodes();
                    $episodeArray[$k]->setNumeroEpisode($episodeNumber);
                    $episodeArray[$k]->setTitreEpisode($faker->titleFemale);
                    $episodeArray[$k]->setDureeEpisode($faker->numberBetween(15, 35));
                    $episodeArray[$k]->setSaison($saisonArray[$j]);
                    $episodeNumber++;
                    $manager->persist($episodeArray[$k]);
                }
                
            }
        }
        $manager->flush();
    }
}
