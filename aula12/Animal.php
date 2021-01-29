<?php 
abstract class Animal{
    protected $peso,$idade,$membros;


//MÉTODOS ABSTRATOS SÓ PODEM SER CRIADOS DENTRO DE CLASSES ABSTRATAS
     abstract function locomover();
     abstract function alimentar();
     abstract function emitirsom();

    public function getPeso()
    {
        return $this->peso;
    }

   
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

  
    public function getIdade()
    {
        return $this->idade;
    }

 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    
    public function getMembros()
    {
        return $this->membros;
    }

   
    public function setMembros($membros)
    {
        $this->membros = $membros;

        return $this;
    }

   
} 

?>