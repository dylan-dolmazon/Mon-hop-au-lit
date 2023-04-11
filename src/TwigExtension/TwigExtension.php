<?php

namespace App\TwigExtension;

use App\Entity\Cases;
use App\Repository\PlayerRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return[
            new TwigFunction('getRent', [$this, 'getRent']),
            new TwigFunction('getNbHouse',[$this,'getNbHouse']),
        ];
    }
    public function getRent(Cases $case):int{
        $rent = 0;
        if ($case->getType()->getId()==3){
            //gare
            return match (count($case->getOwner()->getStations())) {
                2 => $case->getStation()->getRent2(),
                3 => $case->getStation()->getRent3(),
                4 => $case->getStation()->getRent4(),
                default => $case->getStation()->getRent1(),
            };
        }else if($case->getType()->getId()==4){
            //property
            return match ($case->getProperty()->getHouse()) {
                1 => $case->getProperty()->getRent1(),
                2 => $case->getProperty()->getRent2(),
                3 => $case->getProperty()->getRent3(),
                4 => $case->getProperty()->getRent4(),
                5 => $case->getProperty()->getRent5(),
                default => $case->getProperty()->getRent(),
            };
        }
        return $rent;
    }
    public function getNbHouse(Cases $case):int{
        $rent = 0;
        if ($case->getType()->getId()==3){
if($case->getOwner()!=null){
    return match (count($case->getOwner()->getStations())) {
        2 => 2,
        3 => 3,
        4 =>4,
        default => 1,
    };
} else {
    return 0;
}
        }else if($case->getType()->getId()==4){
            //property
            return match ($case->getProperty()->getHouse()) {
                1 => 2,
                2 => 3,
                3 => 4,
                4 => 5,
                5 => 6,
                default =>1,
            };
        }
        return $rent;
    }
}