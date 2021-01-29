<?php
//classe abstrata nao cria objetos não pode ser instanciada
    
abstract class  Pessoa{
        
    protected $nome;
    protected $idade;
    protected $sexo;

   

    public function getNome(){return $this->nome;}
    public function setNome($nome){$this->nome = $nome;}
    

    public final function  fazerAniver(){
        echo'<h1>Pessoa fez aniversário</h1>';
        $this->idade ++;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}
