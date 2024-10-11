<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $listAdresse =[];

        for ($i = 0; $i < 10; $i++) {
       $adresse = new Adresse();
       $adresse->setNumero(123 . $i);
       $adresse->setTypeVoie('Rue'. $i);
       $adresse->setNomVoie(' des Cailloux'. $i);
       $adresse->setVille('Paris'. $i);
       $adresse->setCodepostal('75001'. $i);
       $manager->persist($adresse);
       $listAdresse[]=$adresse;
       }

        

        

        $manager->flush();
    }
}
