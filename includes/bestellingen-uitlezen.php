<?php
$dataTable = "bestellingen";
require_once("../includes/connector.php");
$sql = "SELECT * FROM bestellingen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
                echo        "<tr>";
                echo            "<td>" . $result['producten'] . "</td>";
                echo            "<td>" . $result['prijs'] . "</td>";
                echo            "<td>" . $result['aantal'] . "</td>";
                echo            "<td class='changeDelButton'><a href='../actions/delete.php?id=" . $result['ID'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
                echo        "</tr>";   
    }