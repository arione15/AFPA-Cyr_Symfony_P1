<?php

namespace App\Entity;

use App\Repository\RecetteRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity(repositoryClass=RecetteRepository::class)
 */
class Recette
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $titre;

	/**
	 * @ORM\Column(type="string", length=255)
	 */

	/**
	 * @ORM\Column(type="text")
	 */
	private $preparation;


	private $resume;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $temps;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $personne;

	/**
	 * @ORM\Column(type="datetime")
	 */
	private $createdAt;

	// public function __construct()
	// {
	// 	$this->createdAt = new DateTime();
	// }

	public function getId(): ?int
	{
		return $this->id;
	}


	public function getTitre(): ?string
	{
		return $this->titre;
	}

	public function setTitre(?string $titre): self
	{
		$this->titre = $titre;

		return $this;
	}

	public function getResume(): ?string
	{
		return $this->resume;
	}

	public function setResume(string $resume): self
	{
		$this->resume = $resume;

		return $this;
	}

	public function getTemps(): ?string
	{
		return $this->temps;
	}

	public function setTemps(string $temps): self
	{
		$this->temps = $temps;

		return $this;
	}

	public function getPersonne(): ?int
	{
		return $this->personne;
	}

	public function setPersonne(int $personne): self
	{
		$this->personne = $personne;

		return $this;
	}

	public function getCreatedAt(): ?\DateTimeInterface
	{
		return $this->createdAt;
	}

	public function setCreatedAt(\DateTimeInterface $createdAt): self
	{
		$this->createdAt = $createdAt;

		return $this;
	}

	public function getPreparation(): ?string
	{
		return $this->preparation;
	}

	public function setPreparation(string $preparation): self
	{
		$this->preparation = $preparation;

		return $this;
	}
}
