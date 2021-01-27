<?php
require_once 'Pessoa.php';

// ALUNO, PROFESSOR, FUNCIONÁRIO SÃO CLASSES FILHAS "SUB-CLASSE" DE PESSOA
class Aluno extends Pessoa{
    //atributos
    private $matricula,$curso;

    //Construtor
    public function __construct($nome='',$idade=0,$sexo='',$matricula=0,$curso='')
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->matricula = $matricula;
        $this->curso=$curso;

        
    }
    //geters e seters
    
    
    //Métodos Simples
    public function cancelarMatricula(){
        $this->matricula = 0;
        echo'<h1>MATRICULA CANCELADA PELO ALUNO!</h1>';
    }
}
class Professor extends Pessoa{
    private $especialidade,$salario;
    
    
    public function __construct($nome='',$idade=0,$sexo='',$especialidade='',$salario=0)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->especialidade = $especialidade;
        $this->salario=$salario;

      
    }
    

    public function receberAumento($aumento){
        $this->salario += $aumento;

    }

}
class Funcionario extends Pessoa{
    private $setor,$trabalhando;


    public function __construct($nome='',$idade=0,$sexo='',$setor='',$trabalhando=true)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setor = $setor;
        $this->trabalhando=$trabalhando;

        
    }

    public function mudarTrabalho(){
        $this->trabalhando = !$this->trabalhando;
    }
}


?>