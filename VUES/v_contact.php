<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .inputform{
        width: 300px;
        height: 6vh;
        margin: 6px;
    }

    .message{
        height:14vh;
    }
</style>
<body>
    <section style="height: 40vh; background-color: #FF9800;">
        <h2 style="color: white; text-align: center; margin-top: 5%;">GET IN TOUCH</h2>
        <form action="post" style="margin-left: 30%; margin-top: 2%; display: flex;">
            <div>
                <input class="inputform" type="text" name="Nom" placeholder="NOM"> <br>
                <input class="inputform" type="mail" name="Adresse "placeholder="MAIL">
            </div>
            <input class="inputform message" type="text" name="Message" placeholder="MESSAGE" >
        </form>
        <button style="margin-left: 45%; background-color: #FF5200; width: 150px; height:7vh; margin-top: 2%; border-radius: 25px; border: 0px solid #FF5200; color: white; font-weight: 500;" type="submit">SUBMIT</button>
    </section>
</body>
</html>