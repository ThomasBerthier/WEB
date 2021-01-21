<?php
//Exercice 4

    class Personnage{

        private $Pseudo;
        private $Vie;
        private $Attaque;
        private $Defense;

        public function __construct($Name){
            $this->Vie = 100;
            $this->Pseudo = $Name;
        }
        //Indique l'attaque contre l'objet target et effectue la methode défense
        public function attaquer($target){
            echo"<div>Le $this->Pseudo sauvage a attaqué $target->Pseudo</div>";
            $this->defense($target,50);
        }
        
        //Effectue l'attaque contre target de la valeur attack
        public function defense($target, $attack){
            $target->Vie -= $attack;
            echo"<div>$target->Pseudo a perdu $attack PV</div>";
            echo"<div>Il ne reste plus que $target->Vie PV a $target->Pseudo</div>";
        }

    }