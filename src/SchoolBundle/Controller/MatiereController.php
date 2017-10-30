<?php

namespace SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use SchoolBundle\Entity\Matiere;
use SchoolBundle\Entity\Cours;
use SchoolBundle\Entity\MatiereEleve;
use SchoolBundle\Entity\EnsMat;
use UserBundle\Entity\Eleve;
use SchoolBundle\Form\MatiereType;
use SchoolBundle\Form\EnsMatType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Matiere controller.
 *
 * @Route("/matiere")
 */
class MatiereController extends Controller
{
    /**
     * @Route("/add", name="addMatiere")
     */
    public function addAction(Request $request)
    {
        $matiere = new Matiere();
        $form=$this->createForm(MatiereType::class,$matiere);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
             
            return $this->redirectToRoute('listMatieres');
        }

        return $this->render('matieresViews/addMatiere.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


    /**
     * @Route("/list", name="listMatieres")
     */
    public function showAction(Request $request)
    {
        $repository=$this->getDoctrine()->getRepository("SchoolBundle:Matiere");
        $matieres=$repository->findAll();
        return $this->render('matieresViews/listMatieres.html.twig',array("matieres"=>$matieres));
    }

     /**
     * @Route("/edit/{id}", name="editMatiere")
     */
    public function editAction(Request $request,Matiere $matiere)
    {
        $form=$this->createForm(MatiereType::class,$matiere);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listMatieres');
        }

        return $this->render('matieresViews/addMatiere.html.twig',array("edit"=>false,"form"=>$form->createView()));
    }


     /**
     * @Route("/remove/{id}", name="removeMatiere")
     */
    public function removeAction(Matiere $matiere)
    {
         $em=$this->getDoctrine()->getManager();
        $em->remove($matiere);
        $em->flush();
        return $this->redirectToRoute('listMatieres'); 
    }

