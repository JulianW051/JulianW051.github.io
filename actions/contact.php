<?php

include("../includes/connector.php");
//variabel opslaan
$name = $_REQUEST['name'];
$tel = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$bericht = $_REQUEST['bericht'];

// versturen
$sql = "INSERT INTO contact (naam, nummer, email, bericht) VALUES (?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->execute([$name, $tel, $email, $bericht]);


if ($_GET['page'] == "index") {
    header('Location: ../index.php');
} else if ($_GET['page'] === "registreren") {
    header('Location: ../pages/registreren.php');
} else if ($_GET['page'] === "contact") {
    header('Location: ../pages/reserveren.php');
}else if ($_GET['page'] === "winkelmand") {
    header('Location: ../pages/winkelmand.php');
}
?>