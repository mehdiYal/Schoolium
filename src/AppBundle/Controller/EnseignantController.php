<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Enseignant;
use AppBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\Response;

class EnseignantController extends Controller
{
    /**
     * @Route("/addEnseignant", name="addEnseignant")
     */
    public function addAction(Request $request)
    {
        $enseignant = new Enseignant();
        $form=$this->createForm(EnseignantType::class,$enseignant);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($enseignant->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $enseignant->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $enseignant->setphoto($fileName);
             }
             $enseignant->setEcole($this->getUser()->getEcole());

            $em=$this->getDoctrine()->getManager();
            $em->persist($enseignant);
            $em->flush();
            return $this->redirectToRoute('listEnseignants');
        }

        return $this->render('enseignantsViews/addEnseignant.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/editEnseignant/{id}", name="editEnseignant")
     */
    public function editAction(Request $request,Enseignant $enseignant)
    {

        $form=$this->createForm(EnseignantType::class,$enseignant);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($enseignant->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $enseignant->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $enseignant->setphoto($fileName);
             }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listEnseignants');
        }

        return $this->render('enseignantsViews/addEnseignant.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


    /**
     * @Route("/removeEnseignant/{id}", name="removeEnseignant")
     */
    public function removeAction(Enseignant $enseignant)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($enseignant);
        $em->flush();
        return $this->redirectToRoute('listEnseignants');  
    }

    /**
     * @Route("/profileEnseignant/{id}", name="profileEnseignant")
     */
    public function profileAction(Enseignant $enseignant)
    {
        return $this->render('enseignantsViews/profileEnseignant.html.twig',array("enseignant"=>$enseignant));
    }

     /**
     * @Route("/myProfileEnseignant", name="myProfileEnseignant")
     */
    public function myProfileAction()
    {
        return $this->render('enseignantsViews/myProfileEnseignant.html.twig');
    }



    /**
     * @Route("/listEnseignants", name="listEnseignants")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("AppBundle:Enseignant");
        $enseignants=$repository->findAll();
        return $this->render('enseignantsViews/listEnseignants.html.twig',array("enseignants"=>$enseignants));
    }

    /**
     * @Route("/listeClasse/{id}", name="listeClasses")
     */
    public function showClasseAction(Request $request)
    {
         if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException();
            }

        $em = $this->getDoctrine()->getManager();
        $enseignant=$em->getRepository('AppBundle:Enseignant')->findOneBy(array('id'=> $request->attributes->get('id') ));
        $classes=$em->getRepository('SchoolBundle:EnsMat')->findBy(array('enseignant'=> $enseignant ));
    
        return $this->render('enseignantsViews/listClasses.html.twig',array("classes"=>$classes));
    }
}
