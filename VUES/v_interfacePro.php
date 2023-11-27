<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    include("VUES/v_header.php");
?>
<body
    <section>
        <table class="table" style="width: 80vh; margin: 30px 50vh;">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">image</th>
                    <th scope="col">libellé</th>
                    <th scope="col">description</th>
                    <th scope="col">prix</th>
                    <th scope="col">le type</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($lesArticles as $article) {
                echo '<tr>';
                    echo '<th scope="row">'.$article["idArticle"].'</th>';
                    echo '<td>'.$article["imageArticle"].'</td>';
                    echo '<td>'.$article["libelleArticle"].'</td>';
                    echo '<td>'.$article["descriptionArticle"].'</td>';
                    echo '<td>'.$article["prixArticle"].'</td>';
                    echo '<td>'.$article["typeArticle"].'</td>';
                    echo "<td>";
                        echo '<a href="index.php?uc=administrer&action=supprimerArticle&id='. $article['idArticle'] .'" class="me-3" ><span>Supprimer</span></a>';
                    echo "</td>";
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </section>
    <section>
        <?php
        include('VUES/v_ajouterPrestationProduit.php');

        ?>
    </section>
</body>
</html>