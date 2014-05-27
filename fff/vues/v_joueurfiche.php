<?php
foreach( $LeJoueur as $unJoueur) // On recupere les infos du joueur dans une variable
{
    $idc = $unJoueur['idc'];
    $nom = $unJoueur['nom'];
    $prenom = $unJoueur['prenom'];
    $idcat = $unJoueur['idcat'];
    $idj = $unJoueur['idj'];
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
}
?>²