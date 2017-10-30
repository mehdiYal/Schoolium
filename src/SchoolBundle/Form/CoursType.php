<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('devoir', FileType::class, array(
                'required' => false, 
                'label' => "Uploader un fichier (devoir maison)"))
            
            ->add('support', FileType::class, array(
                'required' => false, 
                'label' => "Uploader un fichier (support de cours)"))
            ->add('annexe', FileType::class, array(
                'required' => false, 
                'label' => "Uploader un fichier (annexe)"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\Cours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_cours';
    }


}
