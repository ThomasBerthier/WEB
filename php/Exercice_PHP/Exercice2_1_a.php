<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2.1 a</title>
</head>
<body>
    <div>
    <h1>Exercice</h1>
    <p>
        <?php
            $tableau[4]=0; //variable
            $i=0; //incrementation
            for($i=0;$i<5;$i++) //boucle generation chiffres
            {
                $tableau[$i]=rand (0,10);
            }
            for($i=0;$i<5;$i++) //boucle affichage chiffres
            {
                echo $tableau[$i]."\t";
            }

        
        ?>
    </p>    
    </div>
    <div>
        <a href="../index.php">Retour</a>
    </div>
    <div>
    <h1>Code source :</h1>
    <p>
        <?php
            highlight_file(__FILE__); //code php
        ?>
    </p>
    </div>
</body>
</html>