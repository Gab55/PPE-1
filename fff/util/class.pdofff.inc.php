<?php


class Pdofff
{
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=ggiroud-ppe1';
    private static $user='root ' ;
    private static $mdp='' ;
    private static $monPdo;
    private static $monPdofff = null;


    private function __construct()
    {
        Pdofff::$monPdo = new PDO(Pdofff::$serveur.';'.Pdofff::$bdd, Pdofff::$user, Pdofff::$mdp);
        Pdofff::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct(){
        Pdofff::$monPdo = null;
    }


    public  static function getPdofff()
    {
        if(Pdofff::$monPdofff == null)
        {
            Pdofff::$monPdofff= new Pdofff();
        }
        return Pdofff::$monPdofff;
    }

    public function Connexion($l, $p)
    {
        $req = "select count(*) from compte where user = '".$l."' and mdp ='".$p."'";
        $res = Pdofff::$monPdo->query($req);
        $leResu = $res->fetch();
        return $leResu;
    }


    public function getLesClubs()
    {
        $req = "select * from clubs";
        $res = Pdofff::$monPdo->query($req);
        $lesClubs = $res->fetchAll();
        return $lesClubs;
    }

    public function AjouterClub ($nom, $ville, $nomdirigeant)
    {
        $req = "INSERT INTO clubs (idc, nom, ville, nomdirigeant) VALUES ('','".$nom."', '".$ville."', '".$nomdirigeant."');";
        Pdofff::$monPdo->query($req);
    }

    public function modifierclub($idc, $nom, $ville, $nomdirigeant)
    {
        $req = "UPDATE clubs SET nom='".$nom."', ville='".$ville."', nomdirigeant = '".$nomdirigeant."' where idc='".$idc."';";
        $res = Pdofff::$monPdo->exec($req);
        return $res;

    }

    public function SupprimerClub($idc)
    {
        $req = "DELETE from clubs where idc = ".$idc.";";
        Pdofff::$monPdo->exec($req);
    }


    public function InfoClub($idc)
    {
        $req = "select * from clubs where idc='".$idc."'";
        $res = Pdofff::$monPdo->query($req);
        $LeClub = $res->fetchAll();
        return $LeClub;
    }

    public function getLesJoueurs()
    {
        $req = " select * from joueurs";
        $res = Pdofff::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function getLesJoueursDeClub($idc)
    {
        $req = " select * from joueurs WHERE idc='".$idc."'";
        $res = Pdofff::$monPdo->query($req);
        $lesJoueurs = $res->fetchAll();
        return $lesJoueurs;
    }

    public function ajouterjoueur ($nom,$prenom, $idc, $idcat)
    {
        $req = "INSERT INTO joueurs (idj, nom, prenom, idc, idcat) VALUES ('','".$nom."', '".$prenom."', '".$idc."','".$idcat."');";
        Pdofff::$monPdo->query($req);
        
    }

    public function modifierjoueur($idj, $nom, $prenom, $idcat, $idc)
    {
        $req = "UPDATE joueurs SET nom='".$nom."',prenom='".$prenom."',idcat = '".$idcat."' WHERE idj='".$idj."';";
        $res = Pdofff::$monPdo->query($req);
        return $res;

    }

    public function SupprimerJoueurs($idj)
    {
        $req = "DELETE from joueurs where idj = ".$idj.";";
        Pdofff::$monPdo->exec($req);
    }



    public function InfoJoueur($idj)
    {
        $req = "select * from joueurs where idj='".$idj."'";
        $res = Pdofff::$monPdo->query($req);
        $LeJoueur = $res->fetchAll();
        return $LeJoueur;
    }


    public function getLesCategories(){
        $req = "SELECT idcat, nomcategories FROM categories;";
        $res = Pdofff::$monPdo->query($req);
        $Categories = $res->fetchAll();
        return $Categories;
    }


    public function resultRecherche($idcat){
        $req = "SELECT * FROM joueurs WHERE idcat ='".$idcat."';";
        $res = Pdofff::$monPdo->query($req);
        $lesJoueurs = $res->fetchAll();
        return $lesJoueurs;
    }
}