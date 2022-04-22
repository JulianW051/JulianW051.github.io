<?php
    include("../includes/session.php")
?>
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
        <div class="title">
            <h1>
                <span>Personeel</span>
                Panel
            </h1>
        </div>
        <div class="reserveringen-admin">
            <h2>reserveringen</h2>
            <table>
                <tr> 
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Datum</th>
                    <th>Tijd</th>
                    <th></th>
                </tr>
                <?php  
                    include("../includes/reserveringen-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="bestellingen-admin">
            <h2>Bestellingen</h2>
            <table>
                <tr> 
                    <th>producten</th>
                    <th>prijs</th>
                    <th>aantal</th>
                    <th></th>
                </tr>
                <?php  
                    include("../includes/bestellingen-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="bestellingen-admin">
            <h2>Contact opnemen</h2>
            <table>
                <tr> 
                    <th>Naam</th>
                    <th>Nummer</th>
                    <th>Email</th>
                    <th>Bericht</th>
                    <th></th>
                </tr>
                <?php  
                    include("../includes/contact-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="menu-admin">
            <h2>Menu</h2>
            <a href="menu-toevoegen.php"><button>Item toevoegen</button></a>
            <table>
                <tr> 
                    <th>gerecht</th>
                    <th>prijs</th>
                    <th>beschrijving</th>
                    <th>categorie</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php  
                    include("../includes/menu-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="home">
            <a href='../index.php'>Home</a>
        </div>
    </main>
</body>
</html>