<?php

namespace HZ\Wonja237Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
     public function buildForm(FormBuilderInterface $builder, array $options)
     {
         $builder->add('name', TextType::class, array('label' => 'Nom:'))
                 ->add('surname',TextType::class, array('label' => 'Prenom:'))
                 ->add('email',EmailType::class)
                 ->add('number',NumberType::class, array('label' => 'Téléphone_1'))
                 ->add('number2',NumberType::class, array(
                   'label' => 'Téléphone_2',
                 'required'   => false,
               ))
                 ->add('typeDeReservation' ,ChoiceType::class, array(
                                                         'choices'  => array(
                                                           '' => null,
                                                           'Mariage' => 'Mariage',
                                                           'Anniversaire' => 'Anniversaire',
                                                           'Show case' => 'Show case',
                                                           'Concert' => 'Concert',
                                                           'Évènement' => 'Évènement',
                                                           'Soirée de gala' => 'Soirée de gala',
                                                           'Exposition' => 'Exposition',
                                                           'Autre' => 'Autre',
                                                         ),
                 ))
                 ->add('typeDeReservatioAutren',TextType::class, array(
                   'label' => 'Prenom:',
                   'required'   => false,
))

                 ->add('ville',TextType::class, array('label' => 'Ville:'))
                 ->add('exigence',TextareaType::class)
                 ->add('dateDeReservation',DateType::class, array('label' => "Date de l'evênement et Heure:"))
                 ->add('lu', CheckboxType::class, array('label' => 'J\'accepte les conditions: '))
                 ->add('startTime', TimeType::class, array(
    'input'  => 'datetime',
    'widget' => 'choice',
));
     }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\Wonja237Bundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hz_wonja237bundle_reservation';
    }


}
