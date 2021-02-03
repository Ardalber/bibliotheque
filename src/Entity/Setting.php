<?php

namespace App\Entity;

use App\Repository\SettingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SettingRepository::class)
 */
class Setting
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
    private $lengthborrow;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $maxborrow;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $latetax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLengthborrow(): ?string
    {
        return $this->lengthborrow;
    }

    public function setLengthborrow(string $lengthborrow): self
    {
        $this->lengthborrow = $lengthborrow;

        return $this;
    }

    public function getMaxborrow(): ?string
    {
        return $this->maxborrow;
    }

    public function setMaxborrow(string $maxborrow): self
    {
        $this->maxborrow = $maxborrow;

        return $this;
    }

    public function getLatetax(): ?string
    {
        return $this->latetax;
    }

    public function setLatetax(string $latetax): self
    {
        $this->latetax = $latetax;

        return $this;
    }
}
