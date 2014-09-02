<?php

namespace elinoix\shopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganisationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username')
                ->add('email')
                ->add('enabled')
                ->add('roles', 'choice', array(
                    'choices' => array(
                        'ROLE_USER' => 'Utilisateur',
                        'ROLE_ADMIN' => 'Admin',
                    ),
                    'multiple'=>true,
                    'required' => true,
                    'empty_value' => 'Choisir le rôle',
                    'empty_data' => null
        ));
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'elinoix\ShopBundle\Entity\Organisation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'elinoix_shopbundle_organisation';
    }

}
