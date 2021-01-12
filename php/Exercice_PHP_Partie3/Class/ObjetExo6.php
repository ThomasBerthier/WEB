<?php
//Exercice 6

    class Personnage{
        private $Pseudo;
        private $Vie;
        private $Attaque;
        private $Defense;
        private $_ID;
        private $dbs;

        public function __construct($UserID){
            $this->dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
            $stmt = $this->dbs->query("SELECT * FROM Personnages WHERE _ID = '$UserID'");
            $stmt = $stmt->fetch();
            $this->_ID = $UserID;
            $this->Pseudo = $stmt["Pseudo"];
            $this->Vie = $stmt["Vie"];
           
        }

        public function stats(){
            echo"<div>$this->Pseudo : $this->Vie PV";
        }

        public function attaquer($target){
            echo"<div>$this->Pseudo a attaqué $target->Pseudo</div>";
            $this->defense($target,50);
        }

        public function defense($target, $attack){
            $target->Vie -= $attack;
            $this->dbs->query("UPDATE Personnages SET Vie='".$target->Vie."' WHERE _ID='".$target->_ID."'");
            echo"<div>$target->Pseudo a perdu $attack PV</div>";
            echo"<div>Il ne reste plus que $target->Vie PV a $target->Pseudo</div>";
        }

        public function soin() {
            echo"<div>$this->Pseudo lance un sort de guerison. Il regagne 25 PV";
            $this->Vie += 25;
            $this->dbs->query("UPDATE Personnages SET Vie='".$this->Vie."' WHERE _ID='".$this->_ID."'");
        }

    }