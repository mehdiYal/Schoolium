<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Jour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class JourFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $jour = new Jour();
        $jour->setNom("Dimanche");
        $manager->persist($jour);

        $jour2 = new Jour();
        $jour2->setNom("Lundi");
        $manager->persist($jour2);

        $jour3 = new Jour();
        $jour3->setNom("Mardi");
        $manager->persist($jour3);

        $jour4 = new Jour();
        $jour4->setNom("Mercredi");
        $manager->persist($jour4);

        $jour5 = new Jour();
        $jour5->setNom("Jeudi");
        $manager->persist($jour5);
     
    }


}



 ?>