<?php include "Class/Utilisateur.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Exercice1.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1 :</h1>
    <table class="border">
        <tr>
            <td class="border">User</td>
        </tr>
        <tr >
            <td>-Nom : String</td>
        </tr>
        <tr>
           <td>-Prenom : String</td>
        </tr>
        <tr>
            <td class="border">+AfficheUser() : Void</td>
        </tr>
        
    </table>
    <div>
    <h1>Code :</h1>
    <?php
        highlight_file(__FILE__);
    ?>
    </div>
    <div>
    <h1>Code class :</h1>
    <?php
        highlight_file("Class/Utilisateur.php");
    ?>
    </div>
    
</body>
</html>