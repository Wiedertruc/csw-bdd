<?php 

echo 'Prénom : '.$_GET['prenom'].'<br/>Nom : '.$_GET['nom'];

/*
Ce que ne veut pas la prof mais qui est plus pratique :

session_start();
echo 'Prénom : '.$_SESSION['prenom'].'<br/>';
echo 'Nom : '.$_SESSION['nom'].'<br/>';
*/
?>

<br><a href="principal.php">back</a>