<?php
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
                echo        "</tr>";   
    }