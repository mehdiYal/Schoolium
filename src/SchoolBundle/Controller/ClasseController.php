<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Classe;
use SchoolBundle\Form\ClasseType;
use Symfony\Component\HttpFoundation\Request;

class ClasseController extends Controller
{
    /**
     * @Route("/addClasse", name="addClasse")
     */
    public function addAction(Request $request)
    {
        $classe = new Classe();
        $form=$this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $classe->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($classe);
            $em->flush();
            return $this->redirectToRoute('listClasses');
        }

        return $this->render('classesViews/addClasse.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/listClasses", name="listClasses")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Classe");
        $classes=$repository->findAll();
        return $this->render('classesViews/listClasses.html.twig',array("classes"=>$classes));
    }

     /**
     * @Route("/editClasse/{id}", name="editClasse")
     */
    public function editAction(Request $request,Classe $classe)
    {
        $form=$this->createForm(ClasseType::class,$classe);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listClasses');
        }

        return $this->render('classesViews/addClasse.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/removeClasse/{id}", name="removeClasse")
     */
    public function removeAction(Classe $classe)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute('listClasses'); 
    }


}
