<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice6.css">
    <title>Exo 6</title>
</head>
<body>
    <div>
    <h1>Exercice :</h1>
        <form action="" method="get"> <!-- formulaire get -->
            <div>
            <label for="Violet">Texte :</label>
            <input type="text" id="Violet" name="Violet">
            </div>
            <div>
            <button type="submit">Envoyer</button>
            </div>
        </form>
        <?php

            if(isset($_GET['Violet']) && $_GET['Violet'] != "") //test si variable completer et si differente de rien(espace)
            {
                $Violet=$_GET['Violet'];
                echo "<h1> Votre texte en violet</h1>
                <p>" .$Violet. "</p>";
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

