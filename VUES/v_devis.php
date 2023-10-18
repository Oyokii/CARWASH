<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: #505351;">
    <section style="width: 600px; height: 120vh; margin:0 auto; background-color: #fff;">
        <div style="display : flex; width: 100%; justify-content: space-around;">
            <img style="width:100px;" src="./ASSETS/IMAGES/logo.png" alt="">
            <div>
                <h1>DEVIS</h1>
                <!-- <h2>Date de création: <?php echo '<h1>'.($uneDate['date']).'</h1>'; ?></h2> -->
            </div>
        </div>
        <div style="display : flex; justify-content:space-around;">
            <div style="width: 40%;">
                <h1>ROYAL DETAILING</h1>
                <p>47 rue des Couronnes <br> 75020 Paris, France <br> email@gmail.com <br> https:royal-detailing.com </p>
            </div>
            <div style="width: 40%;">
                <h1>VOTRE ENTREPRISE</h1>
                <p>M/Mme untel <br> 123 rue paradis du lys <br> 97131 ARRAAH </p>
            </div>
        </div>
        <table>
        <?php
        foreach($lesCommandes as $uneCommande)
        {
        ?>
            <tr>
                <th>
                    <h1>Id Commande</h1>
                </th>
                <tbody>
                    <?php
                    echo '<h1>'.($uneCommande['idCommande']).'</h1>';
                    ?>
                </tbody>
            </tr>
        <?php
        }
        ?>
        </table>
    <?php
    foreach($lesArticles as $unArticle)
    {
    ?>
        <table>
            <tr>
                <th>
                    <h1>imageArticle</h1>
                    <h1>libelleArticle</h1>
                    <h1>prix unitaire</h1>
                    <h1>quantiteArticle</h1>
                    <h1>date du devis</h1>
                    <h1>TVA</h1>
                    
                </th>
                <tbody>
                    <?php 
                        echo '<th>';
                        echo "'<img src='" .$unArticle['image']."'>'";
                        echo '<h1>'.($unArticle['libelle']).'</h1>';
                        echo '<h1>'.($unArticle['prix']).'</h1>';
                        echo '<h1>'.($unArticle['quantite']).'</h1>';
                        echo '<h1>'.($unArticle['dateDevis']).'</h1>';
                        echo '<h1>'.($unArticle['tva']).'</h1>';
                        echo '</th>';
                    ?>
                </tbody>
            </tr>
        </table>
    <?php
    }
    ?>
    <div>
        <p>Date et signature du client</p>
    </div>
    <div style="margin:0 auto; width: 300px;">
        <h1>
            Royal detailing - EURL
        </h1>
        <p> 47 rue des Couronnes 75020 Paris, France <br> https:royal-detailing.com </p>
    </div>
    </section>
</body>
</html>