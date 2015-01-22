<div id="style_AD" >
 <div id="login_admin" align="center">
<form method="POST" action="index.php?uc=administrer&action=connexion">
   <fieldset>
   	<center>
     <legend>Connexion utilisateur</legend>
		<p>
			<label for="ident">LOGIN</label>
			<input id="ident" type="text" name="ident" value="<?php echo "Votre login" ?>" size="30" maxlength="45">
		</p>
		<p>
			<label for="pass">MOT DE PASSE</label>
			 <input id="mdp" type="password" name="mdp" value="" size="30" maxlength="45">
		</p>
		
	  	<p>
         <input type="submit" value="Valider" name="valider">
         <input type="reset" value="Annuler" name="annuler"> 
      </p>
    </center>
	  </fieldset>
</form>
 </div>
</div>
