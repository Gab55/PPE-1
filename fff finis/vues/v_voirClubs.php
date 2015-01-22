<?php

foreach( $lesClubs as $unClub) 
	{
		$IDclub=$unClub['IDclub'];
		$NomClub=$unClub['nomclub'];
		$AdresseClub=$unClub['adresseclub'];
		$VilleClub=$unClub['villeclub'];
		$CpClub=$unClub['cpclub'];
		$LogoClub=$unClub['logoclub'];
		//formulaire suppression et modification
		?>	
		   <div id="style_AD" >

			<center>
				<a href="index.php?uc=voirClubs&action=ajoutClubs">ajouter un club</a>
				<form method="POST" name="FRM<?php echo $IDclub;?>" action="index.php?uc=voirClubs&action=suprClub">
					
					<table>
						<tr>
							<INPUT type="hidden" name ="id" value="<?php echo $IDclub;?>"/>
							<td><img src="<?php echo $LogoClub ?>" alt=image width="50px" height="50px" /></td></tr>
							<tr><td><?php echo "Le nom club est :" .$NomClub ?></td></tr>
							<tr><td><?php echo "Adresse :".$AdresseClub ?></td></tr>
							<tr><td><?php echo "Dans la ville de :".$VilleClub ?></td></tr>
							<tr><td><?php echo "le code postal est :".$CpClub ?></td></tr>
					</table>
					
					<a href="index.php?uc=voirClubs&action=suprClub" onclick="return confirm('Voulez-vous vraiment supprimer ce produit ?')";>
					<input type="submit" value="supprimer"/></a>
					
				</form>	
				
				<form method="POST" name="FRM<?php echo $IDclub;?>" action="index.php?uc=voirClubs&action=modifClub">
					<INPUT type="hidden" name ="id" value="<?php echo $IDclub;?>"/>
					<a href="index.php?uc=voirClubs&action=modifClub" onclick="return confirm('Voulez-vous vraiment modifier ce produit ?')";>
					<input type="submit" value="modifier"/></a>
				</form>
			</center>
		<br />	
	</div>
				
<?php			
	}
?>