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
    <?php
        $page = "winkelmand";
        include("../includes/header.php")
    ?>
	<main>
        <div class="title">
            <h1>
                <span>Jouw</span>
                winkelmand
            </h1>
        </div>
        <div class="container">
        <?php
        session_start();
        if(isset($_GET['action'])) {

            // Iets toevoegen aan de winkelmand
            if ($_GET['action'] == "add") {
                if (isset($_SESSION['shoppingCart'])) {
                
                    $place = array_search($_GET['id'], array_column($_SESSION['shoppingCart'], 'id'));
                
                    $exists = false;

                    $amount = $_SESSION['shoppingCart'][$place]['amount'];

                    foreach($_SESSION['shoppingCart'] as $current) {
                        if ($current['id'] == $_GET['id']) {
                            $amount++;
                            $exists = TRUE;
                        }
                    }

                    if ($exists == TRUE) {

                    $_SESSION['shoppingCart'][$place]['amount'] = $amount;
                    header('Location: winkelmand.php');
                    
                    } else {

                    $count = count($_SESSION['shoppingCart']);
                    $_SESSION['shoppingCart'][$count] = array(
                            
                        'id' => $_GET['id'],
                        'amount' => 1,
                        'naam' => $_GET['naam'],
                        'prijs' => $_GET['prijs'],
                        'beschrijving' => $_GET['beschrijving'],
            
                    );
                    header('Location: ../index.php');
                    }

                } else {

                    $_SESSION['shoppingCart'][0] = array(
            
                    'id' => $_GET['id'],
                    'amount' => 1,
                    'naam' => $_GET['naam'],
                    'prijs' => $_GET['prijs'],
                    'beschrijving' => $_GET['beschrijving'],
            
                    );
                    header('Location: ../index.php');

                }
            }

            // Verwijderen uit de winkelmand 
            if ($_GET['action'] == "remove") {
                $place = array_search($_GET['id'], array_column($_SESSION['shoppingCart'], 'id'));

                $amount = $_SESSION['shoppingCart'][$place]['amount'];
      
                if ($amount > 1) {
      
                  $amount--;
                  $_SESSION['shoppingCart'][$place]['amount'] = $amount;
                  header('Location: winkelmand.php');
      
                } else {
      
                  unset($_SESSION['shoppingCart'][$place]);
                  $_SESSION['shoppingCart'] = array_values($_SESSION['shoppingCart']);
                  header('Location: winkelmand.php');
      
                }
            }
        }  ?>

            <div class="cat mand-item">
                <div class="winkelmandf wLeft">
                    <h4>gerecht</h4>
                    <p>beschrijving</p>
                </div>
                <div class="winkelmandf wMiddle">
                    <h5>Aantal</h5>
                    <a href=""><button>-</button></a>
                    <h2>1</h2>
                    <a href=""><button>+</button></a>
                </div>
                <div class="winkelmandf wRight">
                    <h5>Prijs</h5>
                </div>
            </div>
            <div class="winkelmand-total">
                <div class="winkelmand-total-details">
                    <p>Totaal:</p><p class="winkelmand-totaal-prijs">Prijs</p>
                    <button>Bestellen</button>
                </div>
            </div>
        </div>
	</main>
	<?php
        include("../includes/footer.php");
        include("../includes/backToTop.php")
    ?>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script> 
	<script src="../js/main.js"></script>
</body>
</html>