<?php

namespace HZ\Wonja237Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class EnregistrementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class, array('label' => 'Nom:'))
                ->add('surname',TextType::class, array('label' => 'Prenom:') )
                ->add('email',TextType::class, array('label' => 'Email:'))
                ->add('ville',TextType::class, array('label' => 'Ville:'))
                ->add('number')
                ->add('sexe' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          'Masculin' => 'M',
                                                          'Feminin' => 'F',
                                                        ),
                                                        'label' => 'Sexe'
                ))
                ->add('style' ,ChoiceType::class, array(
                  'choices'  => array(
                    'Makossa' => 'Makossa',
                    'hip hop - RNB ' => 'hip hop - RNB',
                    'Folklore/traditionnel' => 'Folklore/traditionnel',
                    'Gospel' => 'Gospel',
                    'Bikutsi' => 'Bikutsi',
                    'Rap/Urbain' => 'Rap/Urbain',
                    'Zouk/love' => 'Zouk/love',
                    'reggae' => 'reggae',

                  ),
                )
)


->add('status' ,ChoiceType::class, array(
  'choices'  => array(
    'Solo' => 'solo',
    'Groupe' => 'Groupe',
  ),
))

->add('image', ImageType::class)
->add('categories',EntityType::class, array(
                                            'class' => 'HZWonja237Bundle:Category',
                                            'choice_label' => 'name',
                                            'multiple'=>true
                                          )
      )

                ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\Wonja237Bundle\Entity\Enregistrement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hz_wonja237bundle_enregistrement';
    }


}
