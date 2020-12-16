<html lang="fr">
	<head>
		<link rel="stylesheet" type="text/css" href="tableau.css" />
		<title> <?php echo 'Premiers pas en PHP test'; ?> </title>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	</head>
	<body>
		<?php
		//Tableau donné par l'exo6
		$personnes = array(
		'mdupond'=> array('prenom' => 'Martin', 'nom' => 'Dupond', 'age' => 25, 'ville' => 'Paris'),
		'jm'=> array('prenom' => 'Jean', 'nom' => 'Martin', 'age' => 20, 'ville' => 'Villetaneuse'),
		'toto'=> array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay'),
		'arn'=> array('prenom' => 'Arnaud', 'nom' => 'Dupond', 'age' => 33, 'ville' => 'Paris'),
		'email'=> array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
		'dask' => array('prenom'=>'Damien', 'nom'=>'Askier','age'=>7,'ville'=>'Villetaneuse')
		);
		
		/*
		*	Question 6.1 : Quelles sont les clés du tableau $personnes et leur type ? De quel type sont les
		*	valeurs de ce tableau ? Quelle est la valeur associée à 'toto' ?
		*	les clés sont :
		*	'mdupond', 'jm', 'toto', 'arn', 'email' et 'dask', elles sont de type string. les valeurs sont de type array.
		*
		* 	La valeur associée à 'toto' est : array('prenom' => 'Tom', 'nom' => 'Tonge', 'age' => 18, 'ville' => 'Epinay')
		*	
		*	Question 6.2 : Comment accéder à la valeur 33 dans le tableau ? À la valeur ’Epinay’ ? Au
		*	tableau contenant les valeurs ’Damien’, ’Askier’, 7, ’Villetaneuse’ ?
		*/
		
		// Acces ) la valeur 33 :
		$tabarn = $personnes['arn'];
		echo $tabarn['age'].'<br/>';
		
		// Acces à la valeur 'Epinay' :
		$tabtoto = $personnes['toto'];
		echo $tabtoto['ville'].'<br/>';
		
		// Acces au tableau contenant les valeurs ’Damien’, ’Askier’, 7, ’Villetaneuse’
		$tabdask = $personnes['dask'];
		echo '<pre>';
		print_r($tabdask);
		echo '</pre>';
		
		/*
		*	Question 6.3 : Écrire une fonction permettant d’afficher le tableau dans son ensemble. Ajouter
		*	une première ligne contenant les clés ’prenom’, ’nom’, ’age’ et ’ville’. Ajouter ensuite un
		*	fichier CSS afin d’obtenir le tableau donné par la figure 3.4.
		*/
		
		include ("Fonctions.php")
		
		echo afficherTableau($personnes);
		
		/*
		*	Question 6.4 : Écrire une fonction permettant d’afficher sous forme de tableau (en utilisant
		*	toujours le CSS), les informations des personnes habitant dans une ville donnée en paramètre.
		*	Par exemple, si la fonction est appelée avec le tableau $personnes défini précédemment et la ville
		*	’Epinay’, le tableau affiché doit alors contenir uniquement la ligne relative à toto.
		*/
		
		function afficherTableauAvecVille($tab,$ville){
			if($ville)
		}
		
		?>
	
	</body>
	
</html>