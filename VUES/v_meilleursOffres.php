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
        height: 100vh;
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
    <div class="flex-container">
        <div class="flex-item bg-one tilt">
            <a href="#nothing"> <span><img src="./ASSETS/IMAGES/imgvwati.jpeg"></span>
            <div class="text">
                <p style="font-size: 15px;">Super wash * Shampooing des sièges et des moquettes * Nettoyage plafond * Lavage avec protection hydrophobe</p>
                Price: 300rs
            </div>
            </a>
        </div>
        <div class="flex-item bg-two tilt">
            <a href="#nothing"> <span><img src="https://image.spreadshirtmedia.com/content/w_650/cms/cyo/seo/tshirts/210_us_desktop.png"></span>
                <div class="text">
                    <p style="font-size: 15px;">Nettoyage intérieur et extérieur * Rénovation des plastiques * Nettoyage des vitres * Nettoyage des jantes * Aspiration habitacle</p>
                    Price: 200rs
                </div>
            </a>
        </div>
        <div class="flex-item bg-three tilt">
            <a href="#nothing"> <span><img src="https://cdn.shopify.com/s/files/1/0017/8310/3533/products/Back_T_Shirt_0a05c73a-7767-4215-a93a-6935dfb2bf49_1024x1024.png?v=1571718603"></span>
                <div class="text">
                    Price: 350rs
                </div>
            </a>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js'>
        const tilt = document.querySelectorAll(".tilt");

        VanillaTilt.init(tilt, 
        {
            reverse: true,
            max: 15,
            speed: 400,
            scale: 1.12,
            glare: true,
            reset: true,
            perspective: 500,
            transition: true,
            "max-glare": 0.75,
            "glare-prerender": false,
            gyroscope: true,
            gyroscopeMinAngleX: -45,
            gyroscopeMaxAngleX: 45,
            gyroscopeMinAngleY: -45,
            gyroscopeMaxAngleY: 45
        });
    </script>

</body>
</html>