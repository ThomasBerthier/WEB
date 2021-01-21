<?php 
    //Exercice8
    class Personnage {
        private $_Pseudo;
        private $_Vie;
        private $_dbs;
        //initialise les propriétés de la classe
        public function __construct($dbs) {
            $this->_dbs = $dbs;
            $this->_Pseudo = $_GET["Pseudo"];
            $this->_Vie = $_GET["Vie"];

        }
        //insère un nouveau personnage
        public function insert() {
            $stmt = $this->_dbs->query("INSERT INTO Personnages(Pseudo, Vie) VALUES ('".$this->_Pseudo."', '".$this->_Vie."')");
        }
    }