<?php 

    class Personnage{

        private $_id;
        private $_nom;
        private $_degat;
        private $_vie;
        private $_db;
        private $_sac;

        //method
        //id et db en parametre, va chercher les infos du personnage avec l'id passé
        public function __construct($id, $db){
            $this->_id = $id;
            $this->_db = $db;
            
            $stmt = $db->prepare("SELECT * FROM Personnage WHERE id = ?");
            $stmt->execute(array($id));

            //Si id trouvée, initialisation
            if($tab = $stmt->fetch()){
                $this->_nom = $tab["nom"];
                $this->_degat = $tab["degat"];
                $this->_vie = $tab["vie"];

                //si existe on va chercher ses armes
                $stmt2 = $db->prepare(
                                       "SELECT idArme FROM Equipement, Personnage 
                                       WHERE Personnage.id = Equipement.idPersonnage 
                                       AND Personnage.id = ?"
                                     );
                $stmt2->execute(array($this->_id));
                $this->_sac = array();
                while($tab = $stmt2->fetch()){
                    array_push($this->_sac, new Arme($tab['idArme'], $db));
                }

            }

        }

        public function getNom(){
            return $this->_nom;
        }

        public function getId(){
            return $this->_id;
        }

        public function getSac(){
            return $this->_sac;
        }

    }

?>