<?php
    require_once'Pessoa.php';
     class Gafanhoto extends Pessoa{

        private $login,$totAssistido;

        public function __construct($nome='',$idade=0,$sexo='',$login='')
        {
            //chamada a classe principal
            parent ::__construct($nome, $idade,$sexo);
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);          
            $this->setLogin($login);
            $this->totAssistido=0;

        }

        public function viuMaisUm()
        {
            $this->setTotAssistido($this->getTotAssistido()+1);
            echo'<p>Visualização número : '.$this->getTotAssistido().'</p>';
        }









        /**
         * Get the value of login
         */ 
        public function getLogin()
        {
                return $this->login;
        }

        /**
         * Set the value of login
         *
         * @return  self
         */ 
        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }

        /**
         * Get the value of totAssistido
         */ 
        public function getTotAssistido()
        {
                return $this->totAssistido;
        }

        /**
         * Set the value of totAssistido
         *
         * @return  self
         */ 
        public function setTotAssistido($totAssistido)
        {
                $this->totAssistido = $totAssistido;

                return $this;
        }
    }


?>