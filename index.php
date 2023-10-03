<?php
session_start();
include("UTIL/class.PDO.carwash.php");
$pdo=carwashClass::getCarwashClass();

if(!isset($_REQUEST['uc']))
{
    $uc = 'accueil';
}else
{
$uc=$_REQUEST['uc'];
}

switch($uc)
{
    case 'accueil':
    {
        include("VUES/v_accueil.php");
        break;
    }

    case 'voirPrestationProduits':
    {
        include("CONTROLEURS/c_voirPrestaProduits.php");
        break;
    }

    case 'administrer':
        {
            include("CONTROLEURS/c_connexion.php");
            break;
        }
}
?>