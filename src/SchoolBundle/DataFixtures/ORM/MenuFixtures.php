<?php 

namespace SchoolBundle\DataFixtures\ORM;

use SchoolBundle\Entity\Menu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MenuFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $menu = new Menu();
            $menu->setJour("Dimanche");
            $menu->setMenu("Frite");
            $menu->setEcole($this->getReference("ecole1"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Lundi");
            $menu->setMenu("Poisson");
            $menu->setEcole($this->getReference("ecole1"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Mardi");
            $menu->setMenu("CousCous");
            $menu->setEcole($this->getReference("ecole1"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Mercredi");
            $menu->setMenu("Pates");
            $menu->setEcole($this->getReference("ecole1"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Jeudi");
            $menu->setMenu("Gratin");
            $menu->setEcole($this->getReference("ecole1"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Dimanche");
            $menu->setMenu("Frite");
            $menu->setEcole($this->getReference("ecole2"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Lundi");
            $menu->setMenu("Poisson");
            $menu->setEcole($this->getReference("ecole2"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Mardi");
            $menu->setMenu("CousCous");
            $menu->setEcole($this->getReference("ecole2"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Mercredi");
            $menu->setMenu("Pates");
            $menu->setEcole($this->getReference("ecole2"));
            $manager->persist($menu);

            $menu = new Menu();
            $menu->setJour("Jeudi");
            $menu->setMenu("Gratin");
            $menu->setEcole($this->getReference("ecole2"));
            $manager->persist($menu);

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