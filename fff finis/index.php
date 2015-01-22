<?php
header ("Cache-control:no-cache, must revalidate");
session_start();
//unset($_SESSION['produits'][6]);

//session_destroy();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoFFF.inc.php");
include("vues/v_bandeau.php");
include("vues/v_menu.php");
//$_SESSION['connection'];
if(isset($_SESSION['connection'])){
	
}
else{
	$_SESSION['connection']=false;
}

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];

$pdo = PdoFFF::getPdoFFF();	 
switch($uc)
{
	case 'accueil':
		{include("controleurs/c_gestion.php");break;}
		
	case 'voirClubs':
		{include("controleurs/c_clubs.php");break;}	
		
	case 'voirJoueurs':
		{include("controleurs/c_clubs.php");break;}	
		
	case 'administrer':
		{include("controleurs/c_gestion.php");break;}
}
include("vues/v_pied.php") ;
?>