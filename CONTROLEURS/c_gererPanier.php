<?php
    if(!isset($_REQUEST['action']))
    {
        $action='voirPanier';
    }else{
        $action=$_REQUEST['action'];
    }
    

    switch($action)
    {
        case 'voirPanier':
            {
                $lesArticles=$pdo->getPanier();
                include('VUES/v_panier.php');
                break;
            }

            case 'ajouterArticlesPanier':
                {
                    $idArticle=$_GET['$idArticle'];
                    $lesArticles=$pdoCommande->getAjouterArticlesPanier($idArticle);
                    $lesArticles=$pdo->getPanier();
                    break;
                }
        
            case 'supprimerArticlePanier':
                {
                    $idArticle=$_GET['$idArticle'];
                    $supprimerArticle=$pdo->supprimerArticlePanier($idArticle);
                    include('VUES/v_panier.php');
                }
    }
?>