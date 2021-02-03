<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
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
    private $title;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $type;

    /**
     * @ORM\Column(type="text")
     */
    private $langage;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $authorname;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $editionyear;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $numberofpage;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $editorname;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $bookcode;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $isbn;

    /**
     * @ORM\Column(type="string", length=190)
     */
    private $bookstate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLangage(): ?string
    {
        return $this->langage;
    }

    public function setLangage(string $langage): self
    {
        $this->langage = $langage;

        return $this;
    }

    public function getAuthorname(): ?string
    {
        return $this->authorname;
    }

    public function setAuthorname(string $authorname): self
    {
        $this->authorname = $authorname;

        return $this;
    }

    public function getEditionyear(): ?string
    {
        return $this->editionyear;
    }

    public function setEditionyear(string $editionyear): self
    {
        $this->editionyear = $editionyear;

        return $this;
    }

    public function getNumberofpage(): ?string
    {
        return $this->numberofpage;
    }

    public function setNumberofpage(string $numberofpage): self
    {
        $this->numberofpage = $numberofpage;

        return $this;
    }

    public function getEditorname(): ?string
    {
        return $this->editorname;
    }

    public function setEditorname(string $editorname): self
    {
        $this->editorname = $editorname;

        return $this;
    }

    public function getBookcode(): ?string
    {
        return $this->bookcode;
    }

    public function setBookcode(string $bookcode): self
    {
        $this->bookcode = $bookcode;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getBookstate(): ?string
    {
        return $this->bookstate;
    }

    public function setBookstate(string $bookstate): self
    {
        $this->bookstate = $bookstate;

        return $this;
    }
}
