<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use SchoolBundle\Repository\MatiereRepository;
use SchoolBundle\Repository\ClasseRepository;
use SchoolBundle\Repository\MatiereEvaluationRepository;
use SchoolBundle\Repository\EvaluationRepository;

class MatiereEvaluationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idMatiere= $options['idMatiere'];
        $idClasse= $options['idClasse'];
        $builder
         ->add('matiere', EntityType::class, array(
                'class' => 'SchoolBundle:Matiere',
                'choice_label' => 'nom',
                'query_builder' => function(MatiereRepository $er) use ($idMatiere){
                    return $er->findById($idMatiere);
                },
                'required' => TRUE,
            ))
         ->add('classe', EntityType::class, array(
                'class' => 'SchoolBundle:Classe',
                'choice_label' => 'nom',
                'query_builder' => function(ClasseRepository $er) use ($idClasse){
                   return $er->findById($idClasse);
                },
                'required' => TRUE,
            ))
         ->add('evaluation', EntityType::class, array(
                'required' => false,
                'multiple' => true,
                'expanded' => false,
                'mapped' => false,
                'class' => 'SchoolBundle:Evaluation',
                'choice_label' => 'nom'
            ))
         ;
    }
    
    /**
     *  @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\MatiereEvaluation',
            'idMatiere' => '',
            'idClasse' => ''
        ));

         $resolver->setRequired(['idMatiere','idClasse']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_mateva';

    }

}
