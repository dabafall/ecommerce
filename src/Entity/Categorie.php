<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\OneToMany(mappedBy: 'procat', targetEntity: Produit::class)]
    private Collection $catpro;

    public function __construct()
    {
        $this->catpro = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getCatpro(): Collection
    {
        return $this->catpro;
    }

    public function addCatpro(Produit $catpro): self
    {
        if (!$this->catpro->contains($catpro)) {
            $this->catpro->add($catpro);
            $catpro->setProcat($this);
        }

        return $this;
    }

    public function removeCatpro(Produit $catpro): self
    {
        if ($this->catpro->removeElement($catpro)) {
            // set the owning side to null (unless already changed)
            if ($catpro->getProcat() === $this) {
                $catpro->setProcat(null);
            }
        }

        return $this;
    }
}
