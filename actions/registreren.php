<?php

include("../includes/connector.php");
//variabel opslaan
$name = $_REQUEST['name'];
$tel = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];
$pass = password_hash($pass, PASSWORD_DEFAULT);

// versturen
$sql = "INSERT INTO users (username, tel, email, wachtwoord) VALUES (?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->execute([$name, $tel, $email, $pass]);

header('Location: ../pages/registreren.php');
?>