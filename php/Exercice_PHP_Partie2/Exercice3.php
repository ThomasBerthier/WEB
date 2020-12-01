<?php include "Fonctions/Moyenne.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exercice3.css">
    <title>Exercice 3</title>
</head>
<body>
    <div>
        <h1>Exercice :</h1>
        <table>
            <form action="" method="post">
                <tr>
                    <th>Valeurs : </th>
                    <td><input type="number" name="Valeur1" id="Valeur1"></td>
                    <td><input type="number" name="Valeur2" id="Valeur2"></td>
                    <td><input type="number" name="Valeur3" id="Valeur3"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="Calcul">Calcul</button></td>
                </tr>  
            </form> 
        </table>   
    </div>
    <div class="bottom">
        <?php
            if(isset($_POST['Calcul'])){
                moyenne(
                    array($_POST['Valeur1'],$_POST['Valeur2'],$_POST['Valeur3'])
                );
            }
        ?>
    </div>

   
    <div>
        <a href="../index.php">Retour</a>
    </div>
    <div>
        <h1>Code source :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code source Fonction :</h1>
        <?php highlight_file("Fonctions/Moyenne.php"); ?>
    </div>
    
</body>
</html>