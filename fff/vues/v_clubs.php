<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}
</style>

<fieldset>
	       <legend>Liste des clubs</legend>
<?php
foreach( $LesClubs as $unClub) 
{
    $idc = $unClub['idc'];
    $club = $unClub['nom'];
    $nomdirigeant = $unClub['nomdirigeant'];
    $ville = $unClub['ville'];
    ?>
    <center>
        <table border=1>  
        	<tr>
        	    <th>Nom du club</th>
        	    <th>Nom du directeur</th>
        	    <th>Ville du club</th>
            </tr>

            <tr>
            	 	
            			<td><center><a href=index.php?uc=GestionAdmin&club=<?php echo $idc ?>&action=FicheClub><?php echo $club ?></center></td>
                		<td><center><?php echo $nomdirigeant ?></center></td>
                		<td><center><?php echo $ville ?></center></td>       	
            </tr>

        </table>
    </center>   
<?php
}
?>
<a href=index.php?uc=GestionAdmin&action=AjouterClub><input type='button' id="trigger"value='Ajouter un Club' /></a>
