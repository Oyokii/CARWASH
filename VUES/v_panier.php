<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- <?php
        // include("VUES/v_header.php");
    ?> -->
    <section style="margin-top: 5vh;">
        <h1>P A N I E R</h1>
        <?php
        foreach($lesArticles as $unArticle)
        {
        ?>
        <table>
            <tr>
                <th>
                    <h1>id Commande</h1>
                    <h1>imageArticle</h1>
                    <h1>libelleArticle</h1>
                    <h1>prixArticle</h1>
                    <h1>quantiteArticle</h1>
                    <h1>date du devis</h1>
                    
                </th>
                <tbody>
                    <?php 
                        echo '<th>';
                        echo '<h1>'.($unArticle['libelle']).'</h1>';
                        echo "'<img src='" .$unArticle['image']."'>'";
                        echo '<h1>'.($unArticle['prix']).'</h1>';
                        echo '<h1>'.($unArticle['quantite']).'</h1>';
                        echo '<h1>'.($unArticle['dateDevis']).'</h1>';
                        echo '</th>';
                    ?>
                </tbody>
            </tr>
        </table>
        <?php
        }
        ?>

    </section>    
    <?php
        include("VUES/v_contact.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/cart.js" defer></script>
</body>
</html>