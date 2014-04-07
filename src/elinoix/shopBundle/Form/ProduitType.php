<?php

namespace elinoix\shopBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('poids')
            ->add('prix')
            ->add('description')
            ->add('quantite')
            ->add('image', new ImageType(), array('label' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'elinoix\shopBundle\Entity\Produit'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'elinoix_shopbundle_produit';
    }
}
