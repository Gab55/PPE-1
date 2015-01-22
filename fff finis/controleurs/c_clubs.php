<?php

$action = $_REQUEST['action'];
$lesClubs = $pdo->getLesClubs();


if($_SESSION['connection'] == TRUE){
	switch($action)
	{
		case 'voirClubs':
			include("vues/v_voirClubs.php");break;
			
		case 'voirJoueurs':
			include("vues/v_selectClub.php");break;
			
		case 'JoueurDuClub':
			if (isset($_REQUEST['idC'])){
				$lesJoueurs = $pdo->getLesJoueurs($_REQUEST['idC']);
				include("vues/v_voirJoueurs.php");
			}else{
				header("");
			}
			break;
			
		case 'suprClub':
			$lasuppression = $pdo->suprClub($_REQUEST['id']);
			include("vues/v_suprClub.php");
        break;

        case 'ajoutClubs':
			include("vues/v_ajoutClubs.php");
		break;
		
		case 'modifClub':
			include("vues/v_modifClub.php");
		break;
		
		case 'modificationC':
			$lamodification = $pdo->modifClub($_REQUEST['id'],$_REQUEST['nom'],$_REQUEST['adresse'],$_REQUEST['ville'],$_REQUEST['cp'],$_REQUEST['logo']);
			include("vues/v_modificationC.php");
			break;
			
		case 'suprJoueur':
			$lasuppressionJ = $pdo->suprJoueur($_REQUEST['id']);
			include("vues/v_suprJoueur.php");
		break;
		
		case 'modifJoueur':
			include("vues/v_modifierJ.php");
		break;
		
		case 'modificationJ':
			
			include("vues/v_modificationJ.php");
		break;

		case 'creationClub':
			$lacreationC = $pdo->ajoutClub($_REQUEST['id'],$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['club'],$_REQUEST['categorie'],$_REQUEST['datenaissance'],$_REQUEST['teljoueur'],$_REQUEST['mailjoueur'],$_REQUEST['Nlicencejoueur']);
			include("vues/v_creationClub.php");
		break;

		case 'creationJoueur':
			include("vues/v_ajoutJ.php");
		break;

		case 'JoueurCree':
			
		     $lacreationJ = $pdo->ajoutJoueur($_REQUEST['id'],$_REQUEST['nom'],$_REQUEST['prenom'],$_REQUEST['club'],$_REQUEST['categorie'],$_REQUEST['datenaissance'],$_REQUEST['teljoueur'],$_REQUEST['mailjoueur'],$_REQUEST['Nlicencejoueur']);
             $creationInscription = $pdo->ajoutInscription($_REQUEST['idC'],$_REQUEST['dateIns'],$_REQUEST['id']);
             include("vues/v_ajouterJ.php");
        break;
	}
}
else{
	
	include("vues/v_connexion.php");
}
?>