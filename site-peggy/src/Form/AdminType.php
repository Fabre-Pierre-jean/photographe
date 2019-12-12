<?php


namespace App\Form;

use App\Entity\Admin;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminType extends ApplicationType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',
                EmailType::class,
                $this->getOption(
                    "Votre email",
                    "Entrez votre email"
                )
            )
            ->add('password',
                PasswordType::class,
                $this->getOption(
                    "Mot de passe",
                    "Entrez votre mot de passe"
                )
            )
            ->add('passwordConfirm',
                PasswordType::class,
                $this->getOption(
                    "Confirmer le mot de passe",
                    "Confirmer le mot de passe"
                )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}