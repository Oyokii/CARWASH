<!DOCTYPE html>
    <html lang="fr" dir="ltr">
        <head>
            <meta charset="utf-8">
            <meta name="carwash" content="width=device-width, initial-scaled=1.0">
            <title>Royal Detailing</title>
        </head>
        
        <body >
            <?php
                include("v_header.php");
            ?>
            <section style="background-color: #FF9800; width: 100%; height: 105vh;">
                <div style="display: flex;">
                    <h1 style="color:white; position:absolute; margin-left: 1%; margin-top: 15%; width: 600px;">Ici ça mousse et nous sommes <br> <span style="color:#FF5200 ;">engagé</span> à vous remettre votre <br> voiture comme neuve</h1>
                    <img src="./ASSETS/IMAGES/bgd.png" style="width: 700px; margin-left: 40%; margin-top: 3%;" alt="">
                </div>
                <h3 style="color:white; text-align: center; margin-top: 6%;" >ALORS QU'ATTENDEZ VOUS ?</h3>
                <a href="index.php?uc=panier" style="color:white; text-align: center; background-color: #FF5200; border: 0px solid #FF9800; width: 150px; height: 7vh; position:absolute; margin-left: 45%; border-radius: 25px; padding-top:12px; text-decoration: none;"><img src="./ASSETS/IMAGES/ICONES/mousse.png" alt="">En savoir +</a>
            </section>
            <?php
                    include("v_presentationServices.php");
                    include("v_contact.php");
            ?>
        </body>
    </html>