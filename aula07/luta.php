<?php
require_once 'Controlador.php';

class Luta
{
    //RELACIONAMENTO DE CLASSES AGREGAÇÃO
    private $desafiado, $desafiante, $rounds, $aprovada;

    /*public function __construct($desafiado,$desafiante,$rounds,$aprovada){
        $this->setaprovada($aprovada);
        $this->setdesafiado($desafiado);
        $this->setdesafiante($desafiante);
        $this->setrounds($rounds);

    }
*/
    private function getdesafiado()
    {
        return $this->desafiado;
    }
    private function getdesafiante()
    {
        return $this->desafiante;
    }
    private function getrounds()
    {
        return $this->rounds;
    }
    private function getaprovada()
    {
        return $this->aprovada;
    }

    private function setdesafiante($d)
    {
        $this->desafiante = $d;
    }
    private function setdesafiado($d)
    {
        $this->desafiado = $d;
    }
    private function setrounds($r)
    {
        $this->rounds = $r;
    }
    private function setaprovada($a)
    {
        $this->aprovada = $a;
    }

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getcategoria() == $l2->getcategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar()
    {
        if ($this->aprovada) {
            //chama os métodos da outra CLASSE
            $this->desafiante->apresentarLuta();
            $this->desafiado->apresentarLuta();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo '<h2>EMPATE!</h2>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo '<p>' . $this->desafiado->getnome() . ' venceu a luta! </p>';
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo '<p>' . $this->desafiante->getnome() . ' venceu a luta! </p>';
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;

                default:
                    echo '<h1>ERRO NA LUTA!</h1>';
                    break;
            }
        } else {
            echo '<p>LUTA NÃO PODE ACONTECER!</p>';
        }
    }
}
