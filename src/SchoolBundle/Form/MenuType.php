<?php

namespace SchoolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MenuType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('jour',ChoiceType::class,array('choices' =>array(
                                                        'Samedi'=>'Samedi','Dimanche'=>'Dimanche','Lundi'=>'Lundi','Mardi'=>'Mardi','Mercredi'=>'Mercredi','Jeudi'=>'Jeudi','Vendredi'=>'Vendredi'
                                                    )))
                ->add('menu');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SchoolBundle\Entity\Menu'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'schoolbundle_menu';
    }


}
