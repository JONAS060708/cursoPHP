<?php
    class Pessoa{
        //atributos
        private $nome,$idade,$sexo;
        
        
        //construtor
        public function __construct($nome='',$idade=0,$sexo='')
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }


        //geters e seters
        public function getNome(){return $this->nome;}

        //métodos simples
        public function fazerAniver(){

        }

    }

?>