<?php

namespace App\Form;

use App\Entity\Recette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RecetteType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('titre', TextType::class, ["label" => "Nom de la recette", "attr" => ["placeholder" => "Nom de la recette"]])
			->add('preparation', TextareaType::class, ["label" => "Etapes de préparation", "attr" => ["placeholder" => "Etapes de préparation"], "attr" => ["rows" => 8]])
			->add('resume', TextType::class, ["label" => "Résumé de la recette", "attr" => ["placeholder" => "Résumé"]])
			->add('temps', TextType::class, ["label" => "Temps de la préparation", "attr" => ["placeholder" => "Temps de préparation"]])
			->add('personne')
			->add('createdAt');



		// ->add('personne', TextType::class, ["label" => "Nombre de personne", "attr" => ["placeholder" => "Nombre de personnes"]])
		// ->add('createdAt', TextType::class, ["label" => "Date de création de la recette", "attr" => ["placeholder" => "Date d'ajout de la recette"]]);
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Recette::class,
		]);
	}
}
