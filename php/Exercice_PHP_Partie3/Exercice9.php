<?php include "Class/ObjetExo9.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 9 :</h1>
<?php
    $dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
    $stmt = $dbs->query("SELECT * FROM Personnages")
?>
    <form action="" method="post">
        <select name="Personnages">
            <?php

            foreach ($stmt as $key) {
                ?>
                <option value="<?php echo $key["_ID"];?>"><?php echo $key["Pseudo"];?></option>
                <?php
            }
        ?>
        </select>
        <input type="submit" value="Delete" name="Submit">
    </form>
        
    <?php
        if(isset($_POST["Submit"])) {
            if(isset($_POST["Personnages"])) {
                $delete = new Personnage($dbs);
                $delete->delete();
            }
        }

    ?>
    <div>
        <h1>Code :</h1>
        <?php 
            highlight_file(__FILE__);
        ?>
    </div>
    <div>
        <h1>Code Class :</h1>
        <?php
            highlight_file("Class/ObjetExo7.php");
        ?>
    </div>
</body>
</html>