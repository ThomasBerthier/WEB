<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Test php</title>
</head>
<body>
    <div>
        <h1>Calcul d'une facture</h1>
    
        <?php
        $facture;
        $prix=100;
        $quantite=6;

        $facture=$prix*$quantite;

        if($facture>500){
            $facture=$facture*0.9;
        }

        echo "<p>La facture est de ".$facture." euros</p>"
        ?>
    </div>
   
</body>
</html>
