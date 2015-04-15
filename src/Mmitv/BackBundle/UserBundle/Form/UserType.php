<?php

namespace Mmitv\BackBundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('username')
            ->add('Credentialsexpireat','date', array(
    'input'  => 'datetime',
    'widget' => 'choice',
))
            ->add('email')
                        ->add('roles', 'choice', array(
                        'choices' => array('ROLE_REDACTEUR' => 'Redacteur', 'ROLE_SUPER_ADMIN' => 'Administrateur'),
                        'multiple' => true,
                    ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mmitv\BackBundle\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_backbundle_userbundle_user';
    }
}
