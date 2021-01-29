<?php
require_once 'Animal.php';
    class Peixe extends Animal{

        private $corEscama;

        public function __construct($peso,$idade,$membros,$corEscama)
        {
          
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorEscama($corEscama);
        }

        public function soltarBolhas(){
            echo'<p>Borbulhou!</p>';
        }
        //CLASSES ABSTRATAS DA CLASSE MÃE DEVEM SER ESCRITAS NA FILHA
        public function alimentar()
        {
            echo '<p>alimentando Peixe</p>';
        }
        public function emitirsom()
        {
            
            echo '<p>Peixe não faz som</p>';
            
        }
        
        public function locomover()
        {
            echo '<p>nadar</p>';
            
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