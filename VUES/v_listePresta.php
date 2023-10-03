<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    td {
    border: 1px solid #333;
    }

    thead,
    tfoot {
    background-color: #333;
    color: #fff;
    }
</style>
<body>
    <h3>Les prestations</h3>
    <?php
        foreach($lesPrestations as $laPrestation)
        {
    ?>
    <table>
        <thead>
            <tr>
                <?php
                    echo "<th>'".$laPrestation['nomPresta']."'</th>";
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    echo "<td>'".$laPrestation['descriptionPresta']."'</td>";
                    echo "<td>'".$laPrestation['prixPresta']."'</td>";
                ?>
            </tr>
        </tbody>
    </table>
    <?php
        }
    ?>
</body>
</html>