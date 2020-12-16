<?php
function afficherTableau($tab){
			//nom des colonnes
			echo '<table><tr class="lignePremiere"><th>prenom</th><th>nom</th><th>age</th><th>ville</th></tr>';
			$cte=0; // constante pour mettre toutes les 2 lignes 1 couleur diff
			foreach($tab as $personne){
				echo '<tr>';
				
				foreach($personne as $fiche){
					if ($cte%2==0) {
						echo '<td class="lignePair"> '.$fiche.' </td>';
					}
					else {
						echo '<td class="ligneImpair"> '.$fiche.' </td>';
					}
				}
				$cte++;
				echo '</tr>';
			}
			echo '</table>';
		}//fin fonction
?>