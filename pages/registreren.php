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
        $page = "registreren";
        include("../includes/header.php")
    ?>
	<main>
        <div class="container2">
            <div class="registreren">
                <div class="title-reserveren">
                    <h1>
                        <span>Maak</span>
                        Account
                    </h1>
                </div>
                <form class="form__group field" action="../actions/registreren.php" id="target" method="post">
                    <div class="input-container">
                        <input  type="text" name="name" required=""/>
                        <label>Naam</label>		
                    </div>
                    <div class="input-container">
                        <input type="tel" name="tel" required=""/>
                        <label>Telefoon nummer</label>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" required=""/>
                        <label>Email</label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" required=""/>
                        <label>Wachtwoord</label>
                    </div>
                    <button type="submit">Registreren</button>
                </form>
            </div>
            <div class="inloggen">
                <div class="title-reserveren">
                    <h1>
                        <span>Naar</span>
                        Account
                    </h1>
                </div>
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <form class="form__group field" action="../actions/login.php" id="target" method="post">
                    <div class="input-container">
                        <input type="email" name="email" required=""/>
                        <label>Email</label>
                    </div>
                    <div class="input-container">
                        <input  type="password" name="password" required=""/>
                        <label>Wachtwoord</label>		
                    </div>
                    <button type="submit">Inloggen</button>
                </form>
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