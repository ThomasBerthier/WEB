<?php include "Class/ObjetExo4.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 4 :</h1>
    <?php
        $Player = new Personnage("Julien");
        echo $Player->Pseudo;
        $Monster = new personnage("Gobelin");
        $Monster->attaquer($Player);
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