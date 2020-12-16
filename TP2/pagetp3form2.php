<html lang="fr">
	<head>
		<title>TP PHP 4 - Ex5 - Dates</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<p>Veuillez choisir une date</p>
		<form method="get" action="tp3affiche2.php">
			<select name="jour" size="1">
				<?php for($i=1;$i<32;$i++){
					echo '<option value="'.$i.'">'.$i.'</option>';
				}?>
			</select>
			<select name="mois" size="1">
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
			</select>
			<select name="annee" size="1">
				<?php for($i=1980;$i<2006;$i++){
					echo '<option value="'.$i.'">'.$i.'</option>';
				}?>
			</select>
			<table border="1" bgcolor="red" cellspacing="0" rules="none">
				<tr>
					<td colspan="2"><p>Quel est votre loisir favoris ?</p></td>
				</tr>
				<tr></tr>
				<tr>
					<label><td><input type="radio" name="sports" value="0"/>Sports</td></label>
				</tr>
				<tr>
					<label><td><input type="radio" name="musique" value="1"/>Musique</td></label>
				</tr>
				<tr>
					<label><td><input type="radio" name="jeux" value="2"/>Jeux</td></label>
				</tr>
				<tr>
					<label><td><input type="radio" name="voyages" value="3"/>Voyages</td></label>
				</tr>
			</table>
			<p><br><input type="submit" value="Choisir"></p>
		</form>
	</body>
</html>