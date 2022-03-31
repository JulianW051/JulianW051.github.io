<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9d4f29e718.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
    <main>
        <table>
            <tr> 
                <th>Naam</th>
                <th>Email</th>
                <th>Datum</th>
                <th>Tijd</th>
            </tr>
            <?php  
                include("../includes/reserveringen-uitlezen.php")
            ?>
        </table>
    </main>
</body>
</html>