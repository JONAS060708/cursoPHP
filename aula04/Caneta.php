<?php
//CLASSE MODELO DO OBJETO
    class Caneta{
        //ATRIBUTOS
        private $modelo;
        private $ponta;
        private $cor;
        private $tampada;

        //MÉTODO CONSTRUTOR INICIA O CODIGO AUTOMATICAMENTE
        //public function Caneta(){ /*__construct()  ou o nome da classe*/
          //  $this->cor = "AZUL";
          //  $this->tampar();
        //} OUTRO TIPO DE CONSTRUTOR MAIS DINAMICO RECEBENDO OS VALORES
        public function Caneta($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;

            /*$this->setMdelo($m);
            $this->setPonta($p);
            $this->setCor($c);*/
            $this->tampar();

        }
        public function tampar(){
            $this->tampada = true;
        }

       //INICIANDO COM GETTER E SETERS DENTRO DA CLASSE

       public function getModelo(){
            return $this->modelo;
       }
       public function setMdelo($m){
           $this->modelo = $m;
       }

       public function getPonta(){
           return $this->ponta;
       }
       public function setPonta($p){
           $this->ponta = $p;
       }

       public function getCor(){
        return $this->cor;
    }
       public function setCor($c){
        $this->cor = $c;
    }

}

?>