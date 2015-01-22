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
    }if ($idcat == 2) {
        echo "<p>Catégorie : - 18 ans</p>";
    }if ($idcat == 3) {
        echo "<p>Catégorie : Juniors</p>";
    }if ($idcat == 4) {
        echo "<p>Catégorie : Vétérans</p>";
    }if ($idcat == 5) {
        echo "<p>Catégorie : Poussins</p>";
    }   
    echo "<a href=index.php?uc=GestionAdmin&action=ModifierJoueur&idjoueur=$idj> <input type='submit' id='trigger' value='Modifier' width: 200px'/></a>";
        echo "<a href=index.php?uc=GestionAdmin&action=SupprimerJoueur&idj=$idj onclick=\"return confirm('Voulez-vous vraiment supprimer ce joueur?');\"> <input type='button' id='trigger' value='Supprimer' style='width: 200px' /></a>";
}
?>