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

        case 'connectee':
            {
                include('VUES/v_interfacePro.php');
                break;
            }

        case 'ajouterArticle':
            {
                $imageArticle=$_POST['imageArticle'];
                $libelleArticle=$_POST['libelleArticle'];
                $descriptionArticle=$_POST['descriptionArticle'];
                $prixArticle=$_POST['prixArticle'];
                $typeArticle=$_POST['typeArticle'];
                $articleCree=$pdo->CreerArticle($imageArticle, $libelleArticle, $descriptionArticle, $prixArticle, $typeArticle);
                break;
            }

        case 'supprimerArticle':
            {
                $idArticle=$_GET['id'];
                $supprimerArticle=$pdo->DeleteArticle($idArticle);
                break;
            }

        case 'modifierArticle':
            {
                $idArticle=$_POST['idArticle'];
                $imageArticle=$_POST['imageArticle'];
                $libelleArticle=$_POST['libelleArticle'];
                $descriptionArticle=$_POST['descriptionArticle'];
                $prixArticle=$_POST['prixArticle'];
                $typeArticle=$_POST['typeArticle'];
                $modifierArticle=$pdo->UpdateArticle($idArticle,$imageArticle, $libelleArticle, $descriptionArticle, $prixArticle, $typeArticle);
                include("VUES/v_interfacePro.php");
                break;
            }
    }
?>
