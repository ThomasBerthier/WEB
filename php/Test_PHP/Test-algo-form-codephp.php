<?php
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];

    $facture=$prix*$quantite;

    if($facture>500){
        $facture=$facture*0.9;
    }

    echo "<h1> Calcul de facture</h1>
    <p>La facture est de ".$facture." euros</p>";
    /*echo date("d/m/y");*/ 
    ?>
    