<form method="POST" action="index.php?uc=GestionAdmin&action=Rechercher">
<select name='idcat'>
<?php
foreach( $LesCategories as $UnCategorie){ // Fais une liste deroulante des categories pour la recherche
        $idCat = $UnCategorie['idcat'];
        $nomCat = $UnCategorie['nomcategories'];
        echo "<option value=\"".$idCat."\">". $nomCat."</option>";
}?>
</select>
<input type="submit" value="valider" name="valider"><br />
</form>
<a href=index.php?uc=GestionAdmin&action=AjouterJoueur><input type='button' value='Ajouter un joueur' style='width: 200px'/></a>
<?php
foreach( $lesJoueurs as $leJoueur) // Affiche la liste des joueurs
{
    $idj = $leJoueur['idj'];
    $Njoueur = $leJoueur['nom'];
    $Pjoueur = $leJoueur['prenom'];
    ?>
       <center>
                <table border=1>
            <tr>
                <th>Nom Joueur</th>
                <th>Prémon Joueur</th>
                <th>Catégorie</th>
                
            </tr>

            <tr>
                <td><a href=index.php?uc=GestionAdmin&idjoueur=<?php echo $idj ?>&action=FicheJoueur><?php echo $Njoueur?></a></td>
                <td><?php echo $Pjoueur ?></td>
                <td><?php echo $idcat ?></td>
                

            </tr>


        
        </table>
    </center>
    
<?php
}
?>