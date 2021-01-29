<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //cria atributos e métodos -- herança da diferença
    private $curso;

   
    public function __construct($nome='',$idade=0,$sexo='',$curso='')
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        
    }

   // public final function pagarMensalidade(){ //METODOS COM FINAL NÃO PODEM SER SOBREPOSTOS
    public  function pagarMensalidade(){
        echo "<h1>Aluno ".$this->getNome()." Pagou mensalidade</h1>";
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}

?>