<?php

namespace Mmitv\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class membreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomMembre')
            ->add('prenomMembre')
            ->add('emailMembre')
            ->add('statutMembre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mmitv\BackBundle\Entity\membre'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_backbundle_membre';
    }
}
