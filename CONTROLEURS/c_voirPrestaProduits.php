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
                $lesPrestations=$pdo->getLesPrestations();
                include('VUES/v_listePresta.php');
                break;
            }

        case 'afficherProduits':
            {
                $lesProduits=$pdo->getLesProduits();
                include('VUES/v_listeProduits.php');
                break;
            }
    }
?>