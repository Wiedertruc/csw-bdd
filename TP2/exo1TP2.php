<?php 

echo 'Bonjour '.$_GET['prenom'].' <b>'.$_GET['nom'].'</b>. <br/>
	Nous avons bien noté que vous habitez <br/>'.$_GET['adresse'].' à <b>'.$_GET['ville'].'</b> ('.$_GET['codePostal'].').';
//pouet
?>
<br><a href="principal.php">back</a>