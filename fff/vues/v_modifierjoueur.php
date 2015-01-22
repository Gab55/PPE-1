
<?php
foreach( $unJoueur as $leJoueur)
{
    $idj = $leJoueur['idj'];
    $nom = $leJoueur['nom'];
    $prenom = $leJoueur['prenom'];
    $idcat = $leJoueur['idcat']
    ?>

<form method="POST" action="index.php?uc=GestionAdmin&action=ModifierJoueur">
    <fieldset>
               <legend>Mofication des information du joueur</legend>
        <p>
            <label for="nom">Nom :</label>
            <input id="nom" type="text" name="nom" value=<?php echo $nom ?> size="10" maxlength="10" style=" width: auto">
        <p>
            <label for="prenom">Prenom :</label>
            <input id="prenom" type="text" name="prenom" value= <?php echo $prenom ?> size="10" maxlength="10">
        </p>
 
        <p>

            <label for="idcat">Categorie :</label>
            <select name='idcat'>
                <?php
                foreach( $LesCategories as $UnCategorie){
                    $idCat = $UnCategorie['idcat'];
                    $nomCat = $UnCategorie['nomcategories'];
                    echo "<option";
                    if ($oldidcat == $idCat){
                        echo " selected=\"selected\"";
                    }
                    echo " value=\"".$idCat."\">". $nomCat."</option>";
                }?>

            </select><br />
        </p>
        <p>
            <label for="idc">Club :</label>
            <select name='idc'>
                <?php
                foreach( $LesClubs as $unClub)
                {
                    $idc = $unClub['idc'];
                    $club = $unClub['nom'];
                    echo "<option";
                    if ($idc == $oldidc){
                        echo " selected=\"selected\"";
                    }
                    echo " value=\"".$idc."\">". $club."</option>";
                }

                ?>
            </select><br />
            <input id="idjoueur" type="hidden" name="idjoueur" value="<?php echo $idj ?>">
        </p>
        <p>
            <input type="submit" value="Valider" name="valider">
            <input type="reset" value="Annuler" name="annuler">
        </p>
        </p>
    </fieldset>
</form>
<?php
}
?>