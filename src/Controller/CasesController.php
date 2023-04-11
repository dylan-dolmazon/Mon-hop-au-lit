<?php

namespace App\Controller;

use App\Entity\Cases;
use App\Entity\Luck;
use App\Entity\Player;
use App\Form\CasesType;
use App\Repository\CasesRepository;
use App\Repository\PlayerRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cases')]
class CasesController extends AbstractController
{
    #[Route('/', name: 'app_cases_index', methods: ['GET'])]
    public function index(CasesRepository $casesRepository): Response
    {
        return $this->render('cases/index.html.twig', [
            'cases' => $casesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cases_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, CasesRepository $casesRepository): Response
    {
        $case = new Cases();
        $form = $this->createForm(CasesType::class, $case);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $casesRepository->save($case, true);

            return $this->redirectToRoute('app_cases_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cases/new.html.twig', [
            'case' => $case,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cases_show', methods: ['GET'])]
    public function show(Cases $case): Response
    {
        return $this->render('cases/show.html.twig', [
            'case' => $case,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_cases_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Cases $case, CasesRepository $casesRepository): Response
    {
        $form = $this->createForm(CasesType::class, $case);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $casesRepository->save($case, true);

            return $this->redirectToRoute('app_cases_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cases/edit.html.twig', [
            'case' => $case,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_cases_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Cases $case, CasesRepository $casesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$case->getId(), $request->request->get('_token'))) {
            $casesRepository->remove($case, true);
        }

        return $this->redirectToRoute('app_cases_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/buy/{case}/{player}', name: 'app_cases_buy', methods: ['post'])]
    public function buy(Request $request, Cases $case,Player $player,  CasesRepository $casesRepository, PlayerRepository $playerRepository): Response
    {


        $case->setOwner($player);
        if($case->getType()->getId()==3)$player->addStation($case->getStation());
        if($case->getType()->getId()==4)$player->addCard($case);
        $player->setMoney(($player->getMoney()) - ($case->getPrice()));
        $casesRepository->save($case, true);
        $playerRepository->save($player, true);


        return new Response('Acheté avec succès');
    }
    #[Route('/go-prison/{player}', name: 'app_cases_go_prison', methods: ['post'])]
    public function goPrison(Request $request,Player $player, CasesRepository $casesRepository, PlayerRepository $playerRepository ): Response
    {
        $player->setPrison(1);
        $player->setCases($casesRepository->findOneBy(["value"=>10]));
        $playerRepository->save($player,true);
        return new Response('En cellule de degrisement !');
    }
    #[Route('/mortgage/{player}', name: 'app_cases_mortgage')]
    public function mortgage(Request $request,Player $player, CasesRepository $casesRepository, PlayerRepository $playerRepository ): Response
    {
        $cases = $casesRepository->findBy(['owner'=>$player->getId()],["value"=>"ASC"]);
        return $this->render('cases/owner.html.twig',[
            'cases'=>$cases
        ]);
    }
    #[Route('/mortgage/{cases}/{price}', name: 'app_cases_mortgage_player')]
    public function mortgagePlayer(Request $request,Cases $cases, int $price,CasesRepository $casesRepository, PlayerRepository $playerRepository ): Response
    {
        $player = $cases->getOwner();
        $player->setMoney($player->getMoney()+$price);
        $cases->setOwner(null);
        if($cases->getProperty()){
            $cases->getProperty()->setHouse(0);
        }
        $playerRepository->save($player,true);
        $casesRepository->save($cases, true);
        return new Response($cases->getName().' bien vendu');
    }


    #[Route('/pay/{case}/{player}/{price}', name: 'app_cases_pay', methods: ['post'])]
    public function pay(Request $request, Cases $case,Player $player,int $price, PlayerRepository $playerRepository ): Response
    {

        if($case->getOwner()!=null){
            $owner = $case->getOwner();
            $owner->setMoney($owner->getMoney()+$price);
            $playerRepository->save($owner,true);
        }
        $player->setMoney(($player->getMoney()) - $price);

        $playerRepository->save($player, true);


        return new Response('Payé avec succès');
    }
    #[Route('/out-of-jail/{player}', name: 'app_out_of_jail', methods: ['post'])]
    public function outOfJail(Request $request,Player $player, PlayerRepository $playerRepository ): Response
    {
        $player->setPrison(0);
        $playerRepository->save($player, true);
        return new Response('sauvé');
    }
}
