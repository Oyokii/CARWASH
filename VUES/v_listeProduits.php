<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Detailing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
        <li data-nom="Aspirateur Eau/Poussière" data-prix="60" data-designation="Aspire-tout">
            <div class="card" style="width: 15rem; margin: 5vh 7vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aspirateur Eau/Poussière</h5>
                    <p class="card-text">Aspire-tout</p>
                    <p class="card-text">200€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="Chiffon intérieur" data-prix="200" data-designation="Chiffonne tout">
            <div class="card" style="width: 15rem; margin: 5vh 7vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chiffon intérieur</h5>
                    <p class="card-text">Chiffonne tout</p>
                    <p class="card-text">30€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="Savon Savonnier Océane" data-prix="50" data-designation="De la qualité">
            <div class="card" style="width: 15rem; margin: 5vh 7vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Savon Savonnier Océane</h5>
                    <p class="card-text">De la qualité</p>
                    <p class="card-text">50€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <li data-nom="Pinceau" data-prix="15" data-designation="Pince tout">
            <div class="card" style="width: 15rem; margin: 5vh 7vh;">
                <img src="./ASSETS/IMAGES/services.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pinceau</h5>
                    <p class="card-text">Pince tout</p>
                    <p class="card-text">15€</p>
                </div>
            </div>
            <button style="margin-left: 30%;" onclick="ajouterAuPanier(this)">Ajouter au panier</button>
        </li>
        <div style="border: 2px solid #FF9800; width: 500px; height: 50vh; margin-right: 200px; margin-top: 10vh;">
            <h3>Mon panier</h3>
            <ul id="panier-liste" style=""></ul>
            <p>Total: <span id="total">0</span>€</p>
        </div>
    </ul>
    </section>
    <?php
        include("v_contact.php");
    ?>
    <script src="./ASSETS/js/panier.js"></script>
    <link rel="stylesheet" href="./ASSETS/bootstrap-5.3.2/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</body>
</html>
