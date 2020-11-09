<?php

namespace App\Controller\Admin;

use App\Entity\Recette;
use App\Repository\RecetteRepository;
use App\Form\RecetteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRecetteController extends AbstractController
{
	private EntityManagerInterface $em;
	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}
	/**
	 * @Route("/admin", name="admin_index")
	 */
	public function index(RecetteRepository $recetteRepository): Response
	{
		$recettes = $recetteRepository->findAll();
		return $this->render('Admin/index.html.twig', [
			'recettes' => $recettes
		]);
	}

	/**
	 * @Route("/admin/create", name="admin_create")
	 */
	public function create(Request $request)
	{
		$recette = new Recette();

		//$recette->setCreatedAt(new DateTime());

		$form = $this->createForm(RecetteType::class, $recette);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$this->em->persist($recette);
			$this->em->flush();
			$this->redirectToRoute('admin_index', [], 301);
		}
		return $this->render('Admin/create.html.twig', [
			'formRecette' => $form->createView()
		]);
	}
}
