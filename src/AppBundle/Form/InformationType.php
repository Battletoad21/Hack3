<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codeInsee')->add('commune')->add('centroidXEtrs3035')->add('centroidYEtrs3035')->add('dateIndiceSupervise')->add('echeance')->add('dateEcheance')->add('valeurSsindiceNo2')->add('valeurSsindiceO3')->add('valeurSsindicePm10')->add('valeurSsindiceSo2')->add('libelleIndice')->add('libelleFamilleIndice')->add('libelleQualiteAir')->add('couleurCarteGe')->add('libellePolluantResponsable')->add('notationPolluantResponsable');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Information'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_information';
    }


}
