<?php

namespace elinoix\shopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LivraisonType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('type', 'choice', array(
                    'choices' => array('Camion' => 'Camion', 'Colissimo' => 'Colissimo'),
                    'required' => true,
                ))
                ->add('date')
                ->add('commentaire', 'textarea', array(
                    'required' => false,
        ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'elinoix\shopBundle\Entity\Livraison'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'elinoix_shopbundle_livraison';
    }

}
