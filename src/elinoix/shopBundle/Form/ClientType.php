<?php

namespace elinoix\shopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
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
            ->add('adresse')
            ->add('codePostal')
            ->add('ville')
            ->add('email')
            ->add('organisation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'elinoix\shopBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'elinoix_shopbundle_client';
    }
}
