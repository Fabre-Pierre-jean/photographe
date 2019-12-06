<?php

namespace App\Form;

use App\Entity\Images;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImagesType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEvenement')
            ->add('urlImage')
            ->add('image', FileType::class, [
                'label' => 'Upload tes images',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // everytime you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '100240k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg'
                        ],
                        'mimeTypesMessage' => 'Please upload a valid .jpg, .jpeg, .png image',
                    ])
                ],
            ])
            ->add('commentaires')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Images::class,
        ]);
    }
}
