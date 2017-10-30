<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Salle;
use SchoolBundle\Form\SalleType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Salle controller.
 *
 * @Route("/salle")
 */
class SalleController extends Controller
{
    /**
     * @Route("/add", name="addSalle")
     */
    public function addAction(Request $request)
    {
        $salle = new Salle();
        $form=$this->createForm(SalleType::class,$salle);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $salle->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute('listSalles');
        }

        return $this->render('sallesViews/addSalle.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/list", name="listSalles")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Salle");
        $salles=$repository->findAll();
        return $this->render('sallesViews/listSalles.html.twig',array("salles"=>$salles));
    }

     /**
     * @Route("/edit/{id}", name="editSalle")
     */
    public function editAction(Request $request,Salle $salle)
    {
        $form=$this->createForm(SalleType::class,$salle);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listSalles');
        }

        return $this->render('sallesViews/addSalle.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeSalle")
     */
    public function removeAction(Salle $salle)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($salle);
        $em->flush();
        return $this->redirectToRoute('listSalles'); 
    }


}
