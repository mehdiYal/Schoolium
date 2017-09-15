<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Annee;
use SchoolBundle\Form\AnneeType;
use Symfony\Component\HttpFoundation\Request;

class AnneeController extends Controller
{
    /**
     * @Route("/addAnnee", name="addAnnee")
     */
    public function addAction(Request $request)
    {
        $annee = new Annee();
        $form=$this->createForm(AnneeType::class,$annee);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($annee);
            $em->flush();
            return $this->redirectToRoute('listAnnees');
        }

        return $this->render('anneesViews/addAnnee.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/listAnnees", name="listAnnees")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Annee");
        $annees=$repository->findAll();
        return $this->render('anneesViews/listAnnees.html.twig',array("annees"=>$annees));
    }

     /**
     * @Route("/editAnnee/{id}", name="editAnnee")
     */
    public function editAction(Request $request,Annee $annee)
    {
        $form=$this->createForm(AnneeType::class,$annee);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listAnnees');
        }

        return $this->render('anneesViews/addAnnee.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/removeAnnee/{id}", name="removeAnnee")
     */
    public function removeAction(Annee $annee)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($annee);
        $em->flush();
        return $this->redirectToRoute('listAnnees'); 
    }


}
