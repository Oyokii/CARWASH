<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script 
    src="ASSETS/bootstrap-5.3.2/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>

<?php
session_start();
require_once("UTIL/class.PDO.carwash.php");
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

    case 'panier':
        {
            // include("CONTROLEURS/c_voirPrestaProduits.php");
            include("VUES/v_devis.php");
            break;
        }
}
?>