<?php

namespace App\Controller;

use App\Entity\Luck;
use App\Form\LuckType;
use App\Repository\LuckRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/luck')]
class LuckController extends AbstractController
{
    #[Route('/', name: 'app_luck_index', methods: ['GET'])]
    public function index(LuckRepository $luckRepository): Response
    {
        return $this->render('luck/index.html.twig', [
            'lucks' => $luckRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_luck_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, LuckRepository $luckRepository): Response
    {
        $luck = new Luck();
        $form = $this->createForm(LuckType::class, $luck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $luckRepository->save($luck, true);

            return $this->redirectToRoute('app_luck_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('luck/new.html.twig', [
            'luck' => $luck,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_luck_show', methods: ['GET'])]
    public function show(Luck $luck): Response
    {
        return $this->render('luck/show.html.twig', [
            'luck' => $luck,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_luck_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Luck $luck, LuckRepository $luckRepository): Response
    {
        $form = $this->createForm(LuckType::class, $luck);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $luckRepository->save($luck, true);

            return $this->redirectToRoute('app_luck_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('luck/edit.html.twig', [
            'luck' => $luck,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_luck_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Luck $luck, LuckRepository $luckRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$luck->getId(), $request->request->get('_token'))) {
            $luckRepository->remove($luck, true);
        }

        return $this->redirectToRoute('app_luck_index', [], Response::HTTP_SEE_OTHER);
    }
}
