<?php
    class Banco{
        public $nome;
        protected $nomeCliente;
        public $nConta;
        protected $tipoConta;
        private $saldo;

//CONSTRUTOR
        public function Banco($b,$c,$nC,$tC,$s){
            $this->nome = $b;
            $this->nomeCliente = $c;
            $this->nConta = $nC;
            $this->tipoConta = $tC;
            $this->saldo = $s;

            $this->abrirConta();
        }
//GETERS E SETERS
        public function getSaldo(){
            echo '<h2>ESTE É O Saldo atual!</h2>'; 
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
            echo '<h2>Saldo ALTERADO!</h2>';
        }
        public function getTipoConta(){
            echo '<h2>ESTE É TIPO DE CONTA!</h2>';
            return $this->tipoConta;
        }
        public function setTipoConta($tC){
            echo '<h2>TIPO DE CONTA ALTERADO!</h2>';
            $this->tipoConta = $tC;
        }
        public function getNumeroConta(){
            echo '<h2>ESTE É NUMERO DE CONTA!</h2>';
            return $this->nConta;
        }
        public function setNumeroConta($nC){
            echo '<h2>NUMERO DE CONTA ALTERADO!</h2>';
            $this->nConta = $nC;
        }
        public function getNomeCliente(){
            echo '<h2>ESTE É O NOME DO CLIENTE!</h2>';
            return $this->nomeCliente;
        }
        public function setNomeCliente($nC){
            echo '<h2>NOME DO CLIENTE ALTERADO!</h2>';
            $this->nomeCliente = $nC;
        }
        public function getNome(){
            echo '<h2>ESTE É O NOME DO BANCO!</h2>';
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = $n;
            echo '<h2>NOME DO BANCO ALTERADO!</h2>';
        }


//METODOS SIMPLES
        private function abrirConta(){
            echo '<h5>Conta Aberta!<br> Banco  '.$this->nome.'</h5>';
            echo'
            <p>
            Tipo de Conta : '.$this->tipoConta.'</br>
            Número da Conta : '.$this->nConta.'</br>
            Nome do Cliente : '.$this->nomeCliente.'</br>
            Saldo atual : R$ '.$this->saldo.',00</br>
            </p>';
        }
        public function verSaldo(){
            echo '<h2>ESTE É O SALDO DE '.$this->nomeCliente.'!</h2>';
            return $this->saldo;
        }
        public function adicionarSaldo($s){
            $this->saldo += $s;
            echo '<h2>Saldo R$ '.$s.',00 ADICIONADO para o cliente : '.$this->nomeCliente.'!</h2><h5>Saldo Atual : R$ '.$this->saldo.',00 </h5>';
        }
        public function retirarSaldo($s){
            if ($this->saldo - $s <= 0) {
                # code...
                echo ' Você não pode retirar está quantia : R$ '.$s.',00 Seu saldo atual é de : R$ '.$this->saldo.',00';
            }else{
            $this->saldo -= $s;
            echo '<h2>Saldo SACADO para o cliente : '.$this->nomeCliente.'!</h2><h5>Saldo Atual : '.$this->saldo.'</h5>';
            }
        }
        public function transferir($valor=0,$nomeCliente){

        }



    }

?>