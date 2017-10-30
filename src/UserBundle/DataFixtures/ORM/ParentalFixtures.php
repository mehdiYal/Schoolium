<?php 

namespace UserBundle\DataFixtures\ORM;

use UserBundle\Entity\Parental;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use SchoolBundle\DataFixtures\ORM\EcoleFixtures as ecole;

class ParentalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for ($i = 0; $i <30 ; $i++) {
    		$parent = new Parental();
    		$parent->setNom("parent".$i);
    		$parent->setPrenom("parent".$i);
		    $parent->setUsername('parent'.$i);
		    $parent->setEmail('parent'.$i.'@parent.com');
		    $parent->addRole("ROLE_PARENT");
		    $parent->setEnabled(1);
		    $parent->setEcole($this->getReference("ecole1"));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($parent, 'parent'.$i);
		    $parent->setPassword($password);
	    	$manager->persist($parent);
	    	$this->addReference('parent'.$i, $parent);
    	}

    	for ($i = 30; $i <60 ; $i++) {
    		$parent = new Parental();
    		$parent->setNom("parent".$i);
    		$parent->setPrenom("parent".$i);
		    $parent->setUsername('parent'.$i);
		    $parent->setEmail('parent'.$i.'@parent.com');
		    $parent->addRole("ROLE_PARENT");
		    $parent->setEnabled(1);
		    $parent->setEcole($this->getReference("ecole2"));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($parent, 'parent'.$i);
		    $parent->setPassword($password);
	    	$manager->persist($parent);
	    	$this->addReference('parent'.$i, $parent);
    	}

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