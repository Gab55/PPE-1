 <div id="style_AD" >
<form method="POST" action="index.php?uc=voirJoueurs&action=JoueurCree">
   <fieldset>
	    <p>
			<label for="id">id</label>
			<input id="id" type="text" name="id" value="" size="40" maxlength="45">
		</p> 


		<p>
			<label for="nom">nom</label>
			<input id="nom" type="text" name="nom" value="" size="40" maxlength="45">
		</p>
		<p>
			<label for="prenom">prenom</label>
			 <input id="prenom" type="text" name="prenom" value="" size="30" maxlength="45">
		</p>
		<p>
			<label for="club">club</label>
			<input id="club" type="text" name="club" value="" size="30" maxlength="45">
		</p>
			<label for="categorie">categorie</label>
			<input id="categorie" type="text" name="categorie" value="" size="40" maxlength="45">
		</p>
		<p>
			<label for="datenaissance">date naissance (AAAA-MM-JJ)</label>
			<input id="datenaissance" type="text" name="datenaissance" value="" size="30" maxlength="45">
		</p>
		<p>
			<label for="teljoueur">tel joueur</label>
			<input id="teljoueur" type="text" name="teljoueur" value="" size="30" maxlength="45">
		</p>
		<p>
			<label for="mailjoueur">mail joueur</label>
			<input id="mailjoueur" type="text" name="mailjoueur" value="" size="30" maxlength="45">
		</p>
		<p>
			<label for="Nlicencejoueur">Num licence joueur</label>
			<input id="Nlicencejoueur" type="text" name="Nlicencejoueur" value="" size="30" maxlength="45">
		</p>

        <p>
        inscrit dans le club :
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
		</p>
		<p>
			<label for="dateIns">date inscription</label>
			<input id="dateIns" type="text" name="dateIns" value="" size="30" maxlength="45">
		</p>
		<input type="submit" name="ajouter" value="ajouter">
</form>
</div>