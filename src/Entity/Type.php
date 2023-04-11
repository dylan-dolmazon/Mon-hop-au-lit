<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: Cases::class)]
    private Collection $cases;

    public function __construct()
    {
        $this->cases = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Cases>
     */
    public function getCases(): Collection
    {
        return $this->cases;
    }

    public function addCase(Cases $case): self
    {
        if (!$this->cases->contains($case)) {
            $this->cases->add($case);
            $case->setType($this);
        }

        return $this;
    }

    public function removeCase(Cases $case): self
    {
        if ($this->cases->removeElement($case)) {
            // set the owning side to null (unless already changed)
            if ($case->getType() === $this) {
                $case->setType(null);
            }
        }

        return $this;
    }






}
