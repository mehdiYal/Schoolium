<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Transport;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TransportFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       for ($i = 0; $i <20 ; $i++) {
            $trans = new Transport();
            $trans->setNom("Transport n° ".$i);
            $trans->setCapacite(20);
            $trans->setDepart("Kouba");
            $trans->setTrajet("Kouba => Kherouba => Bab Ezzouar");
            $trans->setHeureDepart(new \DateTime("H"));
            $trans->setEcole($this->getReference("ecole1"));
            $manager->persist($trans);
        }

        for ($i = 0; $i <20 ; $i++) {
            $trans = new Transport();
            $trans->setNom("Transport n° ".$i);
            $trans->setCapacite(20);
            $trans->setDepart("Kouba");
            $trans->setTrajet("Kouba => Kherouba => Bab Ezzouar");
            $trans->setHeureDepart(new \DateTime("H"));
            $trans->setEcole($this->getReference("ecole2"));
            $manager->persist($trans);
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