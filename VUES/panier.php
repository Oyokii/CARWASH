<!DOCTYPE html>
<html>
    <head>
        <title>Mon Panier</title>
    </head>
    <body style="margin: 0;">
        <!-- PANIER -->
        <section class="container-fluid">
            <div style="background-color: #AAAAAA; width: 99.5%; height: 20vh; border: 5px solid white;">
                <h1 style="text-align:center; margin: auto; padding-top: 4%;">PANIER D'ACHAT</h1>
            </div>
        </section>
        
        <ul id="panier-liste" style="">
        </ul>
        <p>Total: <span id="total">0</span>€</p>

        
        
        
        
        
        
        <!-- CATALOGUE -->
        <h2>Catalogue d'articles</h2>
        <ul id="catalogue-liste">
            <li data-nom="Article 1" data-prix="10" data-designation="L'article"><button onclick="ajouterAuPanier(this)">Ajouter au panier</button></li>
            <li data-nom="Article 2" data-prix="15"><button onclick="ajouterAuPanier(this)">Ajouter au panier</button></li>
            <li data-nom="Article 3" data-prix="20"><button onclick="ajouterAuPanier(this)">Ajouter au panier</button></li>
        </ul>

        <script src="./ASSETS/js/panier.js"></script>
    </body>
</html>