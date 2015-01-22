 <div id="style_AD" >
<form method="POST" action="index.php?uc=administrer&action=JoueurEquipe">
	
		veuillez selectionner l'equipe de votre joueur :
		<select>
			<?php
				foreach( $lesClubs as $unClub)
					{
					$idClub=$unClub['idclub'];
					$NomClub=$unClub['nomclub'];
					
						?> <OPTION value="<?php echo $idClub; ?>"> <?php echo $NomClub; ?> </OPTION>
					<?php
					}
					?>
		</select> 
		<br />
		<input type="submit" value="Valider" name="valider">
	
</form>
</div>