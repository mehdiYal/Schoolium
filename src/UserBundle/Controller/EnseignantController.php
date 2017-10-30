<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Enseignant;
use UserBundle\Form\EnseignantType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Enseignant controller.
 *
 * @Route("/enseignant")
 */
class EnseignantController extends Controller
{
    /**
     * @Route("/add", name="addEnseignant")
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
     * @Route("/edit/{id}", name="editEnseignant")
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
     * @Route("/remove/{id}", name="removeEnseignant")
     */
    public function removeAction(Enseignant $enseignant)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($enseignant);
        $em->flush();
        return $this->redirectToRoute('listEnseignants');  
    }

    /**
     * @Route("/profile/{id}", name="profileEnseignant")
     */
    public function profileAction(Enseignant $enseignant)
    {
        return $this->render('enseignantsViews/profileEnseignant.html.twig',array("enseignant"=>$enseignant));
    }

     /**
     * @Route("/myProfile", name="myProfileEnseignant")
     */
    public function myProfileAction()
    {
        return $this->render('enseignantsViews/myProfileEnseignant.html.twig');
    }



    /**
     * @Route("/list", name="listEnseignants")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Enseignant");
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
        $id= $request->attributes->get('id');
        $em = $this->getDoctrine()->getManager();
        $enseignant=$em->getRepository('UserBundle:Enseignant')->findOneBy(array('id'=>$id));
        $data['classes']=$em->getRepository('SchoolBundle:EnsMat')->findBy(array('enseignant'=> $enseignant ));
        $data['enseignant']=$enseignant;
         return $this->render('enseignantsViews/listClasses.html.twig',array("data"=>$data));
    }
}
