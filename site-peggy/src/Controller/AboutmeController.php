<?php

namespace App\Controller;

use App\Entity\Aboutme;
use App\Form\AboutmeType;
use App\Repository\AboutmeRepository;
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
    public function new(Request $request): Response
    {
        $aboutme = new Aboutme();
        $form = $this->createForm(AboutmeType::class, $aboutme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
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
     * @Route("/aboutme/show/{id}/edit", name="aboutme_edit")
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
            'aboutme' => $aboutme,
            'form' => $form->createView(),
        ]);
    }
}
