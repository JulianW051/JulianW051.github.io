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
        $page = "contact";
        include("../includes/header.php")
    ?>
	<main>
        <div class="container2">
            <div class="form">
                <div class="title-reserveren">
                    <h1>
                        <span>Maak</span>
                        reservering
                    </h1>
                </div>
                <form class="form__group field" action="../actions/reservering.php" id="target" method="post">
                    <div class="input-container">
                        <input  type="text" name="name" required=""/>
                        <label>Full Name</label>		
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" required=""/>
                        <label>Email</label>
                    </div>
                    <div class="input-container">
                        <input type="date" name="date" required=""/>
                    </div>
                    <div class="input-container">
                        <input type="time" name="time" required=""/>
                    </div>
                    <button type="submit">Maak reservering</button>
                </form>
            </div>
            <div class="tijden">
                <div class="title-reserveren">
                    <h1>
                        <span>Openings</span>
                        tijden
                    </h1>
                </div>
                <div class="tijden-list">
                    <ul class="dagen">
                        <li>Maandag</li>
                        <li>Dinsdag</li>
                        <li>Woensdag</li>
                        <li>Donderdag</li>
                        <li>Vrijdag</li>
                        <li>Zaterdag</li>
                        <li>Zondag</li>
                    </ul>
                    <ul>
                        <li>16:00 - 21:00</li>
                        <li>16:00 - 21:00</li>
                        <li>16:00 - 21:00</li>
                        <li>16:00 - 21:00</li>
                        <li>16:00 - 21:00</li>
                        <li>16:00 - 21:00</li>
                        <li>15:00 - 21:00</li>
                    </ul>
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