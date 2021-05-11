<?php 
    require("Arme.php");
    require("Personnage.php");
    try {
        $db = new PDO("mysql:host=192.168.65.204;dbname=rpg",'siteweb','siteweb');
    } catch (\Throwable $th) {
        $db = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!is_null($db)){
    ?>
    <h1>Combat :</h1>
    <?php 
        $stmt = $db->prepare("SELECT id FROM Personnage WHERE 1");
        $stmt->execute();

        $charlist = [];

        foreach($stmt as $character )
            array_push( $charlist, new Personnage( $character["id"], $db) );



        foreach ($charlist as $character) {
            $character->getNom();
            echo "<h2>Le perso $character->getId() est : $character->getNom()";
            echo"<h3>Il a comme arme :</h3>";
            foreach ($character->getSac() as $Arme) {
                echo "<h4>".$Arme->getNom()."</h4>";
            }
            
        }

        



            // echo"<h2>Le perso $id est : $->getNom() </h2>";
            // echo"<h3>Ses armes sont :";
            //                           foreach ($->getSac() as $Arme) {
            //                               echo "<h4>".$Arme->getNom()."</h4>";
            //                           }"<.h4>";
        //}
    ?>

    <?php

    ?>
    <?php
        }else{
            echo "Pas de base";
        }
    ?>
</body>
</html>