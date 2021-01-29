<?php
class Pessoa{ // CLASSE MÃE "PROGENITORA ou SUPER CLASSE"
    //ATRIBUTOS
    private $nome, $idade, $sexo;



    //GETERS E SETERS
    public function getNome(){ return $this->nome;}
    public function setNome($nome){$this->nome = $nome; }
    //GETERS E SETERS
    public function getIdade(){ return $this->idade;}
    public function setIdade($idade){$this->idade = $idade; }
    //GETERS E SETERS
    public function getSexo(){ return $this->sexo;}
    public function setSexo($sexo){$this->sexo = $sexo; }

    //MÉTODOS SIMLES
    public function fazerAniver(){
        $this->idade++;
    }
}
?>