<?php

namespace HZ\Wonja237Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TestSiteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
                ->add('profession')
                ->add('sexe' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Homme' => 'M',
                                                          'Femme' => 'F',
                                                        ),
                                                      ))
                ->add('ternaminal' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Mobile' => 'Mobile',
                                                          'Tablette' => 'Tablette',
                                                          'PC' => 'PC',
                                                        ),
                                                      ))
                ->add('bonneNavigation' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Oui' => 'Oui',
                                                          'Non' => 'Non',
                                                        ),
                                                      ))
                ->add('connaisTuInternet',ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Oui' => 'Oui',
                                                          'Non' => 'Non',
                                                        ),
                                                      ))
                ->add('sitePrefere')
                ->add('pourquoiSitePreferer')
                ->add('attractionPageAcceuil')
                ->add('barreDeRescherche',ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Oui' => 'Oui',
                                                          'Non' => 'Non',
                                                        ),
                                                      ))
                ->add('ameliorationBarreDeRecherche')
                ->add('inscriptionProzess')
                ->add('inscriptionOK' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          '' => null,
                                                          'Oui' => 'Oui',
                                                          'Non' => 'Non',
                                                        ),
                                                      ))
                ->add('inscriptionPourQuoi')
                ->add('reservationProzess')
                ->add('reservationOK',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
                ->add('reservationPourQuoi')
                ->add('acceCategorieOk',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
                  ->add('acceCategoriePourQuoi')
                  ->add('presentationCategorie')
               ->add('ameliorationCategorie')
               
               ->add('publiciteRemarque')
               ->add('ameliorationPublicite')
               ->add('partenaireUtileOK' ,ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
               ->add('partenaiQuePensezVous')
               ->add('testNewsLetter',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
               ->add('testContact',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
               ->add('reponseParamilOK')
               ->add('reseauOk' ,ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
               ->add('ameliorationGlobale',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         'Oui' => 'Oui',
                                                         'Non' => 'Non',
                                                       ),
                                                     ))
               ->add('structureDuContenu' ,ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('pertinenceContenu',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('design',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('ergonomie',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('simplicte',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('intuitivite',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
               ->add('originalite',ChoiceType::class, array(
                                                       'choices'  => array(
                                                         '' => null,
                                                         '1' => '1',
                                                         '2' => '2',
                                                         '3' => '3',
                                                         '4' => '4',
                                                         '5' => '5',
                                                         '6' => '6',
                                                         '7' => '7',
                                                         '8' => '8',
                                                         '9' => '9',
                                                         '10' => '10',
                                                       ),
                                                     ))
              ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\Wonja237Bundle\Entity\TestSite'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hz_wonja237bundle_testsite';
    }


}
