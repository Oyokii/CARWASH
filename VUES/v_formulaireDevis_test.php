<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <form id="devisForm" action="index.php?uc=afficherDevis">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom"><br>

        <label for="prénom">Prénom:</label>
        <input type="text" id="prénom" name="prénom"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="telephone">Téléphone:</label>
        <input type="tel" id="telephone" name="telephone"><br>

        <label for="description">Description du travail:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="pet-select">Sélectionnez le type d'article</label>
        <select name="articles" class="liste" id="articles">
            <option value="00">Choisissez un article</option>
              <option value="01-Prestation">Prestation</option>
              <option value="02-Produit">Produit</option>
        </select> <br>

        <label for="pet-select">Sélectionnez l'article</label>
        <select name="produit" id="produit" onchange="charger_article_panier()"></select> <br>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite"><br>
        <button type="submit" id="submit">Obtenir un devis</button>
        </select><br>
        
    </form>
</body>

</html>