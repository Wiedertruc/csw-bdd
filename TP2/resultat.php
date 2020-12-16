<h1>Résultat du test</h1>

<?php

function entreXetY($n,$x,$y){
	$res="";
	if (($n>$x)&&($n<$y))
		{ return $res='Oui'; }
	else if (($n>$y)&&($n<$x))
		{ return $res='Oui'; }
	else
		{ return $res='Non'; }
}

$n=$_GET['n'];
$x=$_GET['x'];
$y=$_GET['y'];
echo '<p>'.$n.' est-il compris entre '.$x.' et '.$y.' ?</p>';
$res = entreXetY($n,$x,$y);

echo $res;
?>

<a href="principal.php">back</a>