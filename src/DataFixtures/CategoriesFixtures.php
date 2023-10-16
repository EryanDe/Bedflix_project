<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categories;;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categoriesArray = array();

        for ($i = 0; $i < 20; $i++) {
            $categoriesArray[$i] = new Categories();
        }
        $categoriesArray[0]->setLibelleCategorie('Action');
        $categoriesArray[1]->setLibelleCategorie('Anime');
        $categoriesArray[2]->setLibelleCategorie('Comédie');
        $categoriesArray[3]->setLibelleCategorie('Court-métrage');
        $categoriesArray[4]->setLibelleCategorie('Documentaire');
        $categoriesArray[5]->setLibelleCategorie('Drame');
        $categoriesArray[6]->setLibelleCategorie('Européen');
        $categoriesArray[7]->setLibelleCategorie('Fantastique');
        $categoriesArray[8]->setLibelleCategorie('Français');
        $categoriesArray[9]->setLibelleCategorie('Horreur');
        $categoriesArray[10]->setLibelleCategorie('Indépendant');
        $categoriesArray[11]->setLibelleCategorie('International');
        $categoriesArray[12]->setLibelleCategorie('Jeunesse et famille');
        $categoriesArray[13]->setLibelleCategorie('Musique et comédie musicale');
        $categoriesArray[14]->setLibelleCategorie('Noël');
        $categoriesArray[15]->setLibelleCategorie('Policier');
        $categoriesArray[16]->setLibelleCategorie('Primés');
        $categoriesArray[17]->setLibelleCategorie('Romance');
        $categoriesArray[18]->setLibelleCategorie('SF');
        $categoriesArray[19]->setLibelleCategorie('Thriller');

        for ($i = 0; $i < 20; $i++) {
            $manager->persist($categoriesArray[$i]);
        }

        $manager->flush();
    }
}
