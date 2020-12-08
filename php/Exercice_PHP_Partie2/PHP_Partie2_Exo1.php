<?php include "Fonctions/TableauHTML.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice1.css">
    <title>Exercice 1</title>
</head>
<body>
    <div>
        <h1>Exercice :</h1>
        <?php Tableau() ?>
    </div>
    <div class="bottom">
        <?php Tableau() ?>
    </div>
    <div>
        <a href="../index.php">Retour</a>
    </div>
    <div>
        <h1>Code source :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code source Fonction :</h1>
        <?php highlight_file("Fonctions/TableauHTML.php"); ?>
    </div>
    
</body>
</html>