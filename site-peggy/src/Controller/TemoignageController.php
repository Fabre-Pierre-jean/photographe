<?php

namespace App\Controller;

use App\Entity\Temoignage;
use App\Form\TemoignageType;
use App\Repository\TemoignageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemoignageController extends AbstractController
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @Route("/temoignage", name="temoignage_index")
     */
    public function index(TemoignageRepository $temoignageRepository): Response
    {
        return $this->render('temoignage/index.html.twig', [
            'temoignages' => $temoignageRepository->findAll(),
        ]);
    }


    /**
     * @Route("/admin/temoignage/list", name="temoignage_list")
     */
    public function list(TemoignageRepository $temoignageRepository): Response
    {
        return $this->render('temoignage/list.html.twig', [
            'temoignages' => $temoignageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/temoignage/new", name="temoignage_new")
     */
    public function new(Request $request, EntityManagerInterface $manager)
    {
        $temoignage = new Temoignage();
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

//            envoi du mail de notification
            $message = (new \Swift_Message('Un nouveau témoignage est disponible sur le site'))
                ->setFrom('peggy.bous.fr@noreply.com')
                ->setBody($this->renderView('notify/sendemail.html.twig',
                    array('message' => $temoignage->getMessage(),
                        'nom' => $temoignage->getNom(),
                    )),
                    'text/html');

            $this->mailer->send($message);

            $manager->persist($temoignage);
            $manager->flush();

            $this->addFlash(
                'success',
                "Le témoignage a bien été créer !"
            );

            return $this->redirect($this->generateUrl('temoignage_index'));
        }

        return $this->render('temoignage/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/temoignage/{id}/show", name="temoignage_show")
     */
    public function show(Temoignage $temoignage): Response
    {
        return $this->render('temoignage/show.html.twig', [
            'temoignage' => $temoignage,
        ]);
    }

    /**
     * @Route("/admin/temoignage/{id}/edit", name="temoignage_edit")
     */
    public function edit(Request $request, Temoignage $temoignage): Response
    {
        $form = $this->createForm(TemoignageType::class, $temoignage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash(
                'success',
                "Le témoignage a bien été modifiée !"
            );

            return $this->redirectToRoute('temoignage_list');
        }

        return $this->render('temoignage/edit.html.twig', [
            'temoignage' => $temoignage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Supprimer un témoignage
     *
     * @Route("/admin/temoignage/{id}/delete", name="temoignage_delete")
     */
    public function deleteAction(Temoignage $temoignage, EntityManagerInterface $manager)
    {
        $manager->remove($temoignage);
        $manager->flush();

        return $this->redirectToRoute('temoignage_list');
    }
}
