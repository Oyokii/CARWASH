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
    input{
        width: 400px;
    }
</style>
<body>
    <section style="display: flex; justify-content: space-around; width: 60vh; margin-left: 30%; margin-bottom: 10vh;">
        <form action="index.php?uc=administrer&action=ajouterArticle" method="post">
            <div style="width: 60vh; margin-left: 400pxvh; border: 3px solid black; border-radius: 25px; text-align: center;">
                <div >
                    <h1 style="text-align: center;">Ajouter un article</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">image</label>
                        <input name="imageArticle" type="file" class="form-control" id="exampleFormControlTextarea1" placeholder="image de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">libellé</label>
                        <input name="libelleArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="nom de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">description</label>
                        <input name="descriptionArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="description de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">prix</label>
                        <input name="prixArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="prix de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">type</label>
                        <input name="typeArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="type de l'article">
                    </div>

                    <button type="submit">Ajouter l'article</button>
                </div>
            </div>
        </form>
        <form action="index.php?uc=administrer&action=modifierArticle" method="post">
            <div style="width: 60vh; margin-left: 40vh; border: 3px solid black; border-radius: 25px; text-align: center;">
                <div >
                    <h1 style="text-align: center;">Modifier un article</h1>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">id</label>
                        <input name="idArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="nom de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">image</label>
                        <input name="imageArticle" type="file" class="form-control" id="exampleFormControlTextarea1" placeholder="image de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">libellé</label>
                        <input name="libelleArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="nom de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">description</label>
                        <input name="descriptionArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="description de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">prix</label>
                        <input name="prixArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="prix de l'article">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">type</label>
                        <input name="typeArticle" type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="type de l'article">
                    </div>

                    <button type="submit">Modifier l'article</button>
                </div>
            </div>
        </form>
    </section>
</body>
</html>