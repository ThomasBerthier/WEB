<?php
include "Class/ObjetExo8.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 8 :</h1>
    <form action="" method="get">
        <label for="Pseudo">Pseudo</label>
        <input type="text" name="Pseudo" id="Pseudo">
        <label for="Vie">Vie</label>
        <input type="text" name="Vie" id="Vie">
        <input type="submit" value="Valider" name="Submit">
    </form>
    <?php
    if(isset($_GET["Submit"])) {
        if(isset($_GET["Pseudo"]) && isset($_GET["Vie"])) {
            $Player = new Personnage();
            $Player->insert();
        }
    }
    ?>
</body>
</html>