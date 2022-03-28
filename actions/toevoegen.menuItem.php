<?php

include(../includes/connector.php)
//variabel opslaan
$name = $_POST[''];

// versturen
$sql = "INSERT INTO users (name, surname, gender) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $surname, $gender])

?>