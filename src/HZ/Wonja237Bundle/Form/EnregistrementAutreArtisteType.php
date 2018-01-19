<?php

namespace HZ\Wonja237Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;

class EnregistrementAutreArtisteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('surname' )
                ->add('email')
                ->add('ville')
                ->add('number1')
                ->add('number2')
                ->add('nomArtiste')
                ->add('link1')
                ->add('link2')
                ->add('link3')
                ->add('description')
                ->add('autreCategorie')
                ->add('confirm' , RadioType::class)
                ->add('solo')
                ->add('groupe')
                ->add('sexe' ,ChoiceType::class, array(
                                                        'choices'  => array(
                                                          'Sexe' => null,
                                                          'Masculin' => 'M',
                                                          'Feminin' => 'F',
                                                        ),
                ))
                ->add('style' ,ChoiceType::class, array(
                  'choices'  => array(
                    'Style' => null,
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



->add('image', ImageType::class)
->add('categories',EntityType::class, array(
                                            'class' => 'HZWonja237Bundle:Category',
                                            'choice_label' => 'name',
                                            'multiple'=>true
                                          )
      )
      ->add('lu', RadioType::class, array(
                                              'label' => 'J\'accepte les conditions: '
))
                ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\Wonja237Bundle\Entity\EnregistrementAutreArtiste'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hz_wonja237bundle_EnregistrementAutreArtiste';
    }


}
