<?php
require_once 'Animal.php';
    class Ave extends Animal{

        private $cordaPena;

        public function __construct($peso,$idade,$membros,$cordaPena)
        {
      
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCordaPena($cordaPena);
        }

        public function fazerNinho(){
            echo'<p>Construindo Ninho!</p>';
        }
        //CLASSES ABSTRATAS DA CLASSE MÃE DEVEM SER ESCRITAS NA FILHA
        public function alimentar()
        {
            echo '<p>alimentando ave</p>';
        }
        public function emitirsom()
        {
            
            echo '<p>emitir som de ave</p>';
            
        }
        
        public function locomover()
        {
            echo '<p>voar</p>';
            
        }

        //GETTERS E SETTERS


        /**
         * Get the value of cordaPena
         */ 
        public function getCordaPena()
        {
                return $this->cordaPena;
        }

        /**
         * Set the value of cordaPena
         *
         * @return  self
         */ 
        public function setCordaPena($cordaPena)
        {
                $this->cordaPena = $cordaPena;

                return $this;
        }
    }


?>