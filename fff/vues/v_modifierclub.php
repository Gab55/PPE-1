<form method="POST" action="index.php?uc=GestionAdmin&action=ModifierClub">
<?php
foreach($LeClub as $unClub) 
{
    $idc = $unClub['idc'];
    $club = $unClub['nom'];
    $nomdirigeant = $unClub['nomdirigeant'];
    $ville = $unClub['ville'];
    
    ?>





    <fieldset>

           <legend>Modification des informations du club</legend>

        <p>
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom"  size="10" maxlength="10" style=" width: auto">
        <p>

        <p>
            <label for="ville">Ville :</label>
            <input id="ville" type="text" name="ville"  size="10" maxlength="10">
        </p>

        <p>
            <label for="nomdirigeant">Nom du directeur :</label>
            <input id="nomdirigeant" type="text" name="nomDirecteur" size="10" maxlength="10">
           
        </p>

<p>
 <input id="club" type="hidden" value=<?php echo $idc ?>; name="club">
 </p>


        <p>
            <input type="submit" id='trigger' value="Valider" name="valider">
            
        </p>
    </p>
</p>
        
</form>
<?php
}
?>
  </fieldset>