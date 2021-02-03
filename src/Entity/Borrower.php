<?php

namespace App\Entity;

use App\Repository\BorrowerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BorrowerRepository::class)
 */
class Borrower
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $borrowername;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $borrowercontact;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $borrowerlogin;

    /**
     * @ORM\Column(type="boolean")
     */
    private $borrowerblacklist;

    /**
     * @ORM\Column(type="boolean")
     */
    private $borrowercard;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBorrowername(): ?string
    {
        return $this->borrowername;
    }

    public function setBorrowername(string $borrowername): self
    {
        $this->borrowername = $borrowername;

        return $this;
    }

    public function getBorrowercontact(): ?string
    {
        return $this->borrowercontact;
    }

    public function setBorrowercontact(string $borrowercontact): self
    {
        $this->borrowercontact = $borrowercontact;

        return $this;
    }

    public function getBorrowerlogin(): ?string
    {
        return $this->borrowerlogin;
    }

    public function setBorrowerlogin(string $borrowerlogin): self
    {
        $this->borrowerlogin = $borrowerlogin;

        return $this;
    }

    public function getBorrowerblacklist(): ?bool
    {
        return $this->borrowerblacklist;
    }

    public function setBorrowerblacklist(bool $borrowerblacklist): self
    {
        $this->borrowerblacklist = $borrowerblacklist;

        return $this;
    }

    public function getBorrowercard(): ?bool
    {
        return $this->borrowercard;
    }

    public function setBorrowercard(bool $borrowercard): self
    {
        $this->borrowercard = $borrowercard;

        return $this;
    }
}
