<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Repository\RecetteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;



class HomeController extends AbstractController
{

	/**
	 * @Route("/", name="home_index")
	 */
	public function index(RecetteRepository $recetteRepository)
	{
		$recettes = $recetteRepository->findAll();
		return $this->render('home/index.html.twig', [
			'recettes' => $recettes
		]);
	}
}
