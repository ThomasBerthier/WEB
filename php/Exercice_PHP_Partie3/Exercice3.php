<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 3 :</h1>
    <?php
    //créé un nouveau objet
    include "Class/Personnage2.php";
    $Utilisateur = new Personnage("Julien");
    //appel de la méthode
    $Utilisateur->stats();


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
        highlight_file("Class/Personnage2.php");
        ?>
    </div>
</body>
</html>
