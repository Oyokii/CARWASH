<?php
    if(!isset($_REQUEST['action']))
    {
        $action='ajouterArticlesPanier';
    }else{
        $action=$_REQUEST['action'];
    }
    

    switch($action)
    {
        case 'ajouterArticlesPanier':
            {
                $lesArticles=$pdo->getAjouterArticles();
                break;
            }
    }
?>