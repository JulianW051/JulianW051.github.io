<?php
$dataTable = "reserveringen";
require_once("../includes/connector.php");
$sql = "SELECT * FROM reserveringen";
$stmt = $connect->prepare($sql);
//$stmt->bindParam(":id", $_GET['ID']);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
                echo        "<tr>";
                echo            "<td>" . $result['naam'] . "</td>";
                echo            "<td>" . $result['email'] . "</td>";
                echo            "<td>" . $result['datum'] . "</td>";
                echo            "<td>" . $result['tijd'] . "</td>";
                echo            "<td class='changeDelButton'><a href='../actions/delete.php?id=" . $result['ID'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
                echo        "</tr>";   
    }