<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Classe;
use SchoolBundle\Form\ClasseType;
use SchoolBundle\Entity\EnsMat;
use SchoolBundle\Form\EnsMatType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Classe controller.
 *
 * @Route("/classe")
 */
class ClasseController extends Controller
{
    /**
     * @Route("/add", name="addClasse")
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
     * @Route("/list", name="listClasses")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Classe");
        $classes=$repository->findAll();
        return $this->render('classesViews/listClasses.html.twig',array("classes"=>$classes));
    }

     /**
     * @Route("/edit/{id}", name="editClasse")
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
     * @Route("/remove/{id}", name="removeClasse")
     */
    public function removeAction(Classe $classe)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute('listClasses'); 
    }

    /**
     * @Route("/affectProf/{id}", name="affectProf")
     */
    public function affectProf(Request $request,Classe $classe)
    {
        $ensMat = new EnsMat();
        $form=$this->createForm(EnsMatType::class,$ensMat);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $ensMat->setClasse($classe);
            $em=$this->getDoctrine()->getManager();
            $em->persist($ensMat);
            $em->flush();
            return $this->redirectToRoute('listClasses');
        }

        return $this->render('classesViews/affecterProf.html.twig',array("form"=>$form->createView(),"classe"=>$classe));
    }

    


}
