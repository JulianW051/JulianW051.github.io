<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9d4f29e718.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="holder-admin">
            <div class="form-admin">
                <div class="title-reserveren">
                    <h1>
                        <span>Item</span>
                        Toevoegen
                    </h1>
                </div>
                <form class="form__group field" action="../actions/toevoegen.menuItem.php<?php if(isset($_GET['id'])){echo "?id=" . $_GET['id'];} ?>" id="target" method="post">
                    <div class="input-container">
                        <input value="<?php if(isset($_GET['gerechtNaam'])){echo $_GET['gerechtNaam'];} ?>" type="text" name="gerecht" required=""/>
                        <label>Gerecht</label>		
                    </div>
                    <div class="input-container">
                        <input value="<?php if(isset($_GET['gerechtPrijs'])){echo $_GET['gerechtPrijs'];} ?>" type="price" name="price" required=""/>
                        <label>Prijs</label>
                    </div>
                    <div class="input-container">
                        <input value="<?php if(isset($_GET['gerechtBeschrijving'])){echo $_GET['gerechtBeschrijving'];} ?>" type="text" name="beschrijving" required=""/>
                        <label>Beschrijving</label>		
                    </div>
                    <label>Categorie</label> <br>
                    <select name="categorie">
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "voorgerechten"){echo "selected='selected'";}} ?> value="voorgerechten" >voorgerechten</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "salades"){echo "selected='selected'";}} ?> value="salades" >salades</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "soepen"){echo "selected='selected'";}} ?> value="soepen" >soepen</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "noodles"){echo "selected='selected'";}} ?> value="noodles" >noodles</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "vegetarisch"){echo "selected='selected'";}} ?> value="vegetarisch" >vegetarisch</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "curry"){echo "selected='selected'";}} ?> value="curry" >curry</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "bijgerechten"){echo "selected='selected'";}} ?> value="bijgerechten" >bijgerechten</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "drinken"){echo "selected='selected'";}} ?> value="drinken" >drinken</option>
                        <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "alcohol"){echo "selected='selected'";}} ?> value="alcohol" >alcohol</option>
                    </select> <br>
                    <div class="admin-button-holder">
                        <button name="gerechtSubmit" type="submit">Voeg item toe</button>
                    </div>
                </form>
            </div>
            <a href="admin.php"><button class="btn-terug">Terug</button></a>
        </div>
    </main>
</body>
</html>