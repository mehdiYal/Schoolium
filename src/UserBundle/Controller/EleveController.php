<?php

namespace UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\Eleve;
use UserBundle\Entity\Retard;
use UserBundle\Entity\Absence;
use UserBundle\Entity\Parental;
use UserBundle\Form\EleveType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * TravailRealise controller.
 *
 * @Route("/eleve")
 */
class EleveController extends Controller
{
    /**
     * @Route("/add", name="addEleve")
     */
    public function addAction(Request $request)
    {
        $eleve = new Eleve();
        $form=$this->createForm(EleveType::class,$eleve);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($eleve->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $eleve->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $eleve->setphoto($fileName);
             }
            $eleve->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($eleve);
            $em->flush();
            return $this->redirectToRoute('listEleves');
        }

        return $this->render('elevesViews/addEleve.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/edit/{id}", name="editEleve")
     */
    public function editAction(Request $request,Eleve $eleve)
    {

        $form=$this->createForm(EleveType::class,$eleve);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if($eleve->getPhoto() !=null){
                /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $file = $eleve->getPhoto();

                $fileName = md5(uniqid()).'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('photo_directory'),
                    $fileName
                );

                
                $eleve->setphoto($fileName);
             }
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listEleves');
        }

        return $this->render('elevesViews/addEleve.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/retard/{id}", name="retardEleve")
     */
    public function retardAction(Eleve $eleve)
    {
        $retard = new Retard();
        $retard->setEleve($eleve);
        $retard->setDate(date_create(date('Y-m-d H:i:s')));
        $retard->setCommentaire("Retard");
        $em=$this->getDoctrine()->getManager();
        $em->persist($retard);
        $em->flush();
        return $this->redirectToRoute('listEleves');
    }

    /**
     * @Route("/absence/{id}", name="absenceEleve")
     */
    public function absenceAction(Eleve $eleve)
    {
        $absence = new Absence();
        $absence->setEleve($eleve);
        $absence->setDate(date_create(date('Y-m-d H:i:s')));
        $absence->setCommentaire("Absence");
        $em=$this->getDoctrine()->getManager();
        $em->persist($absence);
        $em->flush();
        return $this->redirectToRoute('listEleves');
    }


    /**
     * @Route("/remove/{id}", name="removeEleve")
     */
    public function removeAction(Eleve $eleve)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($eleve);
        $em->flush();
        return $this->redirectToRoute('listEleves');
    }

    /**
     * @Route("/profile/{id}", name="profileEleve")
     */
    public function profileAction(Eleve $eleve)
    {
        return $this->render('elevesViews/profileEleve.html.twig',array("eleve"=>$eleve));
    }

     /**
     * @Route("/myProfile", name="myProfileEleve")
     */
    public function myProfileAction()
    {
        return $this->render('elevesViews/myProfileEleve.html.twig');
    }



    /**
     * @Route("/list", name="listEleves")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("UserBundle:Eleve");
        $eleves=$repository->findAll();
        return $this->render('elevesViews/listEleves.html.twig',array("eleves"=>$eleves));
    }

     /**
     * @Route("/parent/{id}", name="parentEleve")
     */
    public function parentAction(Eleve $eleve)
    {
        if ($eleve->getParent()==null) {
            $repository=$this->getDoctrine()->getRepository("UserBundle:Parental");
            $parentals=$repository->findAll();
            return $this->render('elevesViews/parentEleve.html.twig',array("parents"=>$parentals,"eleve"=>$eleve));
        }
        return $this->redirectToRoute('profileParental',array('id' => $eleve->getParent()->getId()));
        
    }

     /**
     * @Route("/asso/{id}/{idp}", name="assoParent")
     */
    public function assoParentAction(Eleve $eleve,$idp)
    {
        $parent = new Parental();
        $repository=$this->getDoctrine()->getRepository("UserBundle:Parental");
        $parent=$repository->findOneById($idp);
        if($parent==null) return new Response("il n'existe pas un parent avec les donnees envoyé");
        $eleve->setParent($parent);
        $em=$this->getDoctrine()->getManager();
        $em->flush();   
        return $this->redirectToRoute('listEleves');      
    }
}
