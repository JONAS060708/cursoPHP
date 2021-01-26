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
private function getaltura(){return $this->altura;}
private function setaltura($altura){$this->altura = $altura;}
private function getnacionalidade(){return $this->nacionalidade;}
private function setnacionalidade($nacionalidade){$this->nacionalidade = $nacionalidade;}
private function getidade(){return $this->idade;}
private function setidade($idade){$this->idade = $idade;}
private function getnome(){return $this->nome;}
private function setnome($nome){$this->nome = $nome;}
private function getpeso(){return $this->peso;}
private function setpeso($peso){
    $this->peso = $peso;
    $this->setcategoria();
}
private function getcategoria(){return $this->categoria;}
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
        echo'<p>
        <strong>'.$this->getnome().'</strong> é um lutador com : <br>
        Peso :'.$this->getpeso().'-Kg<br>
        Vitórias :'.$this->getvitorias().'</br>
        Derrotas :'.$this->getderrotas().'</br>
        Empates :'.$this->getempates().'</br>
        </p>';
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
    class Luta{
        private $desafiado, $desafiante,$rounds,$aprovada;

        public function __construct($desafiado,$desafiante,$rounds,$aprovada){
            $this->setaprovada($aprovada);
            $this->setdesafiado($desafiado);
            $this->setdesafiante($desafiante);
            $this->setrounds($rounds);

        }

        private function getdesafiado(){return $this->desafiado;}
        private function getdesafiante(){return $this->desafiante;}
        private function getrounds(){return $this->rounds;}
        private function getaprovada(){return $this->aprovada;}

        private function setdesafiante($d){$this->desafiante = $d;}
        private function setdesafiado($d){$this->desafiado = $d;}
        private function setrounds($r){$this->rounds = $r;}
        private function setaprovada($a){$this->aprovada = $a;}
        
        public function marcarLuta(){

        }
        public function lutar(){

        }
        
    }
