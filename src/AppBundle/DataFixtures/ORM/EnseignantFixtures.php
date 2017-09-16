<?php 

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Enseignant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use SchoolBundle\DataFixtures\ORM\EcoleFixtures as ecole;

class EnseignantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for ($i = 0; $i <30 ; $i++) {
    		$ens = new Enseignant();
    		$ens->setNom("ens".$i);
    		$ens->setPrenom("ens".$i);
		    $ens->setUsername('ens'.$i);
		    $ens->setEmail('ens'.$i.'@ens.com');
		    $ens->addRole("ROLE_ENSEIGNANT");
		    $ens->setEnabled(1);
		    $ens->setEcole($this->getReference("ecole1"));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($ens, 'ens'.$i);
		    $ens->setPassword($password);
	    	$manager->persist($ens);
    	}

    	for ($i = 30; $i <60 ; $i++) {
    		$ens = new Enseignant();
    		$ens->setNom("ens".$i);
    		$ens->setPrenom("ens".$i);
		    $ens->setUsername('ens'.$i);
		    $ens->setEmail('ens'.$i.'@ens.com');
		    $ens->addRole("ROLE_ENSEIGNANT");
		    $ens->setEnabled(1);
		    $ens->setEcole($this->getReference("ecole2"));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($ens, 'ens'.$i);
		    $ens->setPassword($password);
	    	$manager->persist($ens);
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