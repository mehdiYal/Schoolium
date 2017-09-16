<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Salle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SalleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       for ($i = 0; $i <20 ; $i++) {
            $salle = new Salle();
            $salle->setNom("Salle n° ".$i);
            $salle->setCapacite(20);
            $salle->setEquipement("PC, DATASHOW ...");
            $salle->setEcole($this->getReference("ecole1"));
            $manager->persist($salle);
        }

        for ($i = 0; $i <20 ; $i++) {
            $salle = new Salle();
            $salle->setNom("Salle n° ".$i);
            $salle->setCapacite(20);
            $salle->setEquipement("PC, DATASHOW ...");
            $salle->setEcole($this->getReference("ecole2"));
            $manager->persist($salle);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            EcoleFixtures::class,
        );
    }


}



 ?>