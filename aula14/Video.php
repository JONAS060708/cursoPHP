<?php
require_once'VideoInterface.php';
class Video implements VideoI{
    private $titulo,$avaliacao,$views,$curtidadas,$reproduzindo;


    
    public function __construct($titulo='')
    {
        $this->setTitulo($titulo);
        $this->avaliacao=1;
        $this->views=0;
        $this->curtidadas=0;
        $this->reproduzindo=false;

    }

    //IMPRELENTAÇÃO DA INTERFACE
    public function play(){
                $this->setReproduzindo(true);
                echo'<p>Reproduzindo Vídeo!'.$this->getTitulo().'</p>';
    }
    public function pause(){
        $this->setReproduzindo(false);
        echo'<p>Reproduzindo Vídeo!</p>';
    }
    public function like(){
        $this->setCurtidadas($this->getCurtidadas()+1);
        echo'<p>Curitiu o Video : '.$this->getTitulo().'</p>';
    }
            

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */ 
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     *
     * @return  self
     */ 
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }

    /**
     * Get the value of views
     */ 
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */ 
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of curtidadas
     */ 
    public function getCurtidadas()
    {
        return $this->curtidadas;
    }

    /**
     * Set the value of curtidadas
     *
     * @return  self
     */ 
    public function setCurtidadas($curtidadas)
    {
        $this->curtidadas = $curtidadas;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */ 
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @return  self
     */ 
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }


    

}



?>