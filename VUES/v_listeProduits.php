<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *,
    *::before,
    *::after{
        box-sizing:border-box;
    }

    .flex-container{
        height: 400px;
        width: 10em;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: space-around;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        padding: 3em 1em;
        background: white;
    }

    .flex-container .flex-item{
        margin: 25px;
        padding: 4.5em 10em;
        position: relative;
        min-height: 400px;
        border-radius: 5px;
        margin-top: 9%;
    }

    .flex-container .flex-item:focus{
        box-shadow: 0 0 3pt 2pt red;
    }

    .flex-container .flex-item a{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        text-decoration: none;
        text-align: center;
        color: #fff;
        font-size: 24px;
        font-weight: normal;
        line-height: 1.5;
        -webkit-transition: 600ms ease;
        transition: 600ms ease;
        border-radius: 0px;
    }

    .flex-container .flex-item a span{
        -webkit-transform: translateZ(50px) scale(0.7);
        transform: translateZ(50px) scale(0.7);
    }

    .tilt{
        box-shadow: 0 20px 30px -13px rgba(0, 0, 0, 0.7);
    }

    .bg-one{
        background: linear-gradient(45deg, #2EA1CF, #FA51D0);
    }

    .bg-two{
        background: linear-gradient(45deg, #FA51D0, #2EA1CF);
    }

    .bg-three{
        background: linear-gradient(60deg, #2EA1CF, #FA51D0);
    }

    .flex-item span > img{
        width: 350px;
        margin-bottom: 65%;
    }

    .flex-item .text{
        color: black;
        font-weight:800;
        font-family: 'poppins', sans-serif;
        font-size: 12px;
        position: absolute;
        bottom: 20px;
    }
</style>
<body>
    <section>
        <h3>Les prestations</h3>
        <?php
            foreach($lesPrestations as $laPrestation)
            {
        ?>
        <div class="flex-container">
            <div class="flex-item bg-one tilt">
                <a href="#nothing"> <span><img src="./ASSETS/IMAGES/imgvwati.jpeg"></span>
                    <div class="text">
                        <p style="font-size: 15px;">Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe</p>
                        Price: 300rs
                    </div>
                </a>
            </div>
        </div>
        <?php
            }
        ?>
    </section>
      
</body>
</html>