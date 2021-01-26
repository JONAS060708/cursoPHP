<?php
// BUSCAR INTERFACE
require_once 'Interface.php';
//CLASSE
    class ControleRemoto implements ControleRemotoI {
    //ATRIBUTOS    
       private $volume;
       private $ligado;
       private $tocando;

//CONSTRUTOR
public function ControleRemoto()
{
    $this->volume = 10;
    $this->ligado = false;
    $this->tocando = false;
}
        
//MÉTODOS ESPECIAIS GETERS E SETERS
        private function getVolume(){return $this->volume;}
        private function setVolume($v){$this->volume = $v;}
        
        private function getLigado(){return $this->ligado;}
        private function setLigado($l){$this->ligado = $l;}
        
        private function getTocando(){return $this->tocando;}
        private function setTocando($t){$this->tocando = $t;}     

//METODOS SIMPLES
        public function teste($v){
           switch ($v) {
               case 'ligar':
                   $this->ligar();
                   break;
               case 'desligar':
                    $this->desligar();
                    break;     
               case 'aumentar':
                    $this->ligar();
                    $this->abrirMenu();
                   $this->maisVolume();
                    break;                
               default:
                   echo "COMANDO NÃO ENCONTRADO<br>";
                   break;
           }
        }

        public function ligar(){
            $this->setLigado(true);
            echo '<h1>LIGOU!</h1>';
        }
        public function desligar(){
            $this->setLigado(false);
            echo '<h1>DESLIGOU!</h1>';
        }
        public function abrirMenu(){
            if ($this->getLigado()) {
                # code...
                echo '<br>'.$this->getVolume()."<br>";
            for ($i=0; $i < $this->getVolume() ; $i++) { 
                # code...
                echo '|';
            }
            }else {
                echo'<h1>APARELHO DESLIGADO!</h1>';
            }
            
        }
        public function fecharMenu(){}
        public function maisVolume(){
            if ($this->getLigado() && $this->getVolume() <= 99) {
                # code...
                $this->setVolume($this->getVolume() +1 );
            }else if ($this->getLigado() && $this->getVolume() == 100) {
                # code...
                echo '<h1>Volume já está no máximo!</h1>';
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }
        public function menosVolume(){
            if ($this->getLigado() && $this->getVolume() >= 1) {
                # code...
                $this->setVolume($this->getVolume() -1 );
            }else if ($this->getLigado() && $this->getVolume() == 0) {
                # code...
                echo '<h1>Volume já está no mínimo</h1>';
                $this->abrirMenu();
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }
        public function ligarMudo(){
            if ($this->getLigado()) {
                # code...
                $this->setTocando($this->getVolume() > 0);
                $this->setVolume(0);
                echo $this->getVolume();
                echo'<h1>MUDO ATIVO!</h1>';
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }
        public function desligarMudo(){
            if ($this->getLigado()) {
                # code...
                $this->setTocando($this->getVolume() == 0);
                $this->setVolume(10);
                echo $this->getVolume();
                echo'<h1>MUDO DESATIVADO!</h1>';
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }
        public function play(){
            if ($this->getLigado()) {
                # code...
                $this->setTocando(true);
                echo'<h1>TOCANDO!</h1>';
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }
        public function pause(){
            if ($this->getLigado()) {
                # code...
                $this->setTocando(false);
                echo'<h1>PAUSADO!</h1>';
            }else {
                echo'<h1>Aparelho desligado!</h1>';
            }
        }



    }
