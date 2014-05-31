<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}

a{ 
   color:red; 
   text-shadow:0 -1px 0 black; 
}

a:hover,a:focus{ 
    background:rgba(0,0,0,.4); 
    box-shadow:0 1px 0 rgba(255,255,255,.4); 
}
a span{ 
    position:absolute; 
    margin-top:23px;
    margin-left:-35px;
    color:#09c; background:rgba(0,0,0,.9);
    padding:15px; border-radius:3px; 
    box-shadow:0 0 2px rgba(0,0,0,.5);
    box-shadow:0 0 2px rgba(0,0,0,.5);
    transition:all .25s;
    opacity:0;

}
a:hover span, a:focus span{ 
    transform:scale(1) rotate(0); 
    opacity:1;
}

</style>



<fieldset>

    <legend>Joueurs en liste </legend>

<form method="POST" action="index.php?uc=GestionAdmin&action=Rechercher">
<select name='idcat'>

<?php
foreach( $LesCategories as $UnCategorie){ // Fais une liste deroulante des categories pour la recherche
        $idCat = $UnCategorie['idcat'];
        $nomCat = $UnCategorie['nomcategories'];
        echo "<option value=\"".$idCat."\">". $nomCat."</option>";
}?>
</select>

<input type="submit" id="trigger2" value="valider" name="valider" style="margin-bottom: 5px; margin-top: 10px; width: 95px; height: 40px;" ><br />
</form>

<?php
foreach( $lesJoueurs as $leJoueur) // Affiche la liste des joueurs
{
    $idj = $leJoueur['idj'];
    $Njoueur = $leJoueur['nom'];
    $Pjoueur = $leJoueur['prenom'];
    $idcat = $leJoueur['idcat']
    ?>
       <center>
                <table border=1>
            <tr>
                <th>Nom Joueur</th>
                <th>Prémon Joueur</th>
                <th>Catégorie</th>
                
            </tr>

            <tr>
                <td><a href=index.php?uc=GestionAdmin&idjoueur=<?php echo $idj ?>&action=FicheJoueur><?php echo $Njoueur?><span>Cliquer ici pour modifier ou supprimer</span></a></td>
                <td><?php echo $Pjoueur ?></td>
                <td><?php echo $idcat ?></td>
                

            </tr>


        
        </table>
    </center>
    
<?php
}
?>
     <br>
     <br>
     <br>

    <a href=index.php?uc=GestionAdmin&action=AjouterJoueur><input type='button' id="trigger" value='Ajouter un joueur' style='width: 200px; margin-top: 20px;'/></a>