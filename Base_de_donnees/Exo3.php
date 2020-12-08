<?php include "fonctions.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="Requete">Requête :</label>
        <input type="text" name="Requete" id="Requete">
        <input type="submit" name="Envoyer" value="Envoyer">
    </form>
    <?php
        if(isset($_POST["Envoyer"]))
        {
            insert($_POST["Requete"]);
        }
    ?>
    <h1>Code source :</h1>
    <?php
        highlight_file(__FILE__);
    ?>
    <h1>Code fonction :</h1>
    <?php
        highlight_file("fonctions.php");
    ?>
</body>
</html>