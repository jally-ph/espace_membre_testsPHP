<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Créer un espace membre sans BDD</title>
</head>
<body>

	<h1><?php echo "Espace membre sans Base de donnée";?></h1>

<!--date-->
	<p>Nous sommes en <?php echo date('Y'); ?></p>
	<p>Nous sommes exactement le <?php echo date('d/m/Y'); ?></p>

<!--Cici et la chèvre-->
	<?php echo "Si Cici disait :\"Derrière la chèvre de Monsieur Seguin\" moi j'aurais dit: \"Derrière le chat de Madame Lincoln\" ";
	?>

	<p>
	<?php 
	$age_user=12;

	echo 'Sous les herbes grinçantes, le jeune homme n\'a que '. $age_user . ' ans';

	if($age_user <= 18)
		{ echo '<p> Salut gamin! </p>';}

	?>
	</p>

	<p>
	<?php
	$autorisation_entrer = true;

	if ($autorisation_entrer == true AND $age_user >= 19)
	{
	    echo "Bienvenue petit nouveau. :o)";
	}
	else
	{
	    echo "T'as pas le droit d'entrer !";
	}
	?>
	</p>

	<p>
	<?php

	//le switch ne marche pas avec les symboles: <, >, <=, >=, ==, !.
	$note=1;

	switch ($note) {
		case 10:
			echo "Ce n'est pas encore assez";
			break;

		case 9:
			echo 'Ce n\'est vraiment pas encore assez!';
			break;
		
		case 11:
			echo 'Bien, continue tes efforts!';
			break;

		default:
			echo 'Je ne sais pas quoi te dire, l\'ami!';
			break;
	}

	?>
	</p>

	<p>
		<?php
//les différentes boucles : while et for
		$repetition=1;

		while($repetition<=5)
			{ echo 'Tout est sous contrôle <br/>
		Ceci est la ligne n° ' .$repetition. ' . <br/>' ;
			$repetition++; //sert à ajouter 1 à la variable, jusqu'à parvenir au nombre indiquer
			}

		for($repet2=1; $repet2<=5; $repet2++)
			{ echo 'Rien n\'est encore joué <br/>';}

		?>
	</p>

	<p>
		<?php
//les tableaux (un array commence tjours par O!)
//1.Tableau numéroté
		$prenom = array('Rachel', 'Klark', 'Pedro', 'Ritchy', 'Morgane', 'Isa');

			echo $prenom[1];

//2.Tableau associatif
		$coordonnees = array(
			'prenom' => 'Lisette',
			'nom' => 'Pelsecque',
			'age' => 49,
			'pays' => 'Belgique',
			'adresse' => '4 rue de la Place Dorée');

		echo "<p> vous vous appelez ". $coordonnees['prenom']. " et vous avez ". $coordonnees['age']. " ans. </p>" ;

		foreach ($coordonnees as $nouveau) {
			echo $nouveau . '<br/>';
		}


//3.Chercher dans un tableau avec: array_key_exists, array_search, in_array		
		if(array_key_exists('email', $coordonnees))
			{ echo "<p> La clé existe </p>";}

		else
			{ echo "<p> La clé n'existe pas </p>";}



		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

		$position = array_search('Fraise', $fruits);
		echo '"Fraise" se trouve en position ' . $position . '<br />';
		?>

	</p>

</body>
</html>
