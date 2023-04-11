<?php

namespace App\Controller;

use App\Entity\Cases;
use App\Entity\Icon;
use App\Entity\Luck;
use App\Entity\Player;
use App\Repository\CasesRepository;
use App\Repository\LuckRepository;
use App\Repository\PlayerRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{

    #[Route('/', name: 'app_game_rules')]
    public function ruleds(): Response
    {
        return $this->render('game/rules.html.twig', []);
    }
    #[Route('/luck/random/{player}', name: 'app_luck_random', methods: ['GET'])]
    public function random( Player $player,
                            LuckRepository $luckRepository, CasesRepository $casesRepository,
                            PlayerRepository $playerRepository): Response
    {
        $lucks = $luckRepository->findAll();
        $number = mt_rand(0, count($lucks)-1);
        $luck = $lucks[$number];
        switch ($luck->getId()){
            case 1:
                $player->setCases($casesRepository->findOneBy(['value'=>39]));
                break;
            case 2:
                $player->setCases($casesRepository->findOneBy(['value'=>0]));
                $player->setMoney($player->getMoney()+200);
                break;
            case 3:
                $newCase = $casesRepository->findOneBy(['value'=>23]);
                if($player->getCases()->getValue()>$newCase->getValue()){
                    $player->setMoney($player->getMoney()+200);
                }
                $player->setCases($newCase);
                break;
            case 4:
                $newCase = $casesRepository->findOneBy(['value'=>11]);
                if($player->getCases()->getValue()>$newCase->getValue()){
                    $player->setMoney($player->getMoney()+200);
                }
                $player->setCases($newCase);
                break;
            case 5:
                $player->setCases($casesRepository->findOneBy(["value"=>10]));
                $player->setPrison(1);
                break;
            case 6:
                $player->addLuck($luck);
            case 7:
                $player->setMoney($player->getMoney()+200);
                break;
            case 8:
            case 9:
                $player->setMoney($player->getMoney()-50);
                break;
            case 10:
                $player->setMoney($player->getMoney()+10);
                break;
            case 11:
                $players = $playerRepository->findByNot('id',$player->getId());
                foreach ($players as $play){
                    $play->setMoney($play->getMoney()+20);
                    $player->setMoney($player->getMoney()-20);
                    $playerRepository->save($play,true);
                }
                break;
            case 12:
                $players = $playerRepository->findByNot('id',$player->getId());
                foreach ($players as $play){
                    $play->setMoney($play->getMoney()-15);
                    $player->setMoney($player->getMoney()+15);
                    $playerRepository->save($play,true);
                }
                break;
            case 18:
                $newCase = $casesRepository->findOneBy(['value'=>$player->getCases()->getValue()+3]);
                $player->setCases($newCase);
                break;
            case 21:
                $newCase = $casesRepository->findOneBy(['value'=>$player->getCases()->getValue()+5]);
                $player->setCases($newCase);
                break;
            case 22:
                $newCase = $casesRepository->findOneBy(['value'=>$player->getCases()->getValue()-5]);
                $player->setCases($newCase);
                break;

        }
        $playerRepository->save($player,true);
        return new Response($luck->getDescription());
    }
    #[Route('/game', name: 'app_game')]
    public function index(ManagerRegistry $doctrine): Response
    {

        $casesRepository = $doctrine->getRepository(Cases::class);
        $cases = $casesRepository->findBy([], ['position' => 'ASC']);
        $playerRepository = $doctrine->getRepository(Player::class);
        $players = $playerRepository->findAll();
        $player = $playerRepository->findOneBy(["turn" => true]);
        if ($player == null)
            $player = $players[0];
        $iconRepository = $doctrine->getRepository(Icon::class);
        $icons = $iconRepository->findAll();
        $nextPlayer = null;
        dump($player);
        return $this->render('game/index.html.twig', [
            'cases' => $cases,
            'players' => $players,
            'icons' => $icons,
            'player' => $player,
            'nextPlayer'=>$nextPlayer
        ]);
    }

    #[Route('/game/reset', name: 'app_game_reset')]
    public function reset(ManagerRegistry $doctrine)
    {
        $playerRepository = $doctrine->getRepository(Player::class);
        $casesRepository = $doctrine->getRepository(Cases::class);
        $caseDepart = $casesRepository->find(1);
        $players = $playerRepository->findAll();
        $cases = $casesRepository->findAll();
        foreach ($cases as $case) {
            $case->setOwner(null);
            if ($case->getType()->getId()== 4)
                $case->getProperty()->setHouse(null);
        }
        foreach ($players as $player) {
            $player->setCases($caseDepart);
            $player->setMoney(1500);
            $player->setTurn(false);
            $player->setNbDouble(0);
            $playerRepository->save($player, true);
        }

        return new Response('<p>Remise à zéro réeusie</p>');
    }

    #[Route('/game/board', name: 'app_game_board')]
    public function board(ManagerRegistry $doctrine): Response
    {
        $casesRepository = $doctrine->getRepository(Cases::class);
        $cases = $casesRepository->findBy([], ['position' => 'ASC']);
        $playerRepository = $doctrine->getRepository(Player::class);
        $players = $playerRepository->findBy([],["ordre"=>'ASC']);
        $nextPlayer=null;

        foreach ($players as $key=>$play) {
            if($play->isTurn()) {
                if($key+1 == count($players))
                    $nextPlayer=$players[0];
                else
                    $nextPlayer = $players[$key+1];
                break;
            }
        }
        $player = $playerRepository->findOneBy(["turn" => true]);

        if ($player == null) $player = $players[0];
        $iconRepository = $doctrine->getRepository(Icon::class);
        $icons = $iconRepository->findAll();
        return $this->render('game/board.html.twig', [
            'cases' => $cases,
            'players' => $players,
            'icons' => $icons,
            'player' => $player,
            'nextPlayer'=>$nextPlayer,
        ]);
    }

    #[Route('/game/roll', name: 'app_game_roll')]
    public function roll(ManagerRegistry $doctrine): Response
    {
        $dice1 = mt_rand(1,6);
        $dice2 = mt_rand(1,6);
        $playerRepository = $doctrine->getRepository(Player::class);
        $casesRepository = $doctrine->getRepository(Cases::class);
        $players = $playerRepository->findBy([],["ordre"=>'ASC']);
        $currentPlayer = null;
        foreach ($players as $player) {
            if ($player->getNbDouble() != 0)
                $currentPlayer = $player;
        }
        if ($currentPlayer == null) {
            foreach ($players as $player) {
                if ($player->isTurn()) {
                    $ordre = $player->getOrdre();
                    $ordre++;
                    $currentPlayer = $playerRepository->findOneBy(['ordre'=>$ordre]);
                    $player->setTurn(false);
                    if ($currentPlayer != null)
                        $currentPlayer->setTurn(true);
                    $playerRepository->save($player, true);
                    break;
                }
            }
        }
        if ($currentPlayer == null) {
            $players[0]->setTurn(true);
            $currentPlayer = $players[0];
        }

        if ($dice1 == $dice2 && $currentPlayer->getNbDouble() != 3)
            $currentPlayer->setNbDouble($currentPlayer->getNbDouble() + 1);
        else
            $currentPlayer->setNbDouble(0);

        if (($dice1 == $dice2 && $currentPlayer->getPrison() != 0) || $currentPlayer->getPrison()==3)
            $currentPlayer->setPrison(0);
        elseif($currentPlayer->getPrison()!=0)
            $currentPlayer->setPrison($currentPlayer->getPrison() + 1);

        if ($currentPlayer->getPrison() == 0){
            $newValue = $currentPlayer->getCases()->getValue() + $dice1 + $dice2;
            if ($newValue > 39) {
                $newValue = $newValue - 40;
                if ($newValue == 0)
                    $currentPlayer->setMoney($currentPlayer->getMoney() + 400);
                else
                    $currentPlayer->setMoney($currentPlayer->getMoney() + 200);
            }
            $nextCase = $casesRepository->findOneBy(['value' => $newValue]);
            if ($currentPlayer->getNbDouble() == 3) {
                $currentPlayer->setCases($casesRepository->findOneBy(["value"=>10]));
                $currentPlayer->setPrison(1);
                $currentPlayer->setNbDouble(0);
            } else {
                $currentPlayer->setCases($nextCase);
            }
        }
        $perdu = false;
        if($currentPlayer->getMoney()<0)
        {
            $perdu = true;
        }
        $playerRepository->save($currentPlayer, true);

        return $this->render('game/roll.html.twig', [
            'dice1' => $dice1,
            'dice2' => $dice2,
            'perdu' => $perdu,
        ]);
    }

}
