<?php include "Fonctions/TableauHTML2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <div>
        <h1>Exercice :</h1>
        <?php Tableau("Titre","Titre","Titre") ?>
    </div>
    <div>
        <a href="../index.php">Retour</a>
    </div>
    <div>
        <h1>Code source :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code source Fonction :</h1>
        <?php highlight_file("Fonctions/TableauHTML2.php"); ?>
    </div>
    
</body>
</html>