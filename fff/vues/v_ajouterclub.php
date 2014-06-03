<form method="POST" action="index.php?uc=GestionAdmin&action=AjouterClub">
<fieldset>
           <legend>Ajouter un club</legend>
    <p>
    
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom" value="" size="10" >
    
    </p>
    
    <p>
    
        <label for="ville">Ville :</label>
        <input id="ville" type="text" name="ville" value="" size="10" >
    
    </p>
    
    <p>
    
        <label for="nomdirigeant">Nom du directeur :</label>
        <input id="nomdirigeant" type="text" name="nomDirecteur" value="" size="10" >
    
    </p>

    
    <p>
    
        <input type="submit" value="Valider" name="valider">
        <input type="reset" value="Annuler" name="annuler">
    
    </p>
    
</fieldset>
</form>
