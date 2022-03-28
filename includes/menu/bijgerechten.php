<?php
require_once("includes/connector.php");
$sql = "SELECT * FROM menu";
$stmt = $connect->prepare($sql);
//$stmt->bindParam(":id", $_GET['ID']);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['prijs']);

        if($result['categorie'] === "bijgerechten") 
        {
            
                echo        "<li>";
                echo            "<a href=''>";
                echo                "<span>";
                echo                    "<span class='price'>€ " . $roundendPrice . "</span>";
                echo                "</span>";
                echo            "<b>" . $result['gerecht'] . "</b><br>";
                echo            "<span class='description'>" . $result  ['beschrijving'] . "</span>";
                echo            "</a>";
                echo        "</li>";  
            
        }
    }