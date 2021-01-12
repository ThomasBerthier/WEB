<?php
//Exercice 3

    class Personnage{

        private $Pseudo;
        private $Vie;

        public function __construct($LePseudo) {

            $this->Vie = 100;
            $this->Pseudo = $LePseudo;

            
        }

        public function stats(){

            echo"Votre personnage $this->Pseudo a $this->Vie PV";
        }
    }


?>