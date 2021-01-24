<?php
//CLASSE MODELO DO OBJETO
    class Caneta{
        //ATRIBUTOS
        public $modelo;    
        public  $cor;
        private $ponta;
        private $carga;
        protected $tampada;
        

        // geter e seters acessa e modificar atributos de uma classe
        // Método construtor
        
        function gastou(){
            if ($this->carga <= 0) {
                $this->carga = 0;
                # code...
                echo'Caneta <strong>'.$this->cor.'</strong> sem tinta! Recarregue para continuar rabiscando!<br>';
            }else {
                # code...
            $this->carga -= 5;
            echo 'A carga atual da caneta <strong>'.$this->cor.'</strong> é : '.$this->carga.'<br>';
            }
            
        }
        function recarregar($valor){
            $this->carga += $valor;
            echo 'A Caneta <strong>'.$this->cor.'</strong> foi RECARREGADA CARGA : '.$this->carga.'<br>';
        }
        private function rabiscar(){
            
            if ($this->tampada == true) {
                # code...
                echo "<p>Caneta Tampada!</p>";
            }else {
                # code...
                echo "<p>Estou Rabiscando!</p>";
                $this->gastou();       
                
            }
            
        }
        public function tampar(){
            $this->tampada = true;
        }
        public function destampar(){
            $this->tampada = false;
            $this->rabiscar();
        }

        
}

?>