<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Matiere;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MatiereFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $m1 = new Matiere();
        $m1->setNom("Arabe");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Français");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Anglais");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Tamazight");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Math");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Physique");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Science");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Science Islamique");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Histoire");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Geographie");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Philosophie");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Dessin");
        $manager->persist($m1);

        $m1 = new Matiere();
        $m1->setNom("Musique");
        $manager->persist($m1);

	    $manager->flush();
    }


}



 ?>