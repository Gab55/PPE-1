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


<?php
foreach( $LesCategories as $UnCategorie){ 
        $idCat = $UnCategorie['idcat'];
        $nomCat = $UnCategorie['nomcategories'];
        
}?>


</form>

<?php
foreach( $lesJoueurs as $leJoueur) 
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