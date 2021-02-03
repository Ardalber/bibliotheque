<?php

namespace App\Entity;

use App\Repository\BorrowRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BorrowRepository::class)
 */
class Borrow
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $dateofborrow;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $dateofback;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateofborrow(): ?string
    {
        return $this->dateofborrow;
    }

    public function setDateofborrow(string $dateofborrow): self
    {
        $this->dateofborrow = $dateofborrow;

        return $this;
    }

    public function getDateofback(): ?string
    {
        return $this->dateofback;
    }

    public function setDateofback(string $dateofback): self
    {
        $this->dateofback = $dateofback;

        return $this;
    }
}
