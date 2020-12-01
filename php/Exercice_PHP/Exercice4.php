<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<div> 
    <h1>Exercice :</h1>
        <?php
            $a=4; //variables
            $b=8;
            $c=2;
            $x0=0;
            $x1=0;
            $x2=0;
            $delta=($b*$b)-4*$a*$c; //discriminant
            if($delta<0) 
            {
                echo"<p>Il n'y a pas de solution</p>";
            }
            elseif ($delta==0)
            {
                $x0=$b/2*$a;
                echo"<p>Il y a une solution :</p>
                <p>x<sub>0</sub>= ".$x0."</p>";
            }
            else
            {
                $x1=(-$b-sqrt($delta))/2*$a;
                $x0=(-$b+sqrt($delta))/2*$a;
                echo"<p>Il y a deux solutions :</p>
                <p>x<sub>1</sub>= ".$x1." et x<sub>2</sub>= ".$x2."</p>";
            }
        ?>
</div>
<div>
    <a href="../index.php">Retour</a>
</div>
<div>
    <h1>Code source :</h1>
    <p>
        <?php
            highlight_file(__FILE__); //code php
        ?>
    </p>
</div>
</body>
</html>