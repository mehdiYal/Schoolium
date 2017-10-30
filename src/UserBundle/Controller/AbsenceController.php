<?php

namespace UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use UserBundle\Entity\Absence;
use UserBundle\Form\AbsenceType;
use SchoolBundle\Entity\Classe;

/**
 * Absence controller.
 *
 * @Route("/absence")
 */
class AbsenceController extends Controller
{
    /**
     * @Route("/", name="absence_index")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $absences=null;
        $classe=null;
        $form = $this->createFormBuilder()
            ->add('classe', EntityType::class,
                array( 'required' => false,
                    'class' => 'SchoolBundle:Classe','choice_label' => 'nom'))
            ->add('annee', EntityType::class,
                array( 'required' => false,
                    'class' => 'SchoolBundle:Annee','choice_label' => 'nom'))
             ->getForm();
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

            $anneeF=$form->get('annee')->getData();
            $classeF=$form->get('classe')->getData();

            $classe=$em->getRepository('SchoolBundle:Classe')->findBy(array('annee'=>$anneeF->getId()));
            $eleve=$em->getRepository('UserBundle:Eleve')->findBy(array('classe'=>$classe));
            $absences=$em->getRepository('UserBundle:Absence')->findBy(array('eleve'=>$eleve));
            return $this->render('absence/index.html.twig',array(
            'absences'=> $absences,
            'classe'=> $classe,
            'form' => $form->createView()));
        }

        return $this->render('absence/index.html.twig',array(
            'absences'=> $absences,
            'classe'=> $classe,
            'form' => $form->createView()));
    }

     /**
     * @Route("/new/{id}", name="absence_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {   
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        $absences=null;
       
        //Initialisation des ids
        $idClasse=$request->attributes->get('id');

        $absence= new Absence();
        $classe=new Classe();

        $form=$this->createForm(AbsenceType::class,$absence,array('idClasse'=>$idClasse));
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($absence);
            $em->flush($absence);
            
            return $this->redirectToRoute('absence_index');
      
        }

        return $this->render('absence/add.html.twig',array(
            'absences'=> $absences,
            'form' => $form->createView()));
    }
}
