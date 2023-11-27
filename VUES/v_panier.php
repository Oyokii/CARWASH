<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Panier</title>
  <link rel="stylesheet">
</head>
<style>
    /* Styles pour le panier */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 20px;
}

h1 {
  text-align: center;
}

.panier {
  width: 60%;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 8px;
  background-color: #f9f9f9;
}

.liste-produits {
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
  margin-bottom: 10px;
}

.total {
  text-align: right;
  margin-bottom: 10px;
}

.ajout-produit input[type="text"],
.ajout-produit input[type="number"],
.ajout-produit button {
  margin-bottom: 10px;
}

</style>
<body>
  <h1>Mon Panier</h1>
  
  <div class="panier">
    <div class="liste-produits" id="liste-produits">
      <!-- Ici seront affichés les produits -->
    </div>
    
    <div class="total">
      <strong>Total :</strong> <span id="total">0</span>€
    </div>
    
    <div class="ajout-produit">
      <input type="text" id="nom-produit" placeholder="Nom du produit">
      <input type="number" id="prix-produit" placeholder="Prix du produit">
      <button onclick="ajouterProduit()">Ajouter Produit</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
