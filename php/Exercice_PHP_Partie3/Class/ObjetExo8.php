<?php 
    class Personnage {
        private $_Pseudo;
        private $_Vie;
        private $_dbs;

        public function __construct($dbs) {
            $this->_dbs = $dbs;
            $this->_Pseudo = $_GET["Pseudo"];
            $this->_Vie = $_GET["Vie"];

        }

        public function insert() {
            $stmt = $this->_dbs->query("INSERT INTO Personnages(Pseudo, Vie) VALUES ('".$this->_Pseudo."', '".$this->_Vie."')");
        }
    }