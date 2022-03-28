<?php

include("../includes/connector.php");
//variabel opslaan
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$date = $_REQUEST['date'];
$time = $_REQUEST['time'];

// versturen
$sql = "INSERT INTO reserveringen (naam, email, datum, tijd) VALUES (?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->execute([$name, $email, $date, $time]);

header('Location: ../pages/reserveren.php');
?>