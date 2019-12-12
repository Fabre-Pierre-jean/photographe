<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\AdminType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/admin/list", name="admin_list")
     */
    public function list(UserRepository $userRepository): Response
    {
        return $this->render('admin/list.html.twig', [
            'admins' => $userRepository->findAll(),

        ]);
    }

    /**
     * @Route("/admin/new", name="admin_new")
     */
    public function new(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $admin = new User();
        $form = $this->createForm(AdminType::class, $admin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $passwordHashed = $encoder->encodePassword($admin, $admin->getPassword());
            $admin->setPassword($passwordHashed);

            $manager->persist($admin);
            $manager->flush();

            return $this->redirect($this->generateUrl('admin_index'));
        }


        return $this->render('admin/register.html.twig',[
            'form' => $form->createView()
        ]);
    }

//    /**
//     * @Route("/admin/{id}/edit", name="admin_edit")
//     */
//    public function edit(Request $request, User $admin): Response
//    {
//        $form = $this->createForm(AdminType::class, $admin);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('admin_list');
//        }
//
//        return $this->render('admin/edit.html.twig', [
//            'admin' => $admin,
//            'form' => $form->createView(),
//        ]);
//    }

//    /**
//     * Modification du mot de passe
//     *
//     * @Route("/admin/password", name="admin_password")
//     *
//     * @return Response
//     */
//    public function passwordChange(Request $request, ObjectManager $manager, UserPasswordEncoderInterface $encoder){
//
//        $passwordChange = new PasswordChange();
//        $form = $this->createForm(PasswordChangeType::class, $passwordChange);
//
//        $form->handleRequest($request);
//
//        $user = $this->getUser();
//
//        if($form->isSubmitted() && $form->isValid()) {
//            // we verify if the oldPassword correspond to the passwordHash in our db
//            if (!password_verify($passwordChange->getOldPassword(), $user->getPasswordHash())) {
//                $form->get('oldPassword')->addError(new FormError("Mauvais mot de passe !"));
//            } else {
//                $newPassword = $passwordChange->getNewPassword();
//                $passwordHashed = $encoder->encodePassword($user,$newPassword);
//                $user->setPasswordHash($passwordHashed);
//                $manager->persist($user);
//                $manager->flush();
//
//                $this->addFlash(
//                    'success',
//                    "Votre mot de passe a bien été modifié !"
//                );
//                return $this->redirectToRoute('account_login');
//            }
//        }
//
//        return $this->render('account/password.html.twig', [
//            'form' => $form->createView()
//        ]);
//    }

//    /**
//     * Supprimer un compte
//     *
//     * @Route("/admin/delete/{id}", name="admin_delete")
//     */
//    public function deleteAction(User $admin, EntityManagerInterface $manager)
//    {
//        $manager->remove($admin);
//        $manager->flush();
//
//        $this->addFlash(
//            'success',
//            "Le compte a bien été supprimé !"
//        );
//
//        return $this->redirectToRoute('admin_list');
//    }

}
