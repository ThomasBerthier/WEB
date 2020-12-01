<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <div>
        <h1>Exercice :</h1>
        <?php
            session_start();
        ?>    
        <form action="" method="post">
            <div>
                <label for="Nom">Nom :</label>
                <input type="text" id="Nom" name="Nom">
            </div>
            <div>
                <button type="submit">Envoyer</button>
                <button type="submit" name='delete'>Delete</button>
            </div>
        </form>

        <?php
            

            if(isset($_POST["Nom"]) && ($_POST["Nom"] != ""))
            {
                
                $_SESSION['Nom']=$_POST['Nom'];
            }

            if(isset($_POST['delete']))
            {
                unset($_SESSION['Nom']);
            }
            
            if(isset($_SESSION['Nom']))
            {
                echo"<p>Bienvenue M." .$_SESSION['Nom'];
            }
            else
            {
                echo"<p>Completer le champ.</p>";
            }
                
            ?>
        </div>
        <div>
            <a href="../index.php">Retour</a>
        </div>
        <div>
            <h1>Code source :</h1>
            <?php
                highlight_file(__FILE__);
            ?>
        </div>
</body>
</html>

