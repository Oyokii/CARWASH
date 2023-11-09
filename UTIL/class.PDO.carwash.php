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
    // public $monPdoArticle = new Articles($idArticle, $libelleArticle, $imageArticle, $descriptionArticle, $prixArticle, $quantiteArticle, $typeArticle, $dansPanier);
    // public $monPdoCommande = new Commande($idCommande, $dateCommande, $listeArticles);

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

    // AFFICHER LES ARTICLES
    public function getArticleSelonType($leType)
    {
        $req= "select * from articles where typeArticle='".$leType."'";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetch();
        return $lesArticles;
    }

    public function getArticles()
    {
        $req= "select * from articles";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetch();
        return $lesArticles;
    }

    // public function getProduits()
    // {
    //     $req= "select * from articles where typeArticle= PO";
    //     $res=carwashClass::$monPdo->query($req);
    //     $lesArticles=$res->fetch();
    //     return $lesArticles;
    // }

    public function getPrestations()
    {
        $req= "select * from articles where typeArticle= PE";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetch();
        return $lesArticles;
    }

    // SUPPRIMER UN ARTICLE
    public function DeleteArticle($id)
    {
        $req= "delete from article where idArticle = ".$id."'";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetchAll();
        return $lesArticles;
    }

    // AJOUTER UN NOUVEL ARTICLE
    public function CreateArticle($idArticle, $libelleArticle, $imageArticle, $descriptionArticle, $prixArticle, $quantiteArticle, $typeArticle)
    {
        $req="insert into article values ('$idArticle', '$libelleArticle', '$imageArticle', '$descriptionArticle', '$prixArticle', '$quantiteArticle', '$typeArticle')";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetchAll();
        return $lesArticles;

    }

    // MODIFIER UN ARTICLE
    public function UpdateArticle($idArticle, $libelleArticle, $imageArticle, $descriptionArticle, $prixArticle, $quantiteArticle, $typeArticle)
    {
        $req="update article set idArticle = '".$idArticle."', libelleArticle= '".$libelleArticle."', imageArticle= '".$imageArticle."', descriptionArticle= '".$descriptionArticle."', prixArticle= '".$prixArticle."', quantiteArticle= '".$quantiteArticle."', typeArticle= '".$typeArticle."' where idArticle= '".$idArticle."'";
        $res=carwashClass::$monPdo->query($req);
        $lesArticles=$res->fetchAll();
        return $lesArticles;
    }

    // AJOUTER UN NOUVEL ARTICLE A LA LISTE
    // public function AjouterArticleListe($idArticle, $libelleArticle, $imageArticle, $descriptionArticle, $prixArticle, $quantiteArticle, $typeArticle)
    // {
    //     $req="select * from article where idArticle = '".$idArticle."', libelleArticle= '".$libelleArticle."', imageArticle= '".$imageArticle."', descriptionArticle= '".$descriptionArticle."', prixArticle= '".$prixArticle."', quantiteArticle= '".$quantiteArticle."', typeArticle= '".$typeArticle."' where idArticle= '".$idArticle."'";
    // }

    // CALCULER LE PRIX TOTAL
    public function PrixTotalPanier($idArticle, $prixArticle)
    {
        $req= "".$idArticle."".$prixArticle."";
    }
}

?>













<!-- // class Articles
// {
//     private $idArticle;
//     private $libelleArticle;
//     private $imageArticle;
//     private $descriptionArticle;
//     private $prixArticle;
//     private $quantiteArticle;
//     private $typeArticle;
//     private $dansPanier;

//     private $infosArticles;

//     private static $objetArticle = null;

//     public static function getArticle()
//     {
//         if(Articles::$objetArticle == null)
//         {
//             Articles::$objetArticle = new Articles();
//         }
//         return Articles::$objetArticle;
//     }

//     private function __construct()
//     {
//         Articles::$infosArticles=new PDO(Articles::$idArticle.';'.Articles::$libelleArticle, Articles::$imageArticle, Articles::$descriptionArticle, Articles::$prixArticle);
//         Articles::$infosArticles->query("SET CHARACTER SET utf8");
//     }

//     public function _construct($idArticle, $libelleArticle, $imageArticle, $descriptionArticle, $prixArticle, $quantiteArticle, $typeArticle, $dansPanier)
//     {
//         $this->idArticle = $idArticle;
//         $this->libelleArticle = $libelleArticle;
//         $this->imageArticle = $imageArticle;
//         $this->descriptionArticle = $descriptionArticle;
//         $this->prixArticle = $prixArticle;
//         $this->quantiteArticle = $quantiteArticle;
//         $this->typeArticle = $typeArticle;
//         $this->dansPanier = $dansPanier;
//     }

//     public function _destruct()
//     {
//         Commande::$infosClass=null;
//     }

//     public function getIdArticle()
//     {
//         return $this->idArticle;
//     }
// } -->


<!-- // class Commande
// {
//     private $idCommande;
//     private $dateCommande;
//     private $listeArticles;
//     public $infosClass;

//     public $objetPanier = null;

//     public static function getCommande()
//     {
//         if(Commande::$infosClass == null)
//         {
//             Commande::$infosClass = new Commande();
//         }
//         return Commande::$infosClass;
//     }

//     private function __construct()
//     {
//         Commande::$infosClass=new PDO(Commande::$idCommande.';'.Commande::$dateCommande, Commande::$listeArticles);
//         Commande::$infosClass->query("SET CHARACTER SET utf8");
//     }

//     private function _construct($idCommande, $dateCommande, $listeArticles)
//     {
//         $this->idCommande=$idCommande;
//         $this->dateCommande=$dateCommande;
//         $this->listeArticles=$listeArticles;
//     }

//     public function _destruct()
//     {
//         Commande::$infosClass=null;
//     }

//     public function getIdCommande()
//     {
//         return $this->idCommande;
//     }

//     public function ListeArticle(Articles $articles)
//     {
//         $this->listeArticles[$this.($articles->getIdArticle())];
//     }

//     public function AjouterArticleListe(Articles $articles)
//     {
//         $this->listeArticles[$articles->getIdArticle()];
//     }

//     public function SupprimerArticlePanier(Articles $articles)
//     {
//         unset($listeArticle[$articles->getIdArticle()]);
//     }
// } -->