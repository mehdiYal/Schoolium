<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Transport;
use SchoolBundle\Form\TransportType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Transport controller.
 *
 * @Route("/transport")
 */
class TransportController extends Controller
{
    /**
     * @Route("/add", name="addTransport")
     */
    public function addAction(Request $request)
    {
        $transport = new Transport();
        $form=$this->createForm(TransportType::class,$transport);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $transport->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($transport);
            $em->flush();
            return $this->redirectToRoute('listTransports');
        }

        return $this->render('transportsViews/addTransport.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/list", name="listTransports")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Transport");
        $transports=$repository->findAll();
        return $this->render('transportsViews/listTransports.html.twig',array("transports"=>$transports));
    }

     /**
     * @Route("/edit/{id}", name="editTransport")
     */
    public function editAction(Request $request,Transport $transport)
    {
        $form=$this->createForm(TransportType::class,$transport);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listTransports');
        }

        return $this->render('transportsViews/addTransport.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeTransport")
     */
    public function removeAction(Transport $transport)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($transport);
        $em->flush();
        return $this->redirectToRoute('listTransports'); 
    }


}
