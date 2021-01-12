<?php 
    class Personnage {
        private $_Pseudo;
        private $_Vie;

        public function __construct() {
            $this->_Pseudo = $_GET["Pseudo"];
            $this->_Vie = $_GET["Vie"];
        }

        public function insert() {
            try {
                $dbs = new PDO('mysql:host=localhost;dbname=Thomas_Objet_Exo5', "root", "root");
            } catch (ErrorException $e) {
                echo $e;
            }
            $stmt = $dbs->query("INSERT INTO Personnages(Pseudo, Vie) VALUES ('".$this->_Pseudo."', '".$this->_Vie."')");
        }
    }