<?php

namespace App\Form;

use App\Entity\Tarif;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TarifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomFormule')
            ->add('prix', MoneyType::class)
            ->add('descriptif',
                CKEditorType::class,[
                    'label' => 'Contenu du forfait',
                    'config' => [
                        'toolbar'   => 'full',
                        'required'  => true
                    ]
                ]
            )
            ->add('extra',
                CKEditorType::class,[
                    'label' => 'Extra',
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
            'data_class' => Tarif::class,
        ]);
    }
}