     /**
     * @Route("/show/classe/{idClasse}/matiere/{idMatiere}", name="showEleve")
     * @Method({"GET", "POST"})
     */
    public function showEleveAction(Request $request){
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();

        //Initialisation des ids
        $idMatiere=$request->attributes->get('idMatiere');
        $idClasse=$request->attributes->get('idClasse');

        // requetes pour ramener toutes la classe correspondante
        $classe=$em->getRepository('SchoolBundle:Classe')->findOneBy(array('id'=> $request->attributes->get('idClasse') ));
        $eleves=$classe->getEleves();
        $data=array();
        $i=0;

        $statement = $connection->prepare("SELECT e.id,e.nom FROM matiere_evaluation m, evaluation e WHERE matiere_id = :matiere_id and classe_id = :classe_id and e.id=m.evaluation_id");
        $statement->bindValue('matiere_id', $idMatiere);
        $statement->bindValue('classe_id', $idClasse);
        $statement->execute();
        $evaluations = $statement->fetchAll();

        foreach ($eleves as $eleve) {
            $statement = $connection->prepare("SELECT * FROM matiere_eleve WHERE matiere_id = :matiere_id and eleve_id = :eleve_id");
            $statement->bindValue('matiere_id', $idMatiere);
            $statement->bindValue('eleve_id', $eleve->getId());
            $statement->execute();
            $notes = $statement->fetchAll();

            if(!empty($notes)){
                $data[$i]['note']=$notes;  
            }else{
                $data[$i]['note']=null;
            }
           // $data[$i]['evaluation']=$em->getRepository('SchoolBundle:Evaluation')->findOneBy(array('id'=> $notes[0]['evaluation_id'] ));
            $data[$i]['eleve']=$eleve;
            $i++;  
        }
        $datas['data']=$data;
        $datas['matiere']=$em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=>  $idMatiere ));
        $datas['evaluations']=$evaluations;
        $datas['cours']=$em->getRepository('SchoolBundle:Cours')->findBy(array('matiere'=>$idMatiere,'classe'=>$idClasse));
        
        return $this->render('matieresViews/eleves.html.twig',array("datas"=>$datas));
    }

     /**
     * @Route("/addNote", name="addNote")
     * @Method({"GET", "POST"})
     */
    public function addNoteAction(Request $request){
        // Connection BDD
        $em = $this->getDoctrine()->getManager();
        extract($_POST);
        for($i=0;$i<$cpt;$i++){
            
                $idMatiere=$_POST['idmatiere'.$i];
                $idEleve=$_POST['ideleve'.$i];
               
                $matiere=$em->getRepository('SchoolBundle:Matiere')->findOneBy(array('id'=> $idMatiere ));
                $eleve=$em->getRepository('UserBundle:Eleve')->findOneBy(array('id'=> $idEleve ));
                
                for($j=0;$j<$lengthEvaluation;$j++){
                    
                    $noteVal=$_POST['eleve'.$idEleve.'id'.$j.'note'];
                    $idEvaluation=$_POST['eleve'.$idEleve.'id'.$j.'Evaluation'];
                    if($noteVal!=""){
                
                        $idmatiereEleve=$_POST['eleve'.$idEleve.'id'.$j.'MatiereEleve'];
                        $evaluation=$em->getRepository('SchoolBundle:Evaluation')->findOneBy(array('id'=> $idEvaluation ));

                        if($idmatiereEleve==-1){
                            $matiereEleve=new MatiereEleve();
                        }else{
                            $matiereEleve=$em->getRepository('SchoolBundle:MatiereEleve')->findOneBy(array('id'=> $idmatiereEleve));
                        }
                       
                        $matiereEleve->setNote($noteVal);
                        $matiereEleve->setMatiere($matiere);
                        $matiereEleve->setEleve($eleve);
                        $matiereEleve->setEvaluation($evaluation);
                        $em->persist($matiereEleve);
                    }
                    $em->flush();
                }
        }

        //Initialisation des ids
        
        return $this->redirectToRoute('showEleve', array('idClasse' => $idClasse,'idMatiere' => $idMatiere));
    }

      /**
     * @Route("/delete/{id}", name="delete_note")
     */
    public function deleteAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $matiereEleve=$em->getRepository('SchoolBundle:MatiereEleve')->findOneBy(array('id'=> $id));
        $em->remove($matiereEleve);
        $em->flush();
        
        $referer = $request->headers->get('referer');
       /* if ($referer == NULL) {
            $url = $this->router->generate('fallback_url');
        } else {
            $url = $referer;
        }*/
        return $this->redirect($referer);  
    }

     /**
     * @Route("/program/{id}", name="program_add")
     */
    public function programAction(Request $request)
    {
        extract($_POST);
        $em=$this->getDoctrine()->getManager();
        $id=$request->attributes->get('id');
        $ensMatiere=$em->getRepository('SchoolBundle:EnsMat')->findBy(array('enseignant'=> $id));
        $i=0;

        foreach ($ensMatiere as $value) {
           
            $form[$i]=$this->createForm(EnsMatType::class,$value);
            $form[$i]->handleRequest($request);
            $i++;
        }

        if(!isset($cpt)){
            $cpt=0;
        }

          if($form[$cpt]->isSubmitted() && $form[$cpt]->isValid() && $form[$cpt]['programmeAnnuel']->getData()!=""){
                $idEnsMat=addslashes($_POST['idEnsMat'.$cpt]);
                $ensMat=$em->getRepository('SchoolBundle:EnsMat')->findOneBy(array('id'=> $idEnsMat));
                $uploaded_file = $form[$cpt]['programmeAnnuel']->getData();
                if(!empty($ensMat->getProgrammeAnnuel()) && $uploaded_file)
                {
                    $file =  $ensMat->getProgrammeAnnuel();
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $this->getParameter('uploads_matiere_prog_annuel'),
                        $fileName
                    );
                     $ensMat->setProgrammeAnnuel($fileName);
                }
               
                $em->persist($ensMat);
                $em->flush();
            }

        return $this->render('matieresViews/listProgram.html.twig',array("data"=>$ensMatiere,'form'=>$form));
        
    }    

}
