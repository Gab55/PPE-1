<fieldset>
	 <legend>Information du club</legend>

<?php
foreach( $LeClub as $unClub)
{
    $idc = $unClub['idc'];
    $club = $unClub['nom'];
    $ville = $unClub['ville'];
    $nomDirecteur = $unClub['nomDirecteur'];
?>

<h2>Fiche Club</h2>

<?php
    echo "<p>Nom du Club : " . $club;
    echo "<p>Ville du Club : " . $ville;
    echo "<p>Nom du directeur : " . $nomDirecteur;
    echo "<p><a href=index.php?uc=GestionAdmin&club=$idc&action=VoirJoueursDuClub></a></p>";
    echo "<a href=index.php?uc=GestionAdmin&action=ModifierClub&club=$idc> <input type='submit' id='trigger' value='Modifier' style='width: 200px'/></a>";
    echo "<a href=index.php?uc=GestionAdmin&action=SupprimerClub&idc=$idc onclick=\"return confirm('Voulez-vous vraiment supprimer ce Club?');\"> <input type='button' id='trigger' value='Supprimer' style='width: 200px' /></a>";
}
?>