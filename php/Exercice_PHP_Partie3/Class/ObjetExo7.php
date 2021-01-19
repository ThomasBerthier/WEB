<?php
//Exercice 7

    class Personnage{
        private $Pseudo;
        private $Vie;
        private $_ID;
        //initialise les propriétés de la classe
        public function __construct($data){
           $this->Pseudo = $data["Pseudo"];
           $this->_ID = $data["_ID"];
           $this->Vie = $data["Vie"];
        }
        //affiche les infos
        public function stats(){
            echo"<div>Personnage ".$this->_ID." : ".$this->Pseudo." ,".$this->Vie." PV";
        }
    }