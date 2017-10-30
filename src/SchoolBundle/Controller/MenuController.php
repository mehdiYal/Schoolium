<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SchoolBundle\Entity\Menu;
use SchoolBundle\Form\MenuType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Menu controller.
 *
 * @Route("/menu")
 */
class MenuController extends Controller
{
    /**
     * @Route("/add", name="addMenu")
     */
    public function addAction(Request $request)
    {
        $menu = new Menu();
        $form=$this->createForm(MenuType::class,$menu);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $menu->setEcole($this->getUser()->getEcole());
            $em=$this->getDoctrine()->getManager();
            $em->persist($menu);
            $em->flush();
            return $this->redirectToRoute('listMenus');
        }

        return $this->render('menusViews/addMenu.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/list", name="listMenus")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Menu");
        $menus=$repository->findAll();
        return $this->render('menusViews/listMenus.html.twig',array("menus"=>$menus));
    }

     /**
     * @Route("/edit/{id}", name="editMenu")
     */
    public function editAction(Request $request,Menu $menu)
    {
        $form=$this->createForm(MenuType::class,$menu);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listMenus');
        }

        return $this->render('menusViews/addMenu.html.twig',array("edit"=>true,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeMenu")
     */
    public function removeAction(Menu $menu)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($menu);
        $em->flush();
        return $this->redirectToRoute('listMenus'); 
    }


}
