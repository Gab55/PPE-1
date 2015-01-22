
<?php

foreach( $lesJoueurs as $unJoueur) 
	{
		$IdJoueur=$unJoueur['IDjoueur'];
		$NomJoueur=$unJoueur['nom'];
		$prenomJoueur=$unJoueur['prenom'];
		$catégorieJoueur=$unJoueur['categorie'];
		$dateNaissanceJoueur=$unJoueur['datenaissance'];
		$telJoueur=$unJoueur['teljoueur'];
		$mailJoueur=$unJoueur['mailjoueur'];
		$NumlicenceJoueur=$unJoueur['Nlicencejoueur'];
		
		?>	
		 
				<form method="POST" name="<?php echo $IdJoueur;?>" action="index.php?uc=voirJoueurs&action=suprJoueur">	
						<?php echo $NomJoueur; ?>
				        </br>
						<?php echo $prenomJoueur ?>
						</br>
						<?php echo $catégorieJoueur ?>
						</br>
						<?php echo $dateNaissanceJoueur ?>
						</br>
						<?php echo $telJoueur ?>
						</br>
						<?php echo $mailJoueur ?>
						</br>
						<?php echo $NumlicenceJoueur ?>	
					</br>
					<input type="hidden" name="id" value="<?php echo $IdJoueur;?>"/>
					<input type="submit" value="supprimer"/>
				</form>
					
				
				<form method="POST" name="<?php echo $IdJoueur;?>" action="index.php?uc=voirJoueurs&action=modifJoueur">
					<input type="hidden" name="id" value="<?php echo $IdJoueur;?>"/>
					<input type="submit" value="modifier"/>
				</form>
		</br>

	<?php	
	}
?>
