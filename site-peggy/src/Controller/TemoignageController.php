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

            return $this->redirect($this->generateUrl('temoignage_index')); // a changer pour index admin
        }

        return $this->render('temoignage/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
