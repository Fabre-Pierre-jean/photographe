<?php

namespace App\Controller;

use App\Entity\Tarif;
use App\Form\TarifType;
use App\Repository\TarifRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TarifController extends AbstractController
{
    /**
     * @Route("/tarif", name="tarif_render")
     */
    public function index(TarifRepository $tarifRepository): Response
    {
        return $this->render('tarif/render.html.twig', [
            'tarifs' => $tarifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/tarif", name="tarif_list")
     */
    public function list(TarifRepository $tarifRepository): Response
    {
        return $this->render('tarif/list.html.twig', [
            'tarifs' => $tarifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/tarif/new", name="tarif_new")
     */
    public function new(Request $request): Response
    {
        $tarif = new Tarif();
        $form = $this->createForm(TarifType::class, $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tarif);
            $entityManager->flush();

            return $this->redirectToRoute('tarif_render');
        }

        return $this->render('tarif/new.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/tarif/detail/bronze", name="tarif_detail_bronze")
     */
    public function detailBronze(TarifRepository $tarifRepository): Response
    {
        return $this->render('tarif/detail-bronze.html.twig', [
            'forfaits' => $tarifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/tarif/detail/or", name="tarif_detail_or")
     */
    public function detailOr(TarifRepository $tarifRepository): Response
    {
        return $this->render('tarif/detail-or.html.twig', [
            'forfaits' => $tarifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/tarif/detail/platine", name="tarif_detail_platine")
     */
    public function detailPlatine(TarifRepository $tarifRepository): Response
    {
        return $this->render('tarif/detail-platine.html.twig', [
            'forfaits' => $tarifRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/tarif/{id}/show", name="tarif_show")
     */
    public function show(Tarif $tarif): Response
    {
        return $this->render('tarif/show.html.twig', [
            'tarif' => $tarif,
        ]);
    }

    /**
     * @Route("/admin/tarif/{id}/edit", name="tarif_edit")
     */
    public function edit(Request $request, Tarif $tarif): Response
    {
        $form = $this->createForm(TarifType::class, $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tarif_render');
        }

        return $this->render('tarif/edit.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/tarif/{id}/delete", name="tarif_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tarif $tarif): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tarif->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tarif);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tarif_render');
    }
}
