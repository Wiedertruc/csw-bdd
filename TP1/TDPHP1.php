<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title> <?php echo 'Premiers pas en PHP test'; ?> </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    </head>
    <body>
        <h1> Mes premiers pas en PHP </h1>
        <?php $temps=2; echo '<p> Je débute depuis ' , $temps , ' heures... </p>'; ?>
        <p> Mais cela a l'air intéressant <?php echo '!' ?> </p>
        <?php echo '
            <h2> Vive le PHP </h2>
            <p> Les pages vont pouvoir être dynamiques! </p>'; 
        ?>
        <p> Encore quelques paragraphes </p>
        <?php    echo '<p> Avant dernier paragraphe </p>'; ?>
        <p> Voilà, c'est terminé! </p><br>
		<a href="carres.php">Carrés</a><br>
		<a href="multiplications.php">Multiplications</a><br>
		<a href="exo5.php">Mois de l'année</a><br>
		<a href="exo6.php">Tableau de personnes</a><br>
		
    </body>
</html>

<!-- Exo n1
Question 1 : . Donner dans ce fichier les parties correspondant à du code PHP et à du code XHTML.

Commence à la ligne 10, 11 et 12 par <?php, fini à la ligne 10, 11 et 15 par ?>

Question 2 : Si ce fichier s’appelle exo1.php, et s’il est stocké sur le site Web www.exemple.org dans le
répertoire PremierTP, comment "exécuter" ce fichier ? Que donne son exécution ? Ceci est-il
valide ? Pourquoi ? Corriger alors le problème.

http://www.exemple.org/PremierTP/exo1.php

Revoir pourquoi il était pas correcte

Exo n2

<?php include ('nomfichier.php'); ?>
Pour que ce soit plus clair !
-->

