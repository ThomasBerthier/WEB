<?php
    //Exercice 9
    class Personnage {
        private $_ID;
        private $_Pseudo;
        private $_dbs;
        //initialise les propriétés de la classe
        public function __construct($dbs) {
            $this->_dbs = $dbs;
        }


        //supprime un personnage
        public function delete() {
            $stmt2 = $this->_dbs->query("DELETE FROM Personnages WHERE _ID = ".$_POST["Personnages"]);

        }
    }