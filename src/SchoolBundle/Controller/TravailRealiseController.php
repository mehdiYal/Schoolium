<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\TravailRealise;
use SchoolBundle\Form\TravailRealiseType;
use Symfony\Component\HttpFoundation\Request;


/**
 * TravailRealise controller.
 *
 * @Route("/travailrealise")
 */
class TravailRealiseController extends Controller
{
    /**
     * @Route("/new", name="new_travail")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {   
       
        $user=$this->get('security.token_storage')->getToken()->getUser();
        $id=$user->getId();
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        $travailrealise= new TravailRealise();
        $statement = $connection->prepare("SELECT matiere_id FROM ens_mat WHERE enseignant_id = :enseignant_id");
        $statement->bindValue('enseignant_id', $id);
        $statement->execute();
        $matieres=$statement->fetchAll();
        $j=0;
        foreach ($matieres as $row) {
            $arrayId[$j]=$row['matiere_id'];
            $j++;
        }

        $form=$this->createForm(TravailRealiseType::class,$travailrealise,array('idEnseignant'=>$id,'idMatiere'=> $arrayId));
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            extract($_POST);
            
            $uploaded_file = $form['travail']->getData();
            if(!empty($travailrealise->getTravail()) && $uploaded_file)
            {
                $file = $travailrealise->getTravail();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_devoir'),
                    $fileName
                );
                $travailrealise->setTravail($fileName);
            }
            $travailrealise->setEnseignant($user);
            $classe=$form['classe']->getData();
            $travailrealise->setAnnee($classe->getAnnee());
            $em->persist($travailrealise);
            $em->flush();
            return $this->render('travailrealise/add.html.twig',array("form"=>$form->createView(),"data"=>$matieres));
    }

        return $this->render('travailrealise/add.html.twig',array("form"=>$form->createView(),"data"=>$matieres));
    }


}
