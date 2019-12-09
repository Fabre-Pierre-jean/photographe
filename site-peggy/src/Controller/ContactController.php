<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
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
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,EntityManagerInterface $manager)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        $message = (new \Swift_Message($contact->getSubject()))
            ->setFrom($contact->getEmail())
            ->setBody($this->renderView('contact/sendemail.html.twig',
                array('message' => $contact->getMessage(),
                    'nom' => $contact->getNom(),
                    'sujet' => $contact->getSubject(),
                    'mail' => $contact->getEmail())),
                'text/html');
        $this->mailer->send($message);


        if ($form->isSubmitted() && $form->isValid()) {

            $manager->persist($contact);
            $manager->flush();

            $this->addFlash(
                'success',
                "Votre message a bien été envoyée !"
            );

            return $this->redirect($this->generateUrl('homepage'));
        }


        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
