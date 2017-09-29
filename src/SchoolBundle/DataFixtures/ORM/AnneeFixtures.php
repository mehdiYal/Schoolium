<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Annee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnneeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $annee = new Annee();
        $annee->setNom("1ere année");
        $annee->setNiveau("Primaire");
        $manager->persist($annee);

        $annee2 = new Annee();
        $annee2->setNom("2ème année");
        $annee2->setNiveau("Primaire");
        $manager->persist($annee2);

        $annee3 = new Annee();
        $annee3->setNom("3ème année");
        $annee3->setNiveau("Primaire");
        $manager->persist($annee3);

        $annee4 = new Annee();
        $annee4->setNom("4ème année");
        $annee4->setNiveau("Primaire");
        $manager->persist($annee4);

        $annee5 = new Annee();
        $annee5->setNom("5ème année");
        $annee5->setNiveau("Primaire");
        $manager->persist($annee5);

        $annee6 = new Annee();
        $annee6->setNom("1ere année");
        $annee6->setNiveau("CEM");
        $manager->persist($annee6);
        $this->addReference('annee6', $annee6);

        $annee7 = new Annee();
        $annee7->setNom("2ème année");
        $annee7->setNiveau("CEM");
        $manager->persist($annee7);
        $this->addReference('annee7', $annee7);

        $annee8 = new Annee();
        $annee8->setNom("3ème année");
        $annee8->setNiveau("CEM");
        $manager->persist($annee8);

        $annee9 = new Annee();
        $annee9->setNom("4ème année");
        $annee9->setNiveau("CEM");
        $manager->persist($annee9);

	    $manager->flush();
    }


}



 ?>