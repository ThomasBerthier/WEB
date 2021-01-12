<?php include "Class/ObjetExo5.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 5 :</h1>
    <?php
        $Player = new Personnage(1);
        $Player->stats();
    ?>
    <div>
        <h1>Code :</h1>
        <?php 
            highlight_file(__FILE__);
        ?>
    </div>
    <div>
        <h1>Code Class :</h1>
        <?php
            highlight_file("Class/ObjetExo4.php");
        ?>
    </div>
</body>
</html>