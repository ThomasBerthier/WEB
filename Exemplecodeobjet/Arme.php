<?php

    class Arme{

        private $_id;
        private $_nom;
        private $_degat;
        private $_db;

        //method

        public function __construct($id, $db){

            $this->_id = $id;
            $this->_db = $db;
            
            $stmt = $db->prepare("SELECT * FROM Arme WHERE id = ?");
            $stmt->execute(array($id));

            //Si id trouvée, initialisation
            if($tab = $stmt->fetch()){
                $this->_nom = $tab["nom"];
                $this->_degat = $tab["degat"];

                //si existe on va chercher ses armes
            }
        }
        
        public function getNom(){
            return $this->_nom;
        }
    }

?>