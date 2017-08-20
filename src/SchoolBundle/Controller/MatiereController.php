<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Matiere;
use SchoolBundle\Form\MatiereType;
use Symfony\Component\HttpFoundation\Request;

class MatiereController extends Controller
{
    /**
     * @Route("/addMatiere", name="addMatiere")
     */
    public function addAction(Request $request)
    {
        $matiere = new Matiere();
        $form=$this->createForm(MatiereType::class,$matiere);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($matiere);
            $em->flush();
            return $this->redirectToRoute('listMatieres');
        }

        return $this->render('matieresViews/addMatiere.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/listMatieres", name="listMatieres")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Matiere");
        $matieres=$repository->findAll();
        return $this->render('matieresViews/listMatieres.html.twig',array("matieres"=>$matieres));
    }

     /**
     * @Route("/editMatiere/{id}", name="editMatiere")
     */
    public function editAction(Request $request,Matiere $matiere)
    {
        $form=$this->createForm(MatiereType::class,$matiere);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listMatieres');
        }

        return $this->render('matieresViews/addMatiere.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/removeMatiere/{id}", name="removeMatiere")
     */
    public function removeAction(Matiere $matiere)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($matiere);
        $em->flush();
        return $this->redirectToRoute('listMatieres'); 
    }


}
