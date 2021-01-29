<?php
require_once 'Animal.php';
    class Reptil extends Animal{
        private $corEscama;
        
       

        public function __construct($peso,$idade,$membros,$corEscama)
        {
           
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorEscama($corEscama);
        }
//CLASSES ABSTRATAS DA CLASSE MÃE DEVEM SER ESCRITAS NA FILHA
        public function alimentar()
        {
            echo '<p>alimentando réptil</p>';
        }
        public function emitirsom()
        {
            
            echo '<p>som de réptil</p>';
            
        }
        
        public function locomover()
        {
            echo '<p>rastejando</p>';
            
        }

        //GETTERS E SETTERS


        /**
         * Get the value of corEscama
         */ 
        public function getCorEscama()
        {
                return $this->corEscama;
        }

        /**
         * Set the value of corEscama
         *
         * @return  self
         */ 
        public function setCorEscama($corEscama)
        {
                $this->corEscama = $corEscama;

                return $this;
        }
    }
?>