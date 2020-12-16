<?php

/*
*	Exercice n°5
*
*	Créer un tableau ayant pour valeur les noms des douze mois de l’année. Quelles sont alors les
*	clés ? Parcourir ensuite le tableau pour afficher les mois de l’année sous forme de liste ordonnée.
*	Créer un tableau associant à chaque mois de l’année le nombre de jours du mois. (On supposera
*	que l’année n’est pas bissextile.) Quelles sont alors les clés ? Les valeurs ? Afficher, sous forme de
*	tableau, le nombre de jours de chaque mois.
*/

$tabMoisEtJours=[
	["janvier",31],
	["février",28],
	["mars",31],
	["avril",30],
	["mai",31],
	["juin",30],
	["juillet",31],
	["août",31],
	["septembre",30],
	["octobre",31],
	["novembre",30],
	["décembre",31]
	];
	
echo "<b> Les mois de l'année : </b>";
echo '<ol>';
foreach($tabMoisEtJours as $cle => $valeur)
    echo '<li>'.$valeur[0].'</li>';
echo '</ol>';

echo '<table border="1" cellspacing="0">';
echo '<tr align="middle"><td><b>Mois</b></td><td><b>Nombre de jours</b></td></tr>';
foreach($tabMoisEtJours as $cle => $valeur)
    echo '<tr align="middle"><td>'.$valeur[0].'</td><td>'.$valeur[1].'</td></tr>';
echo '</table>';
?>