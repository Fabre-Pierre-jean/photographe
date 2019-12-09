<?php

namespace App\Controller;


use App\Entity\Admin;
use App\Entity\PasswordChange;
use App\Form\AdminType;
use App\Form\PasswordChangeType;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/create", name="admin_new", methods={"GET","POST"})
     */
    public function new(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $admin = new Admin();
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passwordHashed = $encoder->encodePassword($admin, $admin->getPasswordHash());
            $admin->setPasswordHash($passwordHashed);

            $manager->persist($admin);
            $manager->flush();

            return $this->redirect($this->generateUrl('images_index'));
        }


        return $this->render('admin/register.html.twig',[
            'form' => $form->createView()
        ]);
    }

    /**
     * Modification du mot de passe
     *
     * @Route("/admin/password", name="admin_password")
     *
     * @return Response
     */
    public function passwordChange(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){

        $passwordChange = new PasswordChange();
        $form = $this->createForm(PasswordChangeType::class, $passwordChange);

        $form->handleRequest($request);

        $user = $this->getUser();

        if($form->isSubmitted() && $form->isValid()) {
            // we verify if the oldPassword correspond to the passwordHash in our db
            if (!password_verify($passwordChange->getOldPassword(), $user->getPasswordHash())) {
                $form->get('oldPassword')->addError(new FormError("Mauvais mot de passe !"));
            } else {
                $newPassword = $passwordChange->getNewPassword();
                $passwordHashed = $encoder->encodePassword($user,$newPassword);
                $user->setPasswordHash($passwordHashed);
                $manager->persist($user);
                $manager->flush();

                $this->addFlash(
                    'success',
                    "Votre mot de passe a bien été modifié !"
                );
                return $this->redirectToRoute('account_login');
            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }

}
