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
                $lesPrestations=$pdo->getLesPrestations();
                $lesProduits=$pdo->getLesProduits();
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

        case 'ajouterPrestation':
            {
                $idPresta=$_POST['idPresta'];
                $imgPresta=$_POST['imgPresta'];
                $nomPresta=$_POST['nomPresta'];
                $descPresta=$_POST['descPresta'];
                $prixPresta=$_POST['prixPresta'];
                $ajoutPresta=$pdo->ajouterPrestation($idPresta,$imgPresta, $nomPresta, $descPresta, $prixPresta);
                include("VUES/v_interfacePro.php");
            }

            case 'ajouterProduit':
                {
                    $idProd=$_POST['idProd'];
                    $imgProd=$_POST['imgProd'];
                    $nomProd=$_POST['nomProd'];
                    $descProd=$_POST['descProd'];
                    $prixProd=$_POST['prixProd'];
                    $ajoutProd=$pdo->ajouterProduit($idProd,$imgProd, $nomProd, $descProd, $prixProd);
                    include("VUES/v_interfacePro.php");
                }
    }
?>
