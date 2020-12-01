<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2.2</title>
</head>
<body>
<div> 
    <h1>Exercice :</h1>
    <p>
    <table border=1px>
        <tr>
            <?php
                $i=0; //variable
                $tableau = array( //creation du tableau de 3 cases
                    'Nom'=>"Berthier",
                    'Prenom'=>"Thomas",
                    'MotDePass'=>"abcd",
                );
                echo
                    "<td>". $tableau['Nom']. "</td>
                    <td>". $tableau['Prenom']. "</td>
                    <td>". $tableau['MotDePass']. "</td>";
            ?>
        </tr>
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