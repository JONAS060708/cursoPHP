<?php
//CLASSE MODELO DO OBJETO
    class Caneta{
        //ATRIBUTOS
        var $modelo;    
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;


        function gastou(){
            if ($this->carga <= 0) {
                $this->carga = 0;
                # code...
                echo'Caneta <strong>'.$this->cor.'</strong> sem tinta! Recarregue para continuar rabiscando!<br>';
            }else {
                # code...
            $this->carga -= 1;
            echo 'A carga atual da caneta <strong>'.$this->cor.'</strong> é : '.$this->carga;
            }
            
        }
        function recarregar($valor){
            $this->carga += $valor;
            echo 'A Caneta <strong>'.$this->cor.'</strong> foi RECARREGADA CARGA : '.$this->carga.'<br>';
        }
        function rabiscar(){
            
            if ($this->tampada == true) {
                # code...
                echo "<p>Caneta Tampada!</p>";
            }else {
                # code...
                echo "<p>Estou Rabiscando!</p>";
                $this->gastou();       
                
            }
            
        }
        function tampar(){
            $this->tampada = true;
        }
        function destampar(){
            $this->tampada = false;
        }

        
}

?>