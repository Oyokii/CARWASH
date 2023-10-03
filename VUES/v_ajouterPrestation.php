<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}

body{
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-image: url('./ASSETS/IMAGES/background_interfPro.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

section{
    position: relative;
    max-width: 400px;
    background-color: transparent;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 20px;
    backdrop-filter: blur(55px);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem 3rem;
    margin: 0 30px;
}

h1{
    font-size: 2rem;
    color: #fff;
    text-align: center;
}

.inputbox{
    position: relative;
    margin: 30px 0;
    max-width: 310px;
    border-bottom: 2px solid #fff;
}

.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1rem;
    pointer-events: none;
    transition: all 0.5s ease-in-out;
}

input:focus ~label,
input:valid ~ label{
    top: -5px;
}

.inputbox input{
    width: 100%;
    height: 60px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1rem;
    padding: 0 35px 0 5px;
    color: #fff;
}

.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2rem;
    top: 20px;
}

.forget{
    margin: 35px 0;
    font-size: 0.85rem;
    color: #fff;
    display: flex;
    justify-content: space-between;
}

.forget label{
    display: flex;
    align-items: center;
}

.forget label input{
    margin-right: 3px;
}

.forget a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}

.forget a:hover{
    text-decoration: underline;
}

button{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background-image: url('./ASSETS/IMAGES/backgroundbutton.jpeg');
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: all 0.4s ease;
}

button:hover{
    background-color: rgb(255, 255, 255, 0.5);
}

.register{
    font-size: 0.9rem;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}

.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}

.register p a:hover{
    text-decoration: underline;
}
</style>
    <section>
        <form action="index.php?uc=administrer&action=ajouterPrestation" method="post">
            <h1 style="color:#FF87E6;">Ajouter une prestation</h1>
            <div class="inputbox">
                <ion-icon name="pricetag-outline"></ion-icon>
                <input name="idPresta" type="text" required>
                <label style="color:#3981F0;" for="">Id de la prestation</label>
            </div>
            <div class="inputbox">
                <ion-icon name="image-outline"></ion-icon>
                <input name="imgPresta" type="text" required>
                <label style="color:#3981F0;" for="">Image de la prestation</label>
            </div>
            <div class="inputbox">
                <ion-icon name="clipboard-outline"></ion-icon>
                <input name="nomPresta" type="text" required>
                <label style="color:#3981F0;" for="">Nom de la prestation</label>
            </div>
            <div class="inputbox">
                <ion-icon name="clipboard-outline"></ion-icon>
                <input name="descPresta" type="text" required>
                <label style="color:#3981F0;" for="">Description de la presta..</label>
            </div>
            <div class="inputbox">
                <ion-icon name="cash-outline"></ion-icon>
                <input name="prixPresta" type="text" required>
                <label style="color:#3981F0;" for="">Prix de la prestation</label>
            </div>
            <button>Ajouter la prestation</button>
        </form>
    </section>
    <section>
        <form action="index.php?uc=administrer&action=ajouterProduit" method="post">
            <h1 style="color:#FF87E6;">Ajouter un produit</h1>
            <div class="inputbox">
                <ion-icon name="pricetag-outline"></ion-icon>
                <input name="idProd" type="text" required>
                <label style="color:#3981F0;" for="">Id du produit</label>
            </div>
            <div class="inputbox">
                <ion-icon name="image-outline"></ion-icon>
                <input name="imgProd" type="text" required>
                <label style="color:#3981F0;" for="">Image du produit</label>
            </div>
            <div class="inputbox">
                <ion-icon name="clipboard-outline"></ion-icon>
                <input name="nomProd" type="text" required>
                <label style="color:#3981F0;" for="">Nom du produit</label>
            </div>
            <div class="inputbox">
                <ion-icon name="clipboard-outline"></ion-icon>
                <input name="descProd" type="text" required>
                <label style="color:#3981F0;" for="">Description du produit</label>
            </div>
            <div class="inputbox">
                <ion-icon name="cash-outline"></ion-icon>
                <input name="prixProd" type="text" required>
                <label style="color:#3981F0;" for="">Prix du produit</label>
            </div>
            <button>Ajouter le produit</button>
        </form>
    </section>
</html>