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
        <select name="articles" class="liste" id="articles" onchange="charger_articles()">
            <option value="00">Choisissez un article</option>
            <option value="01-Prestation">Prestation</option>
            <option value="02-Produit">Produit</option>
        </select> <br>

        <label for="pet-select">Sélectionnez l'article</label>
        <select name="produit" id="produit" onchange="charger_article_panier()"></select> <br>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite"><br>
        <button type="submit" id="submit">Obtenir un devis</button>

        <!-- <button id="submit" type="submit" >Créer le devis</button><br> -->

        <!-- <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite"><br>
        
        </select><br>
        <button type="submit" id="submit">Obtenir un devis</button> -->
        
    </form>

    <div id="devisOutput"></div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="./ASSETS/js/devis_test.js">
    </script>
    <script type="text/javascript" lang="javascript">
    function charger_articles()
    {
        var liste_article =[];
        var nb_articles=0;
        var liste_deroulante="";
        var nom_service = document.getElementById("articles").value;
        var numService = nom_service.substr(0,2);
        var infosArticles=document.getElementById("article");
        if(numService != "00")
        {
            // alert(nom_service+ "-" +numService);
            liste_article=listeServices(numService);
            nb_articles=liste_article.length;
            // alert(nb_articles);

            liste_deroulante="<select id='articles' class='liste' onchange='verif_articles(\""+nom_service+"\")'>";
            liste_deroulante+="<option value='Sélection'>Sélectionnez un article<\option>";
            for(var defil = 0; defil<nb_articles; defil++)
            {
                liste_deroulante+="<option value='"+liste_article[defil]+"'>"+liste_article[defil]+"<\option>";
            }
            liste_deroulante+="<\select>";
            document.getElementById("produit").innerHTML = liste_deroulante;
        }else
        {
            alert("Veuillez choisir un service")
        }
        alert(numArticle);
    }

    function listeServices(numService)
    {
        var chaine_services=[];
        var a, b, c, d, e, f, g, h, i, j, k;

        switch(numService)
        {
        case "01":
        chaine_services=[
            a = [01,"Basic carwash citadine"],
            b= [02, "Basic carwash SUV/4x4"],
            c= [03, "Super carwash citadine"],
            d= [04, "Super carwash SUV/4x4"],
            e= [05, "Maxi carwash citadine"],
            f= [06,"Maxi carwash SUV/4x4"]];
        break;
        case "02":
            chaine_services=[
                g= [07,"Aspirateur Eau/Poussière"],
                h= [08,"Chiffon"],
                i= [09,"Brosse"],
                j= [10,"Désodorisant"],
                k= [11,"Pshit pshit"]];
            break;
        }

            return chaine_services;
            return a, b, c, d, e, f, g, h, i, j, k;
        }
    </script>
</body>

</html>