<?php
    if(!isset($_REQUEST['action']))
    {
        $action='afficherPrestation';
    }else{
        $action=$_REQUEST['action'];
    }
    

    switch($action)
    {
        case 'afficherPrestation':
            {
                $leType="prestation";
                $lesArticles=$pdo->getArticleSelonType($leType);
                include('VUES/v_listePresta.php');
                break;
            }

        case 'afficherProduit':
            {
                $leType= "produit";
                $lesArticles=$pdo->getArticleSelonType($leType);
                include('VUES/v_listeProduits.php');
                break;
            }
    }
?>