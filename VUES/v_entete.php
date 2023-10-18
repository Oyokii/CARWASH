<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ASSETS/bootstrap-5.3.2/bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a
                href="#"
                class="navbar-brand mb-0 h1">
                    <img 
                    class="d-inline-block aling-top"
                    src="ASSETS\IMAGES\Royal-Auto-Detailing_2021_Logo_Horizontal-1.webp" width="100" height="auto"
                    />
                </a>

                <button
                type="button"
                data-bs-toggle="colapse"
                data-bs-target="#navbarNav"
                class="navbar-toggler"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a href="index.php?uc=accueil" class="nav-link">
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="index.php?uc=voirPrestationProduits&action=afficherPrestation" class="nav-link">
                                Services
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="index.php?uc=voirPrestationProduits&action=afficherProduits" class="nav-link">
                                Produits
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="index.php?uc=administrer" class="nav-link">
                                Administrer
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="index.php?uc=panier&action=afficherPanier" class="nav-link">
                                Panier
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div>
        <video style="width: 100%; height: 100vh;" src="./ASSETS/IMAGES/Car1Trim.mp4" autoplay muted loop></video>
    </div>

</body>
</html>