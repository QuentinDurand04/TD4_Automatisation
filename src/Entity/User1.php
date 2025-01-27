<?php

namespace App\Entity;

use App\Repository\User1Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: User1Repository::class)]
class User1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $Nom = null;

    #[ORM\Column(length: 15)]
    private ?string $prenom = null;

    #[ORM\Column]
    private ?int $Tel = null;

    #[ORM\Column(length: 40)]
    private ?string $Adress = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->Tel;
    }

    public function setTel(int $Tel): static
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adresss): static
    {
        $this->Adresss = $Adresss;

        return $this;
    }
}
