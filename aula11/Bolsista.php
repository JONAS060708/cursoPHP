<?php
require_once 'Aluno.php';

class Bolsista extends Aluno{
    //Sub classe de Aulno herda tudo de aluno e tudo de pessoa
    private $bolsa;

    public function __construct($nome,$idade,$sexo,$curso,$bolsa)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setCurso($curso);
        $this->setBolsa($bolsa);
    }

    public function getBolsa(){return $this->bolsa;}
    public function setBolsa($bolsa){$this->bolsa = $bolsa;}

    public function renovarBolsa(){
        echo'<h1>Bolsista Renovou Bolsa</h1>';
    }
    //metodo vai sobrepor o método do aluno
    public function pagarMensalidade(){
        echo'<h1>Bolsista Pagou mensalidade</h1>';
    }

   

    

  

   

    
}

?>