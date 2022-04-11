<?php
if(isset($_POST['gerechtSubmit'])) {
    require_once("../includes/connector.php");

    $_POST['price'] = str_replace(",",".", $_POST['price']);

    if(isset($_GET['id'])) {
        // Update
        $sql = "UPDATE menu SET gerecht = :gerechtNaam, beschrijving = :gerechtBeschrijving, prijs = :gerechtPrijs, categorie = :category WHERE  ID = :id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->bindParam(':gerechtNaam', $_POST['gerecht']);
        $stmt->bindParam(':gerechtBeschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':gerechtPrijs', $_POST['price']);
        $stmt->bindParam(':category', $_POST['categorie']);
        $stmt->execute($data);

        header ("Location: ../admin/admin.php");
    } else {
        // Create
        $sql = "INSERT INTO menu(gerecht, beschrijving, prijs, categorie) VALUES(:gerechtNaam, :gerechtBeschrijving, :gerechtPrijs, :category)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':gerechtNaam', $_POST['gerecht']);
        $stmt->bindParam(':gerechtBeschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':gerechtPrijs', $_POST['price']);
        $stmt->bindParam(':category', $_POST['categorie']);
        $stmt->execute();

        header ("Location: ../admin/admin.php");
    }
} else {
    header ("Location: ../menu-toevoegen.php");
}