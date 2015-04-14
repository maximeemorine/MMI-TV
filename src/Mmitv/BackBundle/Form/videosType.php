<?php

namespace Mmitv\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class videosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lienVideos')
            ->add('nomVideos')
            ->add('debutVideos')
            ->add('finVideos')
            ->add('dureeVideos')
            ->add('Ajouter cette vidéo', 'submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mmitv\BackBundle\Entity\videos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmitv_backbundle_videos';
    }
}
