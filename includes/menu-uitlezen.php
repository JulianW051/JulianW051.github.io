<?php
$dataTable = "menu";
require_once("../includes/connector.php");
$sql = "SELECT * FROM menu";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
                echo        "<tr>";
                echo            "<td>" . $result['gerecht'] . "</td>";
                echo            "<td>" . "€" . $result['prijs'] . "</td>";
                echo            "<td>" . $result['beschrijving'] . "</td>";
                echo            "<td>" . $result['categorie'] . "</td>";
                echo            "<td class='changeUpdButton'><a href='menu-toevoegen.php?id=" . $result['ID'] . "&gerechtNaam=" . $result['gerecht'] . "&gerechtBeschrijving=" . $result['beschrijving'] . "&gerechtPrijs=" . $result['prijs'] . "&gerechtCategory=" . $result['categorie'] . "#gerechtenForm'><button class='update'>Update</button></a></td>";
                echo            "<td class='changeDelButton'><a href='../actions/delete.php?id=" . $result['ID'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
                echo        "</tr>";   
    }