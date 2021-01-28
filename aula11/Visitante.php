<?php
require_once 'Pessoa.php';

class Visitante extends Pessoa{
    //não cria nada ---herança de implementação
    public function __construct($nome='',$idade=0,$sexo='')
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        
        
    }
}

?>