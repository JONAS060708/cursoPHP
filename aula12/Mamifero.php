<?php
require_once 'Animal.php';
    class Mamifero extends Animal{
        private $corPelo;

        

        public function __construct($peso,$idade,$membros,$corPelo)
        {
           
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setMembros($membros);
            $this->setCorPelo($corPelo);
        }
       //CLASSES ABSTRATAS DA CLASSE MÃE DEVEM SER ESCRITAS NA FILHA
       public function alimentar()
       {
           echo '<p>Mamando</p>';
       }
       public function emitirsom()
       {
           
           echo '<p>som de mamifero</p>';
           
       }
       
       public function locomover()
       {
           echo '<p>correr</p>';
           
       }

       //GETTERS E SETTERS

        public function getCorPelo()
        {
                return $this->corPelo;
        }

        public function setCorPelo($corPelo)
        {
                $this->corPelo = $corPelo;

                return $this;
        }
    }
