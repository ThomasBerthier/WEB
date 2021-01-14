<?php
    class Personnage {
        private $_ID;
        private $_Pseudo;
        private $_dbs;

        public function __construct($dbs) {
            $this->_dbs = $dbs;
        }



        public function delete() {
            $stmt2 = $this->_dbs->query("DELETE FROM Personnages WHERE _ID = ".$_POST["Personnages"]);

        }
    }