<?php 

namespace UserBundle\DataFixtures\ORM;

use UserBundle\Entity\Admin;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use SchoolBundle\DataFixtures\ORM\EcoleFixtures as ecole;

class AdminFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $super = new Admin();
	    $super->setUsername('super');
	    $super->setEmail('super@super.com');
	    $super->addRole("ROLE_SUPER_ADMIN");
	    $super->setEnabled(1);
	    $encoder = $this->container->get('security.password_encoder');
	    $password = $encoder->encodePassword($super, 'super');
	    $super->setPassword($password);
	    $manager->persist($super);

	    $admin = new Admin();
	    $admin->setUsername('admin');
	    $admin->setEmail('admin@admin.com');
	    $admin->addRole("ROLE_ADMIN");
	    $admin->setEnabled(1);
	    $admin->setEcole($this->getReference("ecole1"));
	    $encoder = $this->container->get('security.password_encoder');
	    $password = $encoder->encodePassword($admin, 'admin');
	    $admin->setPassword($password);
	    $manager->persist($admin);

	    $admin1 = new Admin();
	    $admin1->setUsername('admin1');
	    $admin1->setEmail('admin1@admin.com');
	    $admin1->addRole("ROLE_ADMIN");
	    $admin1->setEnabled(1);
	    $admin1->setEcole($this->getReference("ecole2"));
	    $encoder = $this->container->get('security.password_encoder');
	    $password = $encoder->encodePassword($admin1, 'admin1');
	    $admin1->setPassword($password);
	    $manager->persist($admin1);

	    $manager->flush();

    }

    public function getDependencies()
    {
        return array(
            ecole::class,
        );
    }


}



 ?>