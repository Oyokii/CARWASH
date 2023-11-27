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
    <h3>Liste de prestations</h3>
    <section style="display: flex; flex-wrap: wrap; flex:1fr 1fr; justify-content: center;">
    <ul style="list-style-type: none; display: flex; flex:1; flex-wrap:wrap; margin: 5vh 15vh;" id="catalogue-liste">
        <li data-nom="un produit" data-prix="50" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Basic carwash citadine</h5>
                    <p class="card-text">Nettoyage intérieur OU Nettoyage extérieur</p>
                    <p class="card-prix">50€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="un produit" data-prix="60" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Basic carwash suv/4x4</h5>
                    <p class="card-text">Nettoyage intérieur OU Nettoyage extérieur</p>
                    <p class="card-text">60€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="un produit" data-prix="70" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Super carwash citadine</h5>
                    <p class="card-text">Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle</p>
                    <p class="card-text">70€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="un produit" data-prix="90" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Super carwash suv/4x4</h5>
                    <p class="card-text">Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle</p>
                    <p class="card-text">90€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="un produit" data-prix="100" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maxi carwash citadine</h5>
                    <p class="card-text">Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe</p>
                    <p class="card-text">100€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="un produit" data-prix="120" data-designation="card-text">
            <div class="card" style="width: 18rem; margin: 3vh 4vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maxi carwash suv/4x4</h5>
                    <p class="card-text">Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe</p>
                    <p class="card-text">120€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
         
    </ul>
    </section>
    <?php
        include("v_contact.php");
    ?>
    <script src="./ASSETS/js/panier.js"></script>
    <link rel="stylesheet" href="./ASSETS/bootstrap-5.3.2/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
    
</body>
</html>