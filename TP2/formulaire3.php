<h1>Combien de colonnes et de lignes souhaitez vous integrer dans votre tableau ?</h1>

<form method="get" action="tableauexo3.php">
	<table align="center">
		<tr> 
			<td align="right" width="100"> Nombre de lignes </td>
			<td width="200"><input type="text" name="L" value="" size="4"/></td>
		</tr>
		<tr> 
			<td align="right" width="100"> Nombre de colonnes </td>
			<td width="200"><input type="text" name="C" value="" size="4"/></td>
		</tr>
				<tr> 
			<td align="right" width="100"> Epaisseur de bordure </td>
			<td width="200"><input type="text" name="B" value="" size="4"/></td>
		</tr>
		<tr> 
			<td align="right" width="200"><button type="submit" name="table"><em>Créer tableau</em></button></td>
		</tr>
	</table>
</form>