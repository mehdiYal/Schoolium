<?php 

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Eleve;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use SchoolBundle\DataFixtures\ORM\EcoleFixtures as ecole;

class EleveFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for ($i = 0; $i <30 ; $i++) {
    		$eleve = new Eleve();
    		$eleve->setNom("eleve".$i);
    		$eleve->setPrenom("eleve".$i);
		    $eleve->setUsername('eleve'.$i);
		    $eleve->setEmail('eleve'.$i.'@eleve.com');
		    $eleve->addRole("ROLE_ELEVE");
		    $eleve->setEnabled(1);
		    $eleve->setEcole($this->getReference("ecole1"));
		    $eleve->setParent($this->getReference("parent".$i));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($eleve, 'eleve'.$i);
		    $eleve->setPassword($password);
	    	$manager->persist($eleve);
	    	$this->addReference('eleve'.$i, $eleve);
    	}

    	for ($i = 30; $i <60 ; $i++) {
    		$eleve = new Eleve();
    		$eleve->setNom("eleve".$i);
    		$eleve->setPrenom("eleve".$i);
		    $eleve->setUsername('eleve'.$i);
		    $eleve->setEmail('eleve'.$i.'@eleve.com');
		    $eleve->addRole("ROLE_ELEVE");
		    $eleve->setEnabled(1);
		    $eleve->setEcole($this->getReference("ecole2"));
		    $eleve->setParent($this->getReference("parent".$i));
		    $encoder = $this->container->get('security.password_encoder');
		    $password = $encoder->encodePassword($eleve, 'eleve'.$i);
		    $eleve->setPassword($password);
	    	$manager->persist($eleve);
	    	$this->addReference('eleve'.$i, $eleve);
    	}

	    $manager->flush();

    }

    public function getDependencies()
    {
        return array(
            ecole::class,
            ParentalFixtures::class,
        );
    }


}



 ?>