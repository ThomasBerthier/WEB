<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice5.css">
    <title>Exo 5</title>
</head>
<body>
    <div>
    <h1>Exercice :</h1>
        <form action="" method="post"> <!-- formulaire post-->
            <div>
            <label for="Rouge">Texte :</label>
            <input type="text" id="Rouge" name="Rouge">
            </div>
            <div>
            <button type="submit">Envoyer</button>
            </div>
        </form>
        <?php

            if(isset($_POST['Rouge'])&&($_POST['Rouge'] !="")) //test si la variable est completer et differente de rien(espace)
            {
                $Rouge=$_POST['Rouge'];
                echo "<h1> Votre texte en rouge</h1>
                <p>" .$Rouge. "</p>";
            }
            else
            {
                echo "<h1> Veuillez remplir le champ</h1>";
            } 
        ?>
    </div>
    <div>
        <a href="../index.php">Retour</a>
    </div>
    <div>
    <h1>Code source :</h1>
        <?php
            highlight_file(__FILE__); //code php
        ?>
    </div>
</body>
</html>
