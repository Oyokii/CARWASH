<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
    <?php
        foreach($lesProduits as $leProduit)
        {
    ?>
        <ul class="grid" style=" list-style-type: none; text-align: center;">
            <li>
                <div class="card" style="width: 20rem;">
                    <?php
                        echo "<img src='".$leProduit['imageProd']."'>";
                    ?>
                    <div class="card-body">
                    <?php
                        echo "<h5.card-title>".($leProduit['nomProd'].'</h5> <br><br>');
                        echo "<p.card-text>".($leProduit['descriptionProd'].'</p>');
                        echo "<p>".($leProduit['prixProd'].'€ </p>');
                    ?> 
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </li>
        </ul>

    <?php
        }
    ?>
    </section>
</body>
</html>