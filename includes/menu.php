<?php
if (isset($_POST['search'])) {

    $likeInput = '%'.$_POST['search'].'%';
    
    $sql = "SELECT * FROM menu WHERE gerecht LIKE :input OR beschrijving LIKE :input2";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":input", $likeInput);
    $stmt->bindParam(":input2", $likeInput);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['prijs']);

        if($result['categorie'] === $catagorie) 
        {
            
            echo        "<li>";
            echo            "<a href='pages/winkelmand.php?id=" . $result['ID'] . "&naam=" . $result['gerecgt'] . "&prijs=" . $roundendPrice . "&beschrijving=" . $result['beschrijving'] . "'>";
            echo                "<span>";
            echo                    "<span class='price'>€ " . $roundendPrice . "</span>";
            echo                "</span>";
            echo            "<b>" . $result['gerecht'] . "</b><br>";
            echo            "<span class='description'>" . $result  ['beschrijving'] . "</span>";
            echo            "</a>";
            echo        "</li>";  
            
        }
    }

} else {

    $sql = "SELECT * FROM menu";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['prijs']);

        if($result['categorie'] === $catagorie) 
        {
            
                echo        "<li>";
                echo            "<a href='pages/winkelmand.php?id=" . $result['ID'] . "&naam=" . $result['gerecht'] . "&prijs=" . $roundendPrice . "&beschrijving=" . $result['beschrijving'] . "&action=add'>";
                echo                "<span>";
                echo                    "<span class='price'>€ " . $roundendPrice . "</span>";
                echo                "</span>";
                echo            "<b>" . $result['gerecht'] . "</b><br>";
                echo            "<span class='description'>" . $result  ['beschrijving'] . "</span>";
                echo            "</a>";
                echo        "</li>";  
            
        }
    }
}