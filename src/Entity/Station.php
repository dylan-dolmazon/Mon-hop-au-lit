<?php

namespace App\Entity;

use App\Repository\StationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StationRepository::class)]
class Station
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?float $rent1 = null;

    #[ORM\Column]
    private ?float $rent2 = null;

    #[ORM\Column]
    private ?float $rent3 = null;

    #[ORM\Column]
    private ?float $rent4 = null;

    #[ORM\Column]
    private ?float $mortgage = null;

    #[ORM\ManyToOne(inversedBy: 'stations')]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    private ?Player $player = null;

    #[ORM\OneToOne(mappedBy: 'station', cascade: ['persist'])]
    private ?Cases $cases = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRent1(): ?float
    {
        return $this->rent1;
    }

    public function setRent1(float $rent1): self
    {
        $this->rent1 = $rent1;

        return $this;
    }

    public function getRent2(): ?float
    {
        return $this->rent2;
    }

    public function setRent2(float $rent2): self
    {
        $this->rent2 = $rent2;

        return $this;
    }

    public function getRent3(): ?float
    {
        return $this->rent3;
    }

    public function setRent3(float $rent3): self
    {
        $this->rent3 = $rent3;

        return $this;
    }

    public function getRent4(): ?float
    {
        return $this->rent4;
    }

    public function setRent4(float $rent4): self
    {
        $this->rent4 = $rent4;

        return $this;
    }

    public function getMortgage(): ?float
    {
        return $this->mortgage;
    }

    public function setMortgage(float $mortgage): self
    {
        $this->mortgage = $mortgage;

        return $this;
    }

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(?Player $player): self
    {
        $this->player = $player;

        return $this;
    }

    public function getCases(): ?Cases
    {
        return $this->cases;
    }

    public function setCases(?Cases $cases): self
    {
        // unset the owning side of the relation if necessary
        if ($cases === null && $this->cases !== null) {
            $this->cases->setStation(null);
        }

        // set the owning side of the relation if necessary
        if ($cases !== null && $cases->getStation() !== $this) {
            $cases->setStation($this);
        }

        $this->cases = $cases;

        return $this;
    }
}
