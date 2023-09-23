<?php
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
        include("VUES/v_accueil.php");
}
?>