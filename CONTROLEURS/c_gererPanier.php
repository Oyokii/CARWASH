<?php
    if(!isset($_REQUEST['action']))
    {
        $action='ajouterArticlesPanier';
    }else{
        $action=$_REQUEST['action'];
    }
    

    switch($action)
    {
        case 'voirPanier':
            {
                // $lesArticles=$pdoCommande()->ListeArticle();
                include('VUES/v_panier.php');
                break;
            }

            // case 'ajouterArticlesPanier':
            //     {
            //         $lesArticles=$pdoCommande->getAjouterArticlesPanier();
            //         break;
            //     }
    }
?>