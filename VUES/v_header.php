<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .lienHeader{
        text-decoration: none;
        color: white;
    }
</style>
<body style="margin: 0 auto;">
    <header style="margin: 0; display: flex; background-color: #FF9800;">
        <div style="margin:0 3%; width: 100%; display: flex;">
            <img src="./ASSETS/IMAGES/logo.png" style="width: 100px;" alt="">
            <div style="width: 70%; margin-left: 20%; padding-top: 25px;">
                <ul style="display: flex; justify-content:space-around; list-style-type: none; text-align: center;">
                    <li><a class="lienHeader" href="index.php?uc=accueil">Accueil</a></li>
                    <li><a class="lienHeader" id="PO" href="index.php?uc=produits&action=afficherProduit">Produits</a></li>
                    <li><a class="lienHeader" id="PE" href="index.php?uc=prestations&action=afficherPrestation">Services</a></li>
                    <li><a class="lienHeader" href="index.php?uc=panier&action=voirPanier">Faire un devis</a></li>
                    <li><a class="lienHeader" href="index.php?uc=administrer">Se connecter</a></li>
                </ul>
            </div>
        </div>
        
    </header>
</body>
</html>
