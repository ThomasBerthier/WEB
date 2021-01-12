<?php include "Class/ObjetExo7.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 7 :</h1>
    <?php
        $Tableau = Array();
        $dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
        $stmt = $dbs->query("SELECT * FROM Personnages");
        while($user = $stmt->fetch()) {
            array_push($Tableau, new Personnage($user));
        }
        ?><table><?php
        foreach ($Tableau as $key) {
            $key->stats();
        }  
        ?>
    </table>
    <div>
        <h1>Code :</h1>
        <?php 
            highlight_file(__FILE__);
        ?>
    </div>
    <div>
        <h1>Code Class :</h1>
        <?php
            highlight_file("Class/ObjetExo7.php");
        ?>
    </div>
</body>
</html>