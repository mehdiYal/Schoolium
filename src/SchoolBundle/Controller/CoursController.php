<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SchoolBundle\Entity\Cours;
use SchoolBundle\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;


/**
 * Cours controller.
 *
 * @Route("/cours")
 */
class CoursController extends Controller
{
    /**
     * @Route("/new/classe/{idClasse}/matiere/{idMatiere}", name="new_cours")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $cours= new Cours();
        $form=$this->createForm(CoursType::class,$cours);
        $form->handleRequest($request);
        $idMatiere=$request->attributes->get('idMatiere');
        $idClasse=$request->attributes->get('idClasse');
        
        if($form->isSubmitted() && $form->isValid()){
            //Initialisation des ids
            extract($_POST);
            
            $matiere=$em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=>$idMatiere));
            $classe=$em->getRepository('SchoolBundle:Classe')->findOneBy(array('id'=>$idClasse));
            //  $coru->setEcole($this->getUser()->getEcole());

            $uploaded_file = $form['devoir']->getData();
            if(!empty($cours->getDevoir()) && $uploaded_file)
            {
                $file = $cours->getDevoir();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_devoir'),
                    $fileName
                );
                $cours->setDevoir($fileName);
            }

             $uploaded_file = $form['support']->getData();
            if(!empty($cours->getSupport()) && $uploaded_file)
            {
                $file = $cours->getSupport();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_support'),
                    $fileName
                );
                $cours->setSupport($fileName);
            }

             $uploaded_file = $form['annexe']->getData();
            if(!empty($cours->getAnnexe()) && $uploaded_file)
            {
                $file = $cours->getAnnexe();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('uploads_cours_annexe'),
                    $fileName
                );
                $cours->setAnnexe($fileName);
            }

            $cours->setMatiere($matiere);
            $cours->setClasse($classe);

            $em=$this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('showEleve',array('idClasse' => $idClasse,'idMatiere' => $idMatiere));
        }

        return $this->render('cours/add.html.twig',array("form"=>$form->createView(),'idClasse'=>$idClasse,'idMatiere'=>$idMatiere));
    }


}
