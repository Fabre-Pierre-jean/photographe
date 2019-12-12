<?php

namespace App\Controller;

use App\Entity\Aboutme;
use App\Form\AboutmeType;
use App\Repository\AboutmeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AboutmeController extends AbstractController
{
    /**
     * @Route("/aboutme", name="aboutme_visitor")
     */
    public function index(AboutmeRepository $aboutmeRepository): Response
    {
        return $this->render('aboutme/render.html.twig', [
            'aboutmes' => $aboutmeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/aboutme/new", name="aboutme_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $aboutme = new Aboutme();
        $form = $this->createForm(AboutmeType::class, $aboutme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form['image']->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        $this->getParameter('upload_directory_aboutme'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    return "ya un bleme";
                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $aboutme->setImageFilename($newFilename);
            }
            $entityManager->persist($aboutme);
            $entityManager->flush();

            return $this->redirectToRoute('aboutme_index');
        }

        return $this->render('aboutme/new.html.twig', [
            'aboutme' => $aboutme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/aboutme", name="aboutme_index")
     */
    public function show(AboutmeRepository $aboutmeRepository): Response
    {
        return $this->render('aboutme/index.html.twig', [
            'aboutmes' => $aboutmeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/aboutme/show/{id}/edit", name="aboutme_edit")
     */
    public function edit(Request $request, Aboutme $aboutme): Response
    {
        $form = $this->createForm(AboutmeType::class, $aboutme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('aboutme_index');
        }

        return $this->render('aboutme/edit.html.twig', [
            'image'     => $aboutme->getImageFilename(),
            'aboutme'   => $aboutme,
            'form'      => $form->createView(),
        ]);
    }

    /**
     * Supprimer la description
     *
         * @Route("/admin/aboutme/{id}/delete", name="aboutme_delete")
     */
    public function deleteAction(Aboutme $aboutme, EntityManagerInterface $manager)
    {
        $manager->remove($aboutme);
        $manager->flush();

        $this->addFlash(
            'success',
            "Votre presentation a bien été supprimée !"
        );

        return $this->redirectToRoute('aboutme_index');
    }
}
