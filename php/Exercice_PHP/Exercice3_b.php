<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3b</title>
</head>
<body>
<div> 
    <h1>Exercice :</h1>
    <p>
    <table border=1px>
            <?php
                $i=0;
                $tableau = [[ //tableau avec x lignes chaques ligne entre []
                    "'Nom"=>"Berthier",
                    "'Prenom"=>"Thomas",
                    "'MotDePass"=>"abcd"
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
                ],
                [
                    'Nom'=>"Je suis",
                    'Prenom'=>"La nouvelle",
                    'MotDePass'=>"Colonne"
                ],
                [
                    'Nom'=>"Je suis",
                    'Prenom'=>"La deuxieme",
                    'MotDePass'=>"Nouvelle",
                ]];
                for($i=0;$i<sizeof($tableau);$i++) //boucle affichage avec comme valeur stop la longueur du tableau
                {
                echo //renvoi sous forme de tablau
                    "<tr>
                    <td>". $tableau[$i]['Nom']. "</td>
                    <td>". $tableau[$i]['Prenom']. "</td>
                    <td>". $tableau[$i]['MotDePass']. "</td>
                    </tr>";
                }
            ?>
    </table>
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