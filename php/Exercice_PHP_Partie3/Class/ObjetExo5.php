<?php
//Exercice 5

    class Personnage{
        private $Pseudo;
        private $Vie;
        private $Attaque;
        private $Defense;
        private $_ID;
        private $_dbs;
        //initialise les propriétés de la classe
        public function __construct($UserID){
            $this->_dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
            $stmt = $this->_dbs->query("SELECT * FROM Personnages where _ID = '$UserID'");
            $stmt = $stmt->fetch();
            $this->_ID = $UserID;
            $this->Pseudo = $stmt["Pseudo"];
            $this->Vie = $stmt["Vie"];
            
           
        }
        //affiche la vie
        public function stats(){
            echo"<div>$this->Pseudo : $this->Vie PV";
        }
        //Indique l'attaque contre l'objet target et effectue la methode défense
        public function attaquer($target){
            echo"<div>Le $this->Pseudo sauvage a attaqué $target->Pseudo</div>";
            $this->defense($target,50);
        }
        //Décremente la vie de target de $attack et annonce sa vie
        public function defense($target, $attack){
            $target->Vie -= $attack;
            echo"<div>$target->Pseudo a perdu $attack PV</div>";
            echo"<div>Il ne reste plus que $target->Vie PV a $target->Pseudo</div>";
        }

    }