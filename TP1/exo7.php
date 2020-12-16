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

/* Exercice n7 : 

Question 7.1 : Appeler une page PHP en passant dans l’url un paramètre de nom pseudo et
ayant pour valeur un des pseudonymes du tableau $personnes. Faire en sorte que la page affiche
le pseudo et les informations associées contenues dans le tableau $personnes. Améliorer le script
pour que ce dernier affiche Désolé, votre pseudonyme n’apparaît pas dans la liste si le
pseudonyme n’est pas une clé du tableau $personnes.

Question 7.2 : Créer un formulaire permettant à l’utilisateur de saisir le pseudonyme à rechercher
afin de faciliter la saisie pour l’utilisateur. Mettre ensuite directement le formulaire dans le script
PHP créé précédemment afin de pouvoir effectuer facilement plusieurs recherches. Faire en sorte
que le champ de saisie du pseudonyme contienne la dernière valeur saisie.

*/

echo '<form action="exo7.php" method="get" >
<input type="text" name="pseudo" size="48" />
</form>';

$pseudo = $_GET['pseudo'];

//include('Fonctions.php');

function lequel($tabPersonnes,$pseudo) {
	$exist = false;
	foreach($tabPersonnes as $key => $values){
		if ($key == $pseudo)
			{ 	$exist = true;
				$val = $key;
				break; }
		else 
			{ $exist = false; }
	}
	if ($exist==true){
		//afficherTableau($tabPersonnes[$val]);
		
		echo '<pre>';
		print_r($tabPersonnes[$val]);
		echo '</pre>';
	}
	else
		{ echo 'Cette personne n\'existe pas dans nos fichiers'; }
} // Fin lequel

lequel($personnes,$pseudo);

?>