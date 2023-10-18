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

    public static function getCarwashClass()
    {
        if(carwashClass::$monPdoCarwash == null)
        {
            carwashClass::$monPdoCarwash = new carwashClass();
        }
        return carwashClass::$monPdoCarwash;
    }

    private function __construct()
    {
        carwashClass::$monPdo=new PDO(carwashClass::$serveur.';'.carwashClass::$bdd, carwashClass::$user, carwashClass::$mdp);
        carwashClass::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        carwashClass::$monPdo=null;
    }

    public function verifConnexion($identifiant, $mdp)
    {
        $req="select * from admin where pseudoAdmin ='".$identifiant."' and mdpAdmin='".$mdp."'";
        $res = carwashClass::$monPdo->query($req);
        $unUtilisateur=$res->fetch();
        return $unUtilisateur;
    }
}


class Commande
{
    private $idCommande;
    private $dateCommande;
    
    public $infosClass;

    public $objetPanier = null;

    public static function getCommande()
    {
        if(Commande::$objetPanier == null)
        {
            Commande::$objetPanier = new Commande();
        }
        return Commande::$objetPanier;
    }

    private function __construct()
    {
        Commande::$infosClass=new PDO(Commande::$idCommande.';'.Commande::$dateCommande);
        Commande::$infosClass->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        Commande::$infosClass=null;
    }
}

class Articles
{
    private $idArticle;
    private $libelleArticle;
    private $imageArticle;
    private $descriptionArticle;
    private $prixArticle;
    private $quantiteArticle;
    private $typeArticle;
    private $dansPanier;

    private $infosArticles;

    private $objetArticle = null;

    public static function getArticles()
    {
        if(Articles::$objetArticle == null)
        {
            Articles::$objetArticle = new Articles();
        }
        return Articles::$objetArticle;
    }

    private function __construct()
    {
        Articles::$infosArticles=new PDO(Articles::$idArticle.';'.Articles::$libelleArticle, Articles::$imageArticle, Articles::$descriptionArticle, Articles::$prixArticle);
        Articles::$infosArticles->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        Commande::$infosClass=null;
    }

    public function getLesArticles()
    {
        $req = "select * from articles";
        $res = Articles::$infosArticles->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    public function getLesArticlesSelonValeur($valeur)
    {
        $req="select * from articles where ajouterPanier = '".$valeur."'";
        $res=Articles::$infosArticles->query($req);
        $lesLignes=$res->fetchAll();
        return $lesLignes;
    }

    public function ajouterArticle($idArticle,$imageArticle, $libelleArticle, $descArticle, $prixArticle,$qteArticle ,$typeArticle ,$ajouterPanier)
    {
        $req="insert into Articletions VALUES('$idArticle','$imageArticle','$libelleArticle','$descArticle','$prixArticle','$qteArticle','$typeArticle','$ajouterPanier');";
        Articles::$infosArticles->query($req);
    }
}
?>