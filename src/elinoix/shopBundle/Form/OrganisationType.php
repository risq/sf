<?php

namespace elinoix\shopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('label' => 'Nom de l\'organisation'))
            ->add('login')
            ->add('pass', 'text', array('label' => 'Mot de passe'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'elinoix\shopBundle\Entity\Organisation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'elinoix_shopbundle_organisation';
    }
}
