<?php include "Class/ObjetExo6.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 6 :</h1>
    <?php
        $Player = new Personnage(1);
        $Player2 = new Personnage(2);
        $Player->stats();
        $Player2->attaquer($Player);
        $Player->stats();
        $Player->soin();
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
            highlight_file("Class/ObjetExo6.php");
        ?>
    </div>
</body>
</html>