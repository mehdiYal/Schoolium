<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use SchoolBundle\Entity\Matiere;
use SchoolBundle\Entity\MatiereEleve;
use SchoolBundle\Entity\MatiereEvaluation;
use UserBundle\Entity\Eleve;
use SchoolBundle\Form\MatiereType;
use SchoolBundle\Form\MatiereEvaluationType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Evaluation controller.
 *
 * @Route("/matierevaluation")
 */
class MatiereEvaluationController extends Controller
{
   
     /**
     * @Route("/add/classe/{idClasse}/matiere/{idMatiere}", name="addMatiereEvaluation")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        //Initialisation des ids
        $idMatiere=$request->attributes->get('idMatiere');
        $idClasse=$request->attributes->get('idClasse');

        $matiereEvaluation= new MatiereEvaluation();

        $form=$this->createForm(MatiereEvaluationType::class,$matiereEvaluation,array('idMatiere'=>$idMatiere,'idClasse'=>$idClasse));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            foreach ($form->get('evaluation')->getData() as $evaluation){
                $matiereEvaluation->setEvaluation($evaluation);
               
            }
            $em->persist($matiereEvaluation);
            $em->flush($matiereEvaluation);
            
            return $this->redirectToRoute('showEleve', array('idClasse' => $idClasse,'idMatiere' => $idMatiere));
        }

        return $this->render('evaluation/add.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


 
}
