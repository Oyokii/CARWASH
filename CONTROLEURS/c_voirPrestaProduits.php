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
                $lesArticles=$pdo->getLesPrestations();
                include('VUES/v_listePresta.php');
                break;
            }

        case 'afficherProduits':
            {
                $lesArticles=$pdo->getLesProduits();
                include('VUES/v_listeProduits.php');
                break;
            }

        case 'afficherPanier':
            {
                $typesA=$_POST['valeur'];
                $lesArticles=$pdo->getLesArticlesSelonType($valeur);
                include("VUES/v_panier.php");
                break;
            }
    }
?>