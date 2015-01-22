 <div id="style_AD" >
<a href="index.php?uc=voirJoueurs&action=creationJoueur">ajouter un Joueur</a>
<form method="POST" action="index.php?uc=voirJoueurs&action=JoueurDuClub">
	<center>
		veuillez selectionner l'equipe de votre joueur :

		<select name="idC">
			<?php
				foreach( $lesClubs as $unClub)
					{
					echo var_dump($unClub);
					$idClub=$unClub['IDclub'];
					$NomClub=$unClub['nomclub'];
					
						?> <OPTION value="<?php echo $idClub; ?>"> <?php echo $NomClub; ?> </OPTION>
					<?php
					}
					?>
		</select> 
		<br />
		<input type="submit" value="Valider" name="valider">
	</center>
</form>
 </div>