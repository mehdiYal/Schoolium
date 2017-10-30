<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Ecole;
use SchoolBundle\Form\EcoleType;
use Symfony\Component\HttpFoundation\Request;

/**
 * School controller.
 *
 * @Route("/school")
 */
class SchoolController extends Controller
{
    /**
     * @Route("/add", name="addSchool")
     */
    public function addAction(Request $request)
    {
        $ecole = new Ecole();
        $form=$this->createForm(EcoleType::class,$ecole);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
             if($ecole->getLogo() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $ecole->getLogo();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('logo_directory'),
                    $fileName
                );

                
                $ecole->setLogo($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('listSchools');
        }

        return $this->render('schoolsViews/addSchool.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }

     /**
     * @Route("/list", name="listSchools")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Ecole");
        $ecoles=$repository->findAll();
        return $this->render('schoolsViews/listSchools.html.twig',array("ecoles"=>$ecoles));
    }


     /**
     * @Route("/edit/{id}", name="editSchool")
     */
    public function editAction(Request $request,Ecole $ecole)
    {
        $form=$this->createForm(EcoleType::class,$ecole);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
             if($ecole->getLogo() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $ecole->getLogo();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('logo_directory'),
                    $fileName
                );

                
                $ecole->setLogo($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->persist($ecole);
            $em->flush();
            return $this->redirectToRoute('listSchools');
        }

        return $this->render('schoolsViews/addSchool.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeSchool")
     */
    public function removeAction(Ecole $ecole)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($ecole);
        $em->flush();
        return $this->redirectToRoute('listSchools'); 
    }


     /**
     * @Route("/profile/{id}", name="profileSchool")
     */
    public function profileAction(Ecole $ecole)
    {
        return $this->render('SchoolsViews/profileSchool.html.twig',array("ecole"=>$ecole));
    }


    /**
     * @Route("/mySchool", name="mySchool")
     */
    public function mySchoolAction()
    {
        return $this->render('SchoolsViews/profileSchool.html.twig',array("ecole"=>$this->getUser()->getEcole()));
    }
}
