<?php
// @package default
// @author Patrice Grand
// @version    1.0
// @link  

class carwashClass
{
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=carwash';

    private static $user='root';
    private static $mdp='';
    private static $monPdo;
    private static $monPdoCarwash = null;

    private function __construct()
    {
        carwashClass::$monPdo=new PDO(carwashClass::$serveur.';'.carwashClass::$bdd, carwashClass::$user, carwashClass::$mdp);
        carwashClass::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        carwashClass::$monPdo=null;
    }

    public static function getCarwashClass()
    {
        if(carwashClass::$monPdoCarwash == null)
        {
            carwashClass::$monPdoCarwash = new carwashClass();
        }
        return carwashClass::$monPdoCarwash;
    }

    public function getLesPrestations()
    {
        $req = "select * from prestations";
        $res = carwashClass::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function getLesProduits()
    {
        $req = "select * from produits";
        $res = carwashClass::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function verifConnexion($identifiant, $mdp)
    {
        $req="select * from admin where pseudoAdmin ='".$identifiant."' and mdpAdmin='".$mdp."'";
        $res = carwashClass::$monPdo->query($req);
        $unUtilisateur=$res->fetch();
        return $unUtilisateur;
    }

    public function ajouterPrestation($idPresta,$imgPresta, $nomPresta, $descPresta, $prixPresta)
    {
        $req="insert into prestations VALUES('$idPresta','$imgPresta','$nomPresta','$descPresta','$prixPresta');";
        carwashClass::$monPdo->query($req);
    }

    public function ajouterProduit($idProd,$imgProd, $nomProd, $descProd, $prixProd)
    {
        $req="insert into produits VALUES('$idProd','$imgProd','$nomProd','$descProd','$prixProd');";
        carwashClass::$monPdo->query($req);
    }
}

?>