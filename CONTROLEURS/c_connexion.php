<?php
    if(!isset($_REQUEST['action']))
    {
        $action='connexion';
    }else{
        $action=$_REQUEST['action'];
    }

    switch($action){

        case 'connexion':
            {
                include('VUES/v_sAdministrer.php');
                break;
            }

        case 'verifConnexion':
            {
                $identifiant=$_POST['identifiant'];
                $mdp=$_POST['mdp'];
                $lesArticles=$pdo->getArticles();
                $unUtilisateur = $pdo->verifConnexion($identifiant,$mdp);
                if(isset($unUtilisateur)&& !empty($unUtilisateur))
                {
                    include('VUES/v_interfacePro.php');
                }else
                {
                    include("VUES/v_sAdministrer.php");
                }
                break;
            }

        case 'ajouterArticle':
            {
                $idArticle=$_POST['idArticle'];
                $imgArticle=$_POST['imgArticle'];
                $nomArticle=$_POST['nomArticle'];
                $descArticle=$_POST['descArticle'];
                $prixArticle=$_POST['prixArticle'];
                $qteArticle=$_POST['qteArticle'];
                $typeArticle=$_POST['typeArticle'];
                $ajoutArticle=$pdo->CreateArticle($idArticle,$imgArticle, $nomArticle, $descArticle, $prixArticle, $qteArticle, $typeArticle);
                include("VUES/v_interfacePro.php");
                break;
            }

        case 'supprimerArticle':
            {
                $supprimerArticle=$pdo->DeleteArticle($idArticle);
                include("VUES/v_interfacePro.php");
                break;
            }

        case 'modifierArticle':
            {
                $supprimerArticle=$pdo->UpdateArticle($idArticle,$imgArticle, $nomArticle, $descArticle, $prixArticle, $qteArticle, $typeArticle);
                include("VUES/v_interfacePro.php");
                break;
            }
    }
?>
