<?php
session_start();
require_once('../includes/connector.php');

$aantalItems = 0;
$prijs = 0.0;
$producten = null;

foreach($_SESSION['shoppingCart'] as $product) {
    $producten = $producten . ($product['naam'] . " " . (string)$product['amount'] . "x, ");

    $aantalItems = $aantalItems + $product['amount'];

    $prijs = $prijs + ($product['prijs'] * $product['amount']);
}

$sql = "INSERT INTO bestellingen(producten, prijs, aantal) VALUES(:producten, :prijs, :aantal)";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':producten', $producten);
$stmt->bindParam(':prijs', $prijs);
$stmt->bindParam(':aantal', $aantalItems);
$stmt->execute();

unset($_SESSION['shoppingCart']);

header('Location: ../index.php');
