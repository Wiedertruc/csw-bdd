<?php

function creerTable($line,$col,$ebordure){
	echo '<table border="border" cellspacing="'.$ebordure.'">';
	//echo '<table border="'.$ebordure.'" cellspacing="0">';
	for($l=0; $l<$line;$l++){
		echo '<tr height="100">';
		for($c=0; $c<$col; $c++){
			echo '<td width="300" align="center"></td>';
		} //fin for colonnes
		echo '</tr>';
	} // fin for lignes
	echo '</table>';
} // fin creerTable

$L=$_GET['L'];
$C=$_GET['C'];
$B=$_GET['B'];

creerTable($L,$C,$B);
?>

<br><a href="principal.php">back</a>