<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9d4f29e718.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
	<title>Document</title>
</head>
<body>
    <?php
        $page = "index";
        include("includes/header.php")
    ?>
	<main>
        <div class="title">
            <h1>
                <span>Ons</span>
                menu
            </h1>
        </div>
        <div class="lower">
            <div class="list">
                <ul>
                    <li><a href="#voorgerechten">Voorgerechten</a></li>
                    <li><a href="#salades">Salades</a></li>
                    <li><a href="#soepen">Soepen</a></li>
                    <li><a href="#noodles">Noodles</a></li>
                    <li><a href="#vegetarisch">Vegetarisch</a></li>
                    <li><a href="#curry">Curry</a></li>
                    <li><a href="#bijgerechten">Bijgerechten</a></li>
                    <li><a href="#drinken">Drinken</a></li>
                    <li><a href="#alcohol">Alcohol</a></li>
                </ul>
            </div>
            <div class="menu">
                <div class="info">
                    <p>Natuurlijk, Vers en Biologisch<br><br> In onze Thaise authentieke keuken bereiden onze Thaise chefs alle gerechten met uitsluitend verse en natuurlijke ingrediënten! Zonder smaakversterkers of andere onnatuurlijke toevoegingen. Alle ingrediënten die biologisch te vinden zijn gebruiken wij in onze gerechten. Waardoor onze gerechten niet alleen heel lekker zijn maar ook gezond, vers en verantwoord. Eet u smakelijk, dank voor uw bestelling.</p>
                </div>
                <div class="container">
                    <form class="searchBar" action="index.php" method="post">
                        <div class="input-container">
                            <input type="text" name="search" required=""/>
                            <label>Zoeken</label>		
                        </div>
                    </form>
                    <?php 
                    // Voor de winkelmand later in de code
                    session_start();
                    // -----------------------------------

                    require_once("includes/connector.php");
                    if (isset($_POST['search'])) {

                        $likeInput = '%'.$_POST['search'].'%';

                        $sql = "SELECT * FROM menu WHERE gerecht LIKE :input OR beschrijving LIKE :input2";
                        $stmt = $connect->prepare($sql);
                        $stmt->bindParam(":input", $likeInput);
                        $stmt->bindParam(":input2", $likeInput);
                        $stmt->execute();
                        $result = $stmt->fetchAll();

                        if ($stmt->rowCount() == 0) {
                            echo"<div class='niksGevonden'>";
                            echo    "<div><h4>We hebben helaas niks kunnen vinden op: <span>" . $_POST['search'] . "</span></h4></div>";
                            echo    "<a href='index.php'><p>Klik hier om alle gerechten weer te geven!</p></a>";
                            echo"</div>";
                        } else {
                            echo"<div class='niksGevonden'>";
                            echo    "<div><h4>We hebben de volgende resultaten op: <span>" . $_POST['search'] . "</span></h4></div>";
                            echo    "<a href='index.php'><p>Klik hier om alle gerechten weer te geven!</p></a>";
                            echo"</div>";
                        }
                    }
                    ?>
                    <div class="cat voorgerechten" id="voorgerechten">
                        <h3>Voorgerechten</h3>
                        <ul>
                            <?php
                                $catagorie = "voorgerechten";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat salades" id="salades">
                        <h3>Salades</h3>
                        <ul>
                            <?php
                                $catagorie = "salades";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat soepen" id="soepen">
                        <h3>Soepen</h3>
                        <ul>
                            <?php
                                $catagorie = "soepen";
                                include("includes/menu.php")
                            ?>
                        </ul>
                    </div>
                    <div class="cat noodles" id="noodles">
                        <h3>Noodles</h3>
                        <ul>
                            <?php
                                $catagorie = "noodles";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat vegetarisch" id="vegetarisch">
                        <h3>Vegetarisch</h3>
                        <ul>
                            <?php
                                $catagorie = "vegetarisch";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat curry" id="curry">
                        <h3>Curry</h3>
                        <ul>
                            <?php
                                $catagorie = "curry"; 
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat bijgerechten" id="bijgerechten">
                        <h3>Bijgerechten</h3>
                        <ul>
                            <?php
                                $catagorie = "bijgerechten";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat drinken" id="drinken">
                        <h3>Drinken</h3>
                        <ul>
                            <?php
                                $catagorie = "drinken";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                    <div class="cat alcohol" id="alcohol">
                        <h3>Alcohol</h3>
                        <ul>
                            <?php
                                $catagorie = "alcohol";
                                include("includes/menu.php")                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
            if(empty($_SESSION['shoppingCart'])) {
                echo "<div class='winkelmand'>";
                echo     "<h2>Jouw bestelling</h2>";
                echo     "<p>Kies iets lekkers uit het menu en plaats je bestelling.</p>";
                echo     "<a href='pages/winkelmand.php'><button>Bestellen</button></a>";
                echo "</div>";
            } else {
                $prijs = 0.0;
    
                foreach($_SESSION['shoppingCart'] as $product) {
                  $prijs = $prijs + ($product['prijs'] * $product['amount']);
                }

                echo "<div class='winkelmand'>";
                echo     "<h2>Jouw bestelling</h2>";
                echo     "<p>Kies iets lekkers uit het menu en plaats je bestelling.</p>";
                echo     "<p>Totaal: " . $prijs . "</p>";
                echo     "<a href='pages/winkelmand.php'><button class='blauw'>Bestellen</button></a>";
                echo "</div>";
            }
            ?>
        </div>
	</main>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script> 
	<script src="js/main.js"></script>
	<?php
        include("includes/footer.php");
        include("includes/backToTop.php")
    ?>
</body>
</html>