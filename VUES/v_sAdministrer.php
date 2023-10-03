<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="./ASSETS/css/styles.css">
</head>
<body>
</body>
    <section>
        <form action="index.php?uc=administrer&action=verifConnexion" method="post">
            <h1 style="color:#FF87E6;">Login</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input name="identifiant" type="text" required>
                <label style="color:#3981F0;" for="">Identifiant</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input name="mdp" type="password" required>
                <label style="color:#3981F0;" for="">Mot de passe</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Se souvenir de moi</label>
                <a href="#">Mot de passe oublié</a>
            </div>
            <button>Se connecter</button>
            <div class="register">
                <p>Tu n'as pas de compte ? <a href="#">Créer un</a></p>
            </div>
        </form>
    </section>
</html>