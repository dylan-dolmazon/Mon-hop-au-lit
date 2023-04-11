<?php

namespace App\Entity;

use App\Repository\CasesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CasesRepository::class)]
class Cases
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $position = null;

    #[ORM\OneToMany(mappedBy: 'cases', targetEntity: Player::class)]
    private Collection $players;


    #[ORM\OneToOne(inversedBy: 'cases', cascade: ['persist'])]
    private ?Property $property = null;

    #[ORM\OneToOne(inversedBy: 'cases', cascade: ['persist'])]
    private ?Station $station = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'cases')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Type $type = null;

    #[ORM\Column]
    private ?int $value = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    #[ORM\JoinColumn(nullable: true, onDelete: "SET NULL")]
    private ?Player $owner = null;

    public function __construct()
    {
        $this->players = new ArrayCollection();
    }

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return Collection<int, Player>
     */
    public function getPlayers(): Collection
    {
        return $this->players;
    }

    public function addPlayer(Player $player): self
    {
        if (!$this->players->contains($player)) {
            $this->players->add($player);
            $player->setCases($this);
        }

        return $this;
    }

    public function removePlayer(Player $player): self
    {
        if ($this->players->removeElement($player)) {
            // set the owning side to null (unless already changed)
            if ($player->getCases() === $this) {
                $player->setCases(null);
            }
        }

        return $this;
    }


    public function getProperty(): ?Property
    {
        return $this->property;
    }

    public function setProperty(?Property $property): self
    {
        $this->property = $property;

        return $this;
    }

    public function getStation(): ?Station
    {
        return $this->station;
    }

    public function setStation(?Station $station): self
    {
        $this->station = $station;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }
    public function __toString(){
        return $this->name;
    }

    public function getOwner(): ?Player
    {
        return $this->owner;
    }

    public function setOwner(?Player $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
