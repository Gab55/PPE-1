<?php
if (isset($_REQUEST['action'])){
	$action=$_REQUEST['action'];
	}
else{
	$action="connexion";
	}
	
//test connection

	switch ($action) {
	
		case "connexion": 
		{
			if($_SESSION['connection'] == FALSE){
			
				if (isset($_POST['ident']) && (isset($_POST['mdp']))) {
					$log=$_POST['ident'];
					$mdp=$_POST['mdp'];
					
					$resu = $pdo->testLogAdmin($log, $mdp);
						
					if ($resu[0] == 0){	
						header("Location: index.php?uc=accueil");
					}else{
						include("vues/v_modification.php");
						$_SESSION['connection'] = TRUE;
					}
				}
				else {
					include("vues/v_connexion.php");
				}
			}
			else {
					include("vues/v_modification.php");
				}
			break;
		}
		
	}







?>
