<form method="POST" action="index.php?uc=GestionAdmin&action=AjouterJoueur">
    <fieldset>
               <legend>Ajouter un joueur</legend>
        <p>
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom" value="" size="10" >
        <p>
            <label for="prenom">Prenom :</label>
            <input id="prenom" type="text" name="prenom" value="" size="10" >
        </p>
            
        </p>
        <p>
            <!----On fais une liste déroulante des categories---->
            <label for="idcat">Categorie :</label>
            <select name='idcat'>
                <?php
                foreach( $LesCategories as $UnCategorie){
                    $idCat = $UnCategorie['idcat'];
                    $nomCat = $UnCategorie['nomcategories'];
                    echo "<option value=\"".$idCat."\">". $nomCat."</option>";
                }?>

            </select><br />
        </p>
        <p><!-----Liste deroulante des clubs---->
            <label for="idc">Club :</label>
            <select name='idc'>
            <?php
            foreach( $LesClubs as $unClub)
            {
            $idc = $unClub['idc'];
            $club = $unClub['nom'];
            echo "<option value=\"".$idc."\">". $club."</option>";
            }
            ?>
            </select><br />

        </p>
        <p>
            <input type="submit" value="Valider" name="valider">
            <input type="reset" value="Annuler" name="annuler">
        </p>
        </p>
    </fieldset>
</form>