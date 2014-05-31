<?php
if (isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
} else {
    $action = 'connexion';
}
if (!isset($_SESSION['admin'])){
    $action = 'connexion';
}
switch($action){
    case 'connexion':
    {
        if(isset($_POST['login']) && (isset($_POST['pass']))){
            $log = $_POST['login'];
            $mdp = $_POST['pass'];

            $resu = $pdo->testLogAdmin($log, $mdp);

            if($resu[0] == 0){
                header("Location: /fff/index.php?uc=GestionAdmin&action=connexion");
            }else{
                $_SESSION['admin']=1;
                header("Location: /fff/index.php?uc=accueil");
            }
        }else{
            include("vues/v_connexion.php");
        }
        break;
    }
    case 'deconnexion':
    {
        session_destroy();
        header("Location: /fff/index.php?uc=GestionAdmin&action=connexion");
        break;
    }
    case 'VoirClubs':
    {
        $LesClubs = $pdo->getLesClubs();
        include("vues/v_clubs.php");
        break;
    }
    case 'VoirJoueurs':
    {
         $lesJoueurs = $pdo->getLesJoueurs();
         $LesCategories = $pdo->getLesCategories();
         include ("vues/v_joueurs.php");
        break;
    }
    case 'Rechercher':
    {
        $idcat = $_REQUEST['idcat'];
        $lesJoueurs = $pdo->resultRecherche($idcat);
        $LesCategories = $pdo->getLesCategories();
        include ("vues/v_joueurs.php");
        break;
    }
    case 'VoirJoueursDuClub':
    {
        $idc = $_REQUEST['club'];
        $lesJoueurs = $pdo->getLesJoueursDeClub($idc);
        $LesCategories = $pdo->getLesCategories();
        include("vues/v_joueurs.php");
        break;
    }
    case 'AjouterClub':
    {
        if(isset($_REQUEST['nom']) && (isset($_REQUEST['ville']) && (isset($_REQUEST['nomdirigeant']) ))){
            $nom = $_REQUEST['nom'];
            $ville = $_REQUEST['ville'];
            $nomdirigeant = $_REQUEST['nomdirigeant'];
            $pdo->ajouterclub ($nom, $ville, $nomdirigeant);
            $LesClubs = $pdo->getLesClubs();
            include("vues/v_clubs.php");
        }else{
            include ("vues/v_ajouterclub.php");
        }
        break;
    }
    case 'ModifierClub':
    {
        var_dump($_REQUEST);

        if(isset($_REQUEST['valider'])){
            $idc = $_REQUEST['club'];
            $nom = $_REQUEST['nom'];
            $ville = $_REQUEST['ville'];
            $nomdirigeant = $_REQUEST['nomdirigeant'];
            $pdo->modifierclub ($idc, $nom, $ville, $nomdirigeant);
            echo "SALOOOOOOOOOOOOOOOOOOOOOOOO";
              $LeClub = $pdo->getFicheClub ($idc);
            include ("vues/v_clubfiche.php");
        }else{
            $idc = $_REQUEST['club'];
            $LeClub = $pdo->getFicheClub ($idc);
            include("vues/v_modifierclub.php");
        }
        break;
    }
   case 'SupprimerClub' :
   {
       $idc = $_REQUEST['idc'];
       $pdo->SupprimerClub($idc);
       $LesClubs = $pdo->getLesClubs();
       include ("vues/v_clubs.php");
       break;
   }

   case 'AjouterJoueur':
   {
       if(isset($_REQUEST['nom']) && (isset($_REQUEST['prenom']) && (isset($_REQUEST['idcat'])  && (isset($_REQUEST['idc']) )))){
           $nom = $_REQUEST['nom'];
           $prenom = $_REQUEST['prenom'];
           $idcat = $_REQUEST['idcat'];
           $idc = $_REQUEST['idc'];
           $pdo->ajouterjoueur ($nom, $prenom, $idc, $idcat);
           $lesJoueurs = $pdo->getLesJoueurs();
           $LesCategories = $pdo->getLesCategories();
           include("vues/v_joueurs.php");
       }else{
           $LesCategories = $pdo->getLesCategories();
           $LesClubs = $pdo->getLesClubs();
           include ("vues/v_ajouterjoueur.php");
       }
       break;
   }
    case 'ModifierJoueur':
    {
        var_dump($_REQUEST);
        if(isset($_REQUEST['valider'])){
             $idj = $_REQUEST['idjoueur'];
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $idcat = $_REQUEST['idcat'];
            $idc = $_REQUEST['idc'];
            $pdo->modifierjoueur ($idj, $nom, $prenom, $idcat, $idc);
            $LeJoueur = $pdo->getFicheJoueur($idj);
            include ("vues/v_joueurfiche.php");
        }else{
           
             $idj = $_REQUEST['idjoueur'];
             $unJoueur = $pdo->getFicheJoueur($idj);
            $LesClubs = $pdo->getLesClubs();
            $LesCategories = $pdo->getLesCategories();
            include("vues/v_modifierjoueur.php");
            break;
        }
        break;
    }

   case 'SupprimerJoueur':
   {
       $idj = $_REQUEST['idj'];
       $pdo->SupprimerJoueurs($idj);
       $lesJoueurs = $pdo->getLesJoueurs();
       include ("vues/v_joueurs.php");
       break;
   }



    case 'FicheClub':
    {
        $idc = $_REQUEST['club'];
        $LeClub = $pdo->getFicheClub($idc);
        include("vues/v_clubfiche.php");
        break;
    }
    case 'FicheJoueur':
    {
        $idjoueur = $_REQUEST['idjoueur'];
        $LeJoueur = $pdo->getFicheJoueur($idjoueur);
        include("vues/v_joueurfiche.php");
        break;
    }
}