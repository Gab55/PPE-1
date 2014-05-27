<form method="POST" action="index.php?uc=GestionAdmin&action=ModifierClub">

     <fieldset>
           <legend>Modification des informations du club</legend>

        <p>
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom" value="<?php echo $nom ?>" size="10" maxlength="10" style=" width: auto">
        <p>

        <p>
            <label for="ville">Ville :</label>
            <input id="ville" type="text" name="ville" value="<?php echo $ville ?>" size="10" maxlength="10">
        </p>

        <p>
            <label for="nomdirigeant">Nom du dirigeant :</label>
            <input id="nomdirigeant" type="text" name="nomdirigeant" value="<?php echo $nomdirigeant ?>" size="10" maxlength="10">
            <input id="club" type="hidden" name="club" value="<?php echo $idc ?>">
        </p>

        <p>
            <input type="submit" value="Valider" name="valider">
            
        </p>
    </p>
</p>
        
</form>