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
                <!-- <ul>
                    <li>
                        <span>
                            <span class='aantal'>aantal
                                <a class="min-plus" href=""><button>-</button></a>
                                <span class="aantal-nummer">1</span>
                                <a class="min-plus" href=""><button>+</button></a>
                            </span>
                        </span>
                        <b> gerecht </b><br>
                        <span class='description'>beschrijving</span>
                    </li>
                </ul>   -->
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