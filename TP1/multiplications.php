<?php

//fonction pour la couleur des colonnes
function cellColor($lin, $col) {
        if ($lin == 1) {return '#009FA3';}
        elseif ($col == 1) {return '#009FA3';}
        elseif ($lin % 2 == 0) {return '#CFF7EE';}
        else {return '#B0F2F3';}
	}

//fonction pour ce qu'on va mettre dans les cases
function cellContent($lin, $col) {
		//Première ligne du tableau
		if ($lin==1) {
			//première case de la première ligne est vide
			if ($col==1) {return '';}
			//le reste est rempli avec le nom des colonnes
			else {return '<b>'.$col.'</b>';}
		}
		else {
			//première colonne remplie avec le nom des linges
			if ($col==1) {return '<b>'.$lin.'</b>';}
			//les autres cases sont remplies selon la multiplication de leur nom de colonne avec leur nom de ligne
			else {return $col*$lin;}
		}
	}

//Le main : création du tableau
echo '<table border="1" bordercolor="#00000000" cellspacing="0">';
//les lignes :
for ($lin = 1; $lin <= 9; $lin++) {
	echo '<tr height="30">';
	//les colonnes :
	for ($col=1;$col<=9;$col++){
		echo '<td valign="center" align="middle" width="30" bgcolor="'.cellColor($lin,$col).'">'.cellContent($lin,$col).'</td>';
	}
	echo '</tr>';
};