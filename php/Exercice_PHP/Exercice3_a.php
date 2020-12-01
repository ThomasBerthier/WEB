<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3a</title>
</head>
<body>
<div> 
    <h1>Exercice :</h1>
    <p>
            <?php
                $i=0;
                $tableau = [[ //tableau avec 3 lignes chaques ligne entre []
                    'Nom'=>"Berthier",
                    'Prenom'=>"Thomas",
                    'MotDePass'=>"abcd"
                ],
                [
                    'Nom'=>"Berthier",
                    'Prenom'=>"Thomas",
                    'MotDePass'=>"abcd"
                ],
                [
                    'Nom'=>"Berthier",
                    'Prenom'=>"Thomas",
                    'MotDePass'=>"abcd",
                ]];
                for($i=0;$i<3;$i++) //boucle affichage 
                {
                echo
                    "<p>". $tableau[$i]['Nom']."\t"
                    .$tableau[$i]['Prenom']."\t"
                    .$tableau[$i]['MotDePass']. "</td>";
                }
            ?>
    </p>
</div>
<div>
    <a href="../index.php">Retour</a>
</div>
<div>
    <h1><b>Code source :</h1>
    <p>
        <?php
            highlight_file(__FILE__); //code php
        ?>
    </p>
</div>
</body>
</html>