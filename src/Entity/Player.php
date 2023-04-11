<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?float $money = null;

    #[ORM\OneToMany(mappedBy: 'player', targetEntity: Luck::class, cascade: ['persist'])]
    private Collection $lucks;

    #[ORM\OneToMany(mappedBy: 'player', targetEntity: Station::class)]
    private Collection $stations;

    #[ORM\OneToMany(mappedBy: 'player', targetEntity: Property::class)]
    private Collection $properties;

    #[ORM\ManyToOne(cascade: ['persist'], inversedBy: 'players')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cases $cases = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $color = null;

    #[ORM\ManyToOne(cascade: ['persist'], inversedBy: 'players')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Icon $icon = null;


    #[ORM\Column]
    private ?bool $turn = false;

    #[ORM\Column(nullable: true)]
    private ?int $nbDouble = 0;

    #[ORM\OneToMany(mappedBy: 'owner', targetEntity: Cases::class)]
    private Collection $cards;

    #[ORM\Column]
    private ?int $prison = 0;

    #[ORM\Column]
    private ?int $ordre = null;

    public function __construct()
    {
        $this->lucks = new ArrayCollection();
        $this->stations = new ArrayCollection();
        $this->properties = new ArrayCollection();
        $this->cards = new ArrayCollection();
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

    public function getMoney(): ?float
    {
        return $this->money;
    }

    public function setMoney(?float $money): self
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @return Collection<int, Luck>
     */
    public function getLucks(): Collection
    {
        return $this->lucks;
    }

    public function addLuck(Luck $luck): self
    {
        if (!$this->lucks->contains($luck)) {
            $this->lucks->add($luck);
            $luck->setPlayer($this);
        }

        return $this;
    }

    public function removeLuck(Luck $luck): self
    {
        if ($this->lucks->removeElement($luck)) {
            // set the owning side to null (unless already changed)
            if ($luck->getPlayer() === $this) {
                $luck->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Station>
     */
    public function getStations(): Collection
    {
        return $this->stations;
    }

    public function addStation(Station $station): self
    {
        if (!$this->stations->contains($station)) {
            $this->stations->add($station);
            $station->setPlayer($this);
        }

        return $this;
    }

    public function removeStation(Station $station): self
    {
        if ($this->stations->removeElement($station)) {
            // set the owning side to null (unless already changed)
            if ($station->getPlayer() === $this) {
                $station->setPlayer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Property>
     */
    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function addProperty(Property $property): self
    {
        if (!$this->properties->contains($property)) {
            $this->properties->add($property);
            $property->setPlayer($this);
        }

        return $this;
    }

    public function removeProperty(Property $property): self
    {
        if ($this->properties->removeElement($property)) {
            // set the owning side to null (unless already changed)
            if ($property->getPlayer() === $this) {
                $property->setPlayer(null);
            }
        }

        return $this;
    }

    public function getCases(): ?Cases
    {
        return $this->cases;
    }

    public function setCases(?Cases $cases): self
    {
        $this->cases = $cases;

        return $this;
    }


    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getIcon(): ?Icon
    {
        return $this->icon;
    }

    public function setIcon(?Icon $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function isTurn(): ?bool
    {
        return $this->turn;
    }

    public function setTurn(bool $turn): self
    {
        $this->turn = $turn;

        return $this;
    }

    public function getNbDouble(): ?int
    {
        return $this->nbDouble;
    }

    public function setNbDouble(?int $nbDouble): self
    {
        $this->nbDouble = $nbDouble;

        return $this;
    }

    /**
     * @return Collection<int, Cases>
     */
    public function getCards(): Collection
    {
        return $this->cards;
    }

    public function addCard(Cases $card): self
    {
        if (!$this->cards->contains($card)) {
            $this->cards->add($card);
            $card->setOwner($this);
        }

        return $this;
    }

    public function removeCard(Cases $card): self
    {
        if ($this->cards->removeElement($card)) {
            // set the owning side to null (unless already changed)
            if ($card->getOwner() === $this) {
                $card->setOwner(null);
            }
        }

        return $this;
    }

    public function getPrison(): ?int
    {
        return $this->prison;
    }

    public function setPrison(int $prison): self
    {
        $this->prison = $prison;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }
}
