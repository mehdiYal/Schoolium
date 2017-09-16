<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Ecole;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EcoleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ecole1 = new Ecole();
	    $ecole1->setNom("Ibn Rochd");
	    $ecole1->setCode("AZERRTY");
	    $ecole1->setAdresse("Ain naadja, Alger, Algerie");
	    $ecole1->setVille("Alger");
	    $ecole1->setPays("Algerie");
	    $ecole1->setEmail("IbnRochd@ecole.com");
	    $ecole1->setTelephone(0559878788);
	    $ecole1->setDateCreation(new \DateTime("12-12-2000"));
	    $ecole1->setInformations("Ecole ");
	    $manager->persist($ecole1);

	    $ecole2 = new Ecole();
	    $ecole2->setNom("Elyacine");
	    $ecole2->setCode("AZERRTY");
	    $ecole2->setAdresse("Kouba, Alger, Algerie");
	    $ecole2->setVille("Alger");
	    $ecole2->setPays("Algerie");
	    $ecole2->setEmail("Elyacine@ecole.com");
	    $ecole2->setTelephone(0559878788);
	    $ecole2->setDateCreation(new \DateTime("12-12-2000"));
	    $ecole2->setInformations("Ecole ");
	    $manager->persist($ecole2);

	    $manager->flush();

	    $this->addReference('ecole1', $ecole1);
	    $this->addReference('ecole2', $ecole2);
    }


}



 ?>