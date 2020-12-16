<!-- Ce que veut la prof : on fait passer les données par l'url -->

<p>Consultation de : <br/>
- <a href="recupEtatCivil.php?prenom=<?php echo $_GET['prenom'];?>&amp;
							nom=<?php echo $_GET['nom'];?>">votre etat civil</a><br/>
- <a href="recupAdresse.php?adresse=<?php echo $_GET['adresse'];?>&amp;
							ville=<?php echo $_GET['ville'];?>&amp;
							codePostal=<?php echo $_GET['codePostal'];?>">votre adresse</a><br>
</p>

<?php
/*
Ce que ne veut pas la prof mais qui est plus pratique :
On ouvre une session pour garder les valeurs (qu'on ouvrira également dans le fichier cible pour les récuperer)

session_start();
$_SESSION['prenom']=$_GET['prenom'];
$_SESSION['nom']=$_GET['nom'];
$_SESSION['adresse']=$_GET['adresse'];
$_SESSION['ville']=$_GET['ville'];
$_SESSION['codePostal']=$_GET['codePostal'];

?>

<p>Consultation de : <br/>
- <a href="recupEtatCivil.php">votre etat civil</a><br/>
- <a href="recupAdresse.php">votre adresse</a><br>
</p>
*/
?>