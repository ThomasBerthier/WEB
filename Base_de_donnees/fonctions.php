<?php
    function afficher_requet_select($marequete)
    {
        $base = new PDO('mysql:host=localhost; dbname=Thomas_BDD_TD2_Exo2; charset=utf8','root', 'root');

        $marequete = $base->query($_POST['Requete']);

        

        //print_r($marequete);

        $i; //Lignes
        $row = $marequete->rowCount();
        $col = $marequete->columnCount(); // nb colonne

        if($row > 0)
        {

?>
<table>
                 
<?php

        while($row = $marequete->fetch())
        {
            echo "<tr>";
            for($i = 0; $i < $col; $i++)
            {
                echo "<td>".$row[$i]."</td>";
            }

                
            echo "</tr>";
        }
?>
</table>
<?php
        }
        else{
            echo"<p> Il n'y a pas de résultat</p>";
        }
    }
?>


<?php
    function insert($marequete)
    {

        try {
            $base = new PDO('mysql:host=localhost; dbname=Thomas_BDD_TD2_Exo2; charset=utf8','root', 'root');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           $base->exec($_POST['Requete']);

            echo "Insertion reussie";

        } catch (\Throwable $e) {
            echo "Oups :(";
        }

    }