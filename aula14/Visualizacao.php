<?php
require_once'Video.php';
require_once'Gafanhoto.php';

class Visualizacao {

    private $espectador,$filme;

    //a agragação acontece no index.php onde as classes se encontram
    public function __construct($espectador,$filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        //usa outro tipo de chamado dos atributos, colocando antes dos getters e setters os atributos da atual classe 
        $this->filme->setViews($this->filme->getViews()+1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido()+1);
    }
    public function avaliar(){
        //pega o mesmo atributo e referencia para a classe desejada
        $this->filme->setAvaliacao(5);
        echo'<p>Avaliação Normal + 5pt , Total : '.$this->filme->getAvaliacao().'</p>';
    }

    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
        echo'<p>Avaliação Por Nota : '.$nota.'pt , Total:  '.$this->filme->getAvaliacao().'</p>';
    }

    public function avaliarPorc($porc){
        $nota = 0;
        if ($porc <= 20) {
            $nota = 3;
        } else if ($porc <=50) {
            $nota = 6;
        }else if ($porc <= 90) {
            $nota = 8;
        }else{
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
        echo'<p>Avaliação Porcentagem '.$porc.'% total: '.$this->filme->getAvaliacao().'</p>';
    }


    /**
     * Get the value of espectador
     */ 
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */ 
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }

    /**
     * Get the value of filme
     */ 
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */ 
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }
}



?>