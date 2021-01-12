<?php
//Exercice 5

    class Personnage{
        private $Pseudo;
        private $Vie;
        private $Attaque;
        private $Defense;
        private $_ID;

        public function __construct($UserID){
            $dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
            $stmt = $dbs->query("SELECT * FROM Personnage where _ID = '$UserID'");
            $stmt = $stmt->fetch();
            $this->_ID = $UserID;
            $this->Pseudo = $stmt["Pseudo"];
            $this->Vie = $stmt["Vie"];
            
           
        }

        public function stats(){
            echo"<div>$this->Pseudo : $this->Vie PV";
        }

        public function attaquer($target){
            echo"<div>Le $this->Pseudo sauvage a attaqué $target->Pseudo</div>";
            $this->defense($target,50);
        }

        public function defense($target, $attack){
            $target->Vie -= $attack;
            echo"<div>$target->Pseudo a perdu $attack PV</div>";
            echo"<div>Il ne reste plus que $target->Vie PV a $target->Pseudo</div>";
        }

    }