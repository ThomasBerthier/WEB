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
    <p>
        <?php
             $NombreAleatoire = rand (0,100); //variable
        
            if($NombreAleatoire%2==1) //test nombre
            {
                echo "<p class='blue'>le nombre ".$NombreAleatoire." est impair</p>";
            }
            else
            {
                echo "<p class='red'>le nombre " .$NombreAleatoire. " est pair</p>";
            }
    
            
        ?>
    </p>    
    </div>
    <div>
    <h1>Code source :</h1>
    <p>
        <?php
            highlight_file(__FILE__); //Affiche code php
        ?>
    </p>
    </div>
    <div>
        <a href="../index.php">Retour</a>
    </div>
</body>
</html>