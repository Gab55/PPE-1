<?php

foreach( $LeJoueur as $unJoueur)
{
    $idj = $unJoueur['idj'];
    $idc = $unJoueur['idc'];
    $nom = $unJoueur['nom'];
    $prenom = $unJoueur['prenom'];
    $idcat = $unJoueur['idcat'];
    
    ?>

    <h2>Fiche du Joueur</h2>

    <?php
    echo "<p>Nom du Joueur : " . $nom."</p>";
    echo "<p>Prénom du joueur : " . $prenom."</p>";
    if ($idcat == 1)
    {
        echo "<p>Catégorie : Seniors</p>";
    }else{
        echo "<p>Catégorie : -18ans</p>";
    }
    echo "<a href=index.php?uc=GestionAdmin&action=ModifierJoueur&idjoueur=$idj> <input type='submit' id='trigger' value='Modifier' width: 200px'/></a>";
        echo "<a href=index.php?uc=GestionAdmin&action=SupprimerJoueur&idj=$idj onclick=\"return confirm('Voulez-vous vraiment supprimer ce joueur?');\"> <input type='button' id='trigger' value='Supprimer' style='width: 200px' /></a>";
}
?>