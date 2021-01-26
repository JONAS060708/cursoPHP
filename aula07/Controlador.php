<?php
// BUSCAR INTERFACE
require_once 'Interface.php';
//CLASSE
    class Lutador implements LutadorI {
    //ATRIBUTOS privados
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
      

//CONSTRUTOR
public function __construct($nome='',$nacionalidade='',$idade=0,$altura=0,$peso=0,$vitorias=0, $derrotas=0,$empates=0)
{
    $this->nome=$nome;
    $this->nacionalidade=$nacionalidade;
    $this->idade=$idade;
    $this->altura=$altura;
    $this->setpeso($peso);
   
    $this->vitorias=$vitorias;
    $this->empates=$empates;
    $this->derrotas=$derrotas;
    
}        
//MÉTODOS ESPECIAIS GETERS E SETERS NA MAIORIA PRIVADOS
public function getaltura(){return $this->altura;}
public function setaltura($altura){$this->altura = $altura;}
public function getnacionalidade(){return $this->nacionalidade;}
public function setnacionalidade($nacionalidade){$this->nacionalidade = $nacionalidade;}
public function getidade(){return $this->idade;}
public function setidade($idade){$this->idade = $idade;}
public function getnome(){return $this->nome;}
public function setnome($nome){$this->nome = $nome;}
public function getpeso(){return $this->peso;}
public function setpeso($peso){
    $this->peso = $peso;
    $this->setcategoria();
}
public function getcategoria(){return $this->categoria;}
private function setcategoria(){
    $v = $this->getpeso();
    if ($v < 52) {
        echo'CATEGORIA INVÁLIDA';
    }else if ($v <= 70) {
        $this->categoria = 'LEVE';
    }else if($v <= 83){
        $this->categoria = 'MÉDIO';
    }else if($v <= 120){
        $this->categoria = 'PESADO';
    }else{
        echo'CATEGORIA INVÁLIDA';
    }

}
private function getvitorias(){return $this->vitorias;}
private function setvitorias($vitorias){$this->vitorias = $vitorias;}
private function getempates(){return $this->empates;}
private function setempates($empates){$this->empates = $empates;}
private function getderrotas(){return $this->derrotas;}
private function setderrotas($derrotas){$this->derrotas = $derrotas;}

//METODOS PUBLICOS USADOS NA INTERFACE
    public function apresentarLuta(){
        echo'<h1>----------APRESENTAÇÃO------------</h1>
       
        Chegou a grande Hora o Lutador '.$this->getnome().' 
        com a idade de  '.$this->getidade().' 
        e ALTURA de  '.$this->getaltura().'m 
        e é de nacionalidade '.$this->getnacionalidade().' 
        com PESO de '.$this->getpeso().'Kg 
        luta na CATEGORIA  '.$this->getcategoria().' 
        até hoje teve '.$this->getvitorias().' vitórias no cartel 
        apenas '.$this->getderrotas().' derrotas  
        e '.$this->getempates().' empates 
        
        ';
    }
    public function status(){
        echo'
        <strong>'.$this->getnome().'</strong> é um lutador com Peso :'.$this->getpeso().'-Kg Vitórias :'.$this->getvitorias().' Derrotas :'.$this->getderrotas().' Empates :'.$this->getempates().'
        ';
    }    
    public function ganharLuta(){
        $this->setvitorias($this->getvitorias() +1 );
    }
    public function perderLuta(){
        $this->setderrotas($this->getderrotas() +1 );
    }
    public function empatarLuta(){
        $this->setempates($this->getempates() +1 );
    }     
    }

    //----------------------------------------//
    
