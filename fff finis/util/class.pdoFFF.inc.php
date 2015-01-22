<?php
class PdoFFF
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=fff';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoFFF = null;
		
	private function __construct()
	{
    		PdoFFF::$monPdo = new PDO(PdoFFF::$serveur.';'.PdoFFF::$bdd, PdoFFF::$user, PdoFFF::$mdp); 
			PdoFFF::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoFFF::$monPdo = null;
	}
	public  static function getPdoFFF()
	{
		if(PdoFFF::$monPdoFFF == null)
		{
			PdoFFF::$monPdoFFF= new PdoFFF();
		}
		return PdoFFF::$monPdoFFF;  
	}
	
	public function testlogadmin ($l,$p)
	{
		$req="select count(*) from utilisateurs where login= '".$l."' and mdp = '".$p."'";
		$res = PdoFFF::$monPdo->query($req);
		$leResu = $res->fetch();
		return $leResu;
	}
	
	public function getLesClubs()
	{
	    $req="select distinct * from clubs ";
		$res = PdoFFF::$monPdo->query($req);
		$lesClubs = $res->fetchAll();
		return $lesClubs; 
	}
	
	public function getLesJoueurs($idClub)
	{
	    $req="select * from joueurs, inscription where joueurs.IDjoueur=inscription.IDjoueur AND IDclub=".$idClub;
		$res = PdoFFF::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes; 
	}
	
	public function suprClub($id)
    {
		$req ='DELETE FROM inscription WHERE IDclub='.$id.'; 
			   DELETE FROM clubs WHERE IDclub='.$id.';';
        $res = PdoFFF::$monPdo->query($req);
    }
	
	public function modifClub($id,$nom,$adresse,$ville,$cp,$logo)
    {
        $req = "UPDATE `clubs` SET `nomclub`='".$nom."',`adresseclub`='".$adresse."',`villeclub`='".$ville."',`cpclub`='".$cp."',`logoclub`='".$logo."' WHERE IDclub =".$id;
        $res = PdoFFF::$monPdo->exec($req);
    }

    	public function ajoutClub($id,$nom,$adresse,$ville,$cp,$logo)
    {
        $req = "INSERT INTO `clubs` VALUES 'IDclub'='".$IDclub."'' `nomclub`='".$nom."',`adresseclub`='".$adresse."',`villeclub`='".$ville."',`cpclub`='".$cp."',`logoclub`='".$logo."' WHERE IDclub =".$id;
        $res = PdoFFF::$monPdo->exec($req);
    }
	
	public function suprJoueur($id)
    {
		$req ='DELETE FROM inscription WHERE IDjoueur='.$id.'; 
			   DELETE FROM clubs WHERE IDjoueur='.$id.';';
        $res = PdoFFF::$monPdo->query($req);
    }
	
	public function modifJoueur($id,$nom,$prenom,$club,$categorie,$datenaissance,$teljoueur,$mailjoueur,$Nlicencejoueur)
    {
        $req = "UPDATE `joueurs` SET `nom`='".$nom."',`prenom`='".$prenom."',`club`='".$club."',`categorie`='".$categorie."',`datenaissance`='".$datenaissance."', `teljoueur`='".$teljoueur."',`mailjoueur`='".$mailjoueur."',`Nlicencejoueur`='".$Nlicencejoueur."' WHERE IDjoueur = ".$id;
        $res = PdoFFF::$monPdo->exec($req);
    }

    	public function ajoutJoueur($id,$nom,$prenom,$club,$categorie,$datenaissance,$teljoueur,$mailjoueur,$Nlicencejoueur)
    {
        $req = ' INSERT INTO `joueurs`(`IDjoueur`, `nom`, `prenom`, `club`, `categorie`, `datenaissance`, `teljoueur`, `mailjoueur`, `Nlicencejoueur`) VALUES ("'.$id.'","'.$nom.'","'.$prenom.'","'.$club.'","'.$categorie.'","'.$datenaissance.'","'.$teljoueur.'","'.$mailjoueur.'","'.$Nlicencejoueur.'")';
        $res = PdoFFF::$monPdo->exec($req);
        

    }
    
    public function ajoutInscription($idC,$dateIns,$id)
    {
    	$req = ' INSERT INTO `inscription`(`IDjoueur`, `dateinscription`, `IDclub`) VALUES ("'.$id.'","'.$dateIns.'","'.$idC.'")';
    	$res = PdoFFF::$monPdo->exec($req);

    }
	
}
?>