<?php

echo 'Adresse :'.$_GET['adresse'].'<br/> Ville :'.$_GET['ville'].'<br/> Code Postal :'.$_GET['codePostal'];

/*
Ce que ne veut pas la prof mais qui est plus pratique :

session_start();
echo 'Adresse : '.$_SESSION['adresse'].'<br/>';
echo 'Ville : '.$_SESSION['ville'].'<br/>';
echo 'Code Postal : '.$_SESSION['codePostal'].'<br/>';
*/
?>
<br><a href="principal.php">back</a>