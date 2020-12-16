<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>TP2 PHP, fichier principal</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    </head>
    <body>
        <h1> TP2 PHP, fichier principal </h1>
		
		<p><b> Exercice 1 :</b> récupération et affichage des données issues d’un formulaire <br/>
			La soumission du formulaire entraîne l'affichage du document de l'écran B. <br/>
			-> Ecrivez le fichier contenant le formulaire de l'écran A (avant saisie des données).</br>
			-> Ecrivez le fichier correspondant à l'écran B (avec adaptation aux données saisies).
		</p>
		<a href="formulaire1.php">exercice 1</a><br>
		
		<p><b> Exercice 1bis :</b> récupération et affichage des données par liens<br/>
			La soumission du formulaire de l'écran C entraîne 'affichagel du document de l'écran D.<br/>
			Ce fichier D comporte 2 liens. Un clic sur le premier lien affiche l'écran E. Un clic sur le second lien affiche<br/>
			l'écran F. (Vous passerez les informations dans l’URL en méthode get)<br/>
			-> Ecrivez les fichiers correspondant aux différents écrans.
		</p>
		<a href="formulaire2.php">exercice 1bis</a><br>
		
		<p><b> Exercice 2 :</b> Mise en oeuvre d’un test sur des nombre s <br/>
			-> Ecrivez le fichier correspondant à l'écran G.<br/>
			-> Ecrivez le fichier correspondant à l'écran H (quelle que soit la réponse OUI ou NON).
		</p>
		<a href="nombres.php">exercice 2</a><br/>
		
		<p><b> Exercice 3 :</b> générer un tableau en récupérant des données d’entrées par formulaire<br/>
			-> Ecrivez un formulaire qui demande un nombre de lignes L et une taille de bordure B.<br/>
			-> A la soumission, il génère une page comportant un tableau vide de L lignes (une seule colonne) avec une bordure de B pixels.<br/>
			-> Modifiez le script pour demander le nombre de colonnes C et générer un tableau de L lignes et C colonnes.
		</p>
		<a href="formulaire3.php">exercice 3</a><br/>
		
		<p><b>Exercice 4 :</b>
			-> Ecrivez un script affichant un formulaire demandant un nom et un mot de passe (qui n'apparaît pas à l'écran).<br/>
			-> A la soumission, il s'appelle lui-même et vérifie l’identité du visiteur par rapport à son identité écrite "en dur".<br/>
			Le visiteur peut taper indifféremment en majuscules ou en minuscules.<br/>
			Les espaces tapés en début ou en fin de mot de passe ou de nom seront éliminés avec une fonction trim().<br/>
			Si le visiteur n'est pas reconnu, seul le formulaire s'affiche. Si le visiteur est reconnu, seul un message d'accueil s'affiche.
		</p>
		<a href="formulaire4.php">exercice 4</a><br/>
		
		<p><b>Exercice 5 :</b> Création de liste d'options à partir d'un tableau.<br/>
			Créez une pagetp3form.php sur laquelle vous taperez les scripts suivants.<br/>
			- Tapez les balises html habituelles. La page comporte un formulaire de méthode get,<br/>
			dont l'action est l'accès au fichier tp3affiche.php.<br/>
			En utilisant des boucles :<br/>
			- Ecrivez en une liste déroulante de formulaire qui permet de choisir un jour (de 1 à 31).<br/>
			- Ecrivez en une liste déroulante de formulaire qui permet de choisir une année (de 1980 à 2005).<br/>
			- Ecrivez une liste déroulante de formulaire qui permet de choisir un mois.<br/>
			La valeur transmise correspond au nom du mois, tel qu'il est affiché dans la liste(exemple : Février).<br/>
			- Modifiez le script pour que la valeur transmise soit le nombre du mois (exemple : 2).<br/>
			- Ecrivez la page tp3affiche.php qui affiche (en s'adaptant au choix fait): La date choisie est le 3/5/1993.
		</p>
		<a href="pagetp3form.php">exercice 5</a><br/>
		
		<p><b>Exercice 6 :</b> Création de liste de bouton radio<br/>
			Complétez le fichiertp3form.php en écrivant les scripts suivants.<br/>
			Une liste de loisirs est enregistrée dans une variable de type tableau. Ecrivez le script qui :<br/>
			- génère la variable tableau.<br/>
			- affiche une liste de boutons radio, à partir du tableau.<br/>
			Complétez tp3affiche.php en écrivant le script qui affiche le loisir favori choisi, par exemple :<br/>
			Votre loisir favori est : Musique.<br/>
		</p>
		<a href="pagetp3form2.php">exercice 5</a><br/>
		
    </body>
</html>