<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .card{
        border:3px solid #FF9800;
        border-radius:35px;
    }
</style>
    <?php
        include("VUES/v_header.php");
    ?>
<body style="">
    <section style="display: flex; flex-wrap: wrap; flex:1fr 1fr; justify-content: center;">
    <ul style="list-style-type: none; display: flex; flex:1; flex-wrap:wrap; margin: 5vh 15vh;" id="catalogue-liste">
        <?php
            foreach($lesArticles as $unArticle)
            {
        echo '<li data-nom="un produit" data-prix="50" data-designation="card-text">';
            echo '<div class="card" style="width: 18rem; margin: 3vh 4vh;">';
            echo '<img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">Basic carwash citadine</h5>';
            echo '<p class="card-text">Nettoyage intérieur OU Nettoyage extérieur</p>';
            echo '<p class="card-prix">50€</p>';
            echo '</div>';
        echo '</div>';
        echo '<button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">'."Ajouter au panier".'</button>';
        echo '</li>';
            }   
        ?>
    </ul>
    </section>
    <?php
        include("v_contact.php");
    ?>
    <script src="./ASSETS/js/panier.js"></script>
    <link rel="stylesheet" href="./ASSETS/bootstrap-5.3.2/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
    
</body>
</html>