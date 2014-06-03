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
	       <legend>Liste des clubs</legend>
<?php

foreach($LesClubs as $unClub) 
{
    $idc = $unClub['idc'];
    $club = $unClub['nom'];
    $nomDirecteur = $unClub['nomDirecteur'];
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
            	 	
            			<td><center><a href=index.php?uc=GestionAdmin&club=<?php echo $idc ?>&action=FicheClub><?php echo $club ?> <span> Cliquer ici pour modifier ou supprimer</span>   </a></center></td>
                		<td><center><?php echo $nomDirecteur ?></center></td>
                		<td><center><?php echo $ville ?></center></td>       	
            </tr>

        </table>
    </center>   
<?php
}
?>

<a href=index.php?uc=GestionAdmin&action=AjouterClub><input type='button' id="trigger"value='Ajouter un Club' /></a>
