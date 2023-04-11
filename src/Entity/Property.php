<?php

namespace App\Entity;

use App\Repository\PropertyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PropertyRepository::class)]
class Property
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $house = null;

    #[ORM\Column]
    private ?float $rent = null;

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

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\ManyToOne(inversedBy: 'properties')]
    private ?Player $player = null;

    #[ORM\OneToOne(mappedBy: 'property', cascade: ['persist'])]
    private ?Cases $cases = null;

    #[ORM\Column(nullable: true)]
    private ?float $rent5 = null;

    #[ORM\Column]
    private ?float $price_house = null;

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

    public function getHouse(): ?int
    {
        return $this->house;
    }

    public function setHouse(?int $house): self
    {
        $this->house = $house;

        return $this;
    }

    public function getRent(): ?float
    {
        return $this->rent;
    }

    public function setRent(float $rent): self
    {
        $this->rent = $rent;

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

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
            $this->cases->setProperty(null);
        }

        // set the owning side of the relation if necessary
        if ($cases !== null && $cases->getProperty() !== $this) {
            $cases->setProperty($this);
        }

        $this->cases = $cases;

        return $this;
    }

    public function getRent5(): ?float
    {
        return $this->rent5;
    }

    public function setRent5(?float $rent5): self
    {
        $this->rent5 = $rent5;

        return $this;
    }

    public function getPriceHouse(): ?float
    {
        return $this->price_house;
    }

    public function setPriceHouse(float $price_house): self
    {
        $this->price_house = $price_house;

        return $this;
    }
}
