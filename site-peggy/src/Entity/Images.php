<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImagesRepository")
 */
class Images
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
    * @ORM\Column(type="integer", nullable=true)
    */
    private $emplacement;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $urlImage;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $imageFilename;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaires;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmplacement()
    {
        return $this->emplacement;
    }

    public function getImageFilename()
    {
        return $this->imageFilename;
    }

    public function setImageFilename($imageFilename)
    {
        $this->imageFilename = $imageFilename;

        return $this;
    }


    public function setEmplacement($emplacement): ?int
    {
        $this->emplacement = $emplacement;
    }

    public function getNomEvenement(): ?string
    {
        return $this->nomEvenement;
    }

    public function setNomEvenement(string $nomEvenement): self
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->urlImage;
    }

    public function setUrlImage(string $urlImage): self
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }
}
