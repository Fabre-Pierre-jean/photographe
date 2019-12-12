<?php

namespace App\Form;

use App\Entity\Temoignage;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TemoignageType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',
                TextType::class,
                $this->getOption(
                    "Votre nom",
                    "Entrez votre nom..."
                )
            )
            ->add('message',
                CKEditorType::class,[
                    'label' => 'Votre témoignage',
                    'config' => [
                        'toolbar'   => 'full',
                        'required'  => true
                    ]
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Temoignage::class,
        ]);
    }
}
