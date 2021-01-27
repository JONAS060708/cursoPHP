<?php
//classe abstrata nao cria objetos
    abstract class  Pessoa{
        
    private $nome;

    public final function  fazerAniver(){

    }
}

class Visitante extends Pessoa{
    //não cria nada ---herança de implementação
}

class Aluno extends Pessoa{
    //cria atributos e métodos -- herança da diferença
    private $curso;

    public function pagarMensalidade(){

    }
}

class Bolsista extends Aluno{
    //Sub classe de Aulno herda tudo de aluno e tudo de pessoa
    private $bolsa;

    public function renovarBolsa(){

    }
    //metodo vai sobrepor o método do aluno
    public function pagarMensalidade(){

    }
}






?>