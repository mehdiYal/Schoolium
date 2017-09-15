<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Parental;
use AppBundle\Form\ParentalType;
use Symfony\Component\HttpFoundation\Response;

class ParentalController extends Controller
{
    /**
     * @Route("/addParental", name="addParental")
     */
    public function addAction(Request $request)
    {
        $parental = new Parental();
        $form=$this->createForm(ParentalType::class,$parental);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $parental->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($parental);
            $em->flush();
             return $this->redirectToRoute('listParentals');
        }

        return $this->render('parentsViews/addParent.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/editParental/{id}", name="editParental")
     */
    public function editAction(Request $request,Parental $parental)
    {

        $form=$this->createForm(ParentalType::class,$parental);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
             return $this->redirectToRoute('listParentals');
        }

        return $this->render('parentsViews/addParent.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


    /**
     * @Route("/removeParental/{id}", name="removeParental")
     */
    public function removeAction(Parental $parental)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($parental);
        $em->flush();
        return $this->redirectToRoute('listParentals');  
    }

    /**
     * @Route("/profileParental/{id}", name="profileParental")
     */
    public function profileAction(Parental $parental)
    {
        return $this->render('parentsViews/profileParent.html.twig',array("parent"=>$parental));
    }

     /**
     * @Route("/myProfileParental", name="myProfileParental")
     */
    public function myProfileAction()
    {
        return $this->render('parentsViews/myProfileParent.html.twig');
    }



    /**
     * @Route("/listParentals", name="listParentals")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("AppBundle:Parental");
        $parentals=$repository->findAll();
        return $this->render('parentsViews/listParents.html.twig',array("parentals"=>$parentals));
    }
}
