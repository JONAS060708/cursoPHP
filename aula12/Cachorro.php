<?php
require_once 'Lobo.php';
class Cachorro extends Lobo
{


    public function locomover()
    {
        echo '<p>farejando</p>';
    }

    //POLIMORFISMO DE SOBRECARGA
    public function reagir($frase)
    {
        switch ($frase) {
            case 'toma comida':

            case 'olá':
                echo 'Abanar o Rabo!';
                break;

            default:
                echo 'Rosnar';
                break;
        }
    }
    public function reagir($hora, $min)
    {
        if ($hora < 12 && $min < 45) {
            echo 'abanar rabo';
        } else if ($hora >= 18) {
            echo 'Ignorar';
        } else {
            echo 'abanar e latir';
        }
    }
    public function reagir($dono)
    {
        if ($dono) {
            echo 'Abanar';
        } else {
            echo 'Rosnar e Latir';
        }
    }
    public function reagir($idade, $peso)
    {
        if ($idade < 5) {
            echo 'Cachoro novo';
            if ($peso < 10) {
                echo'Abanar';
            }else {
                echo'Latir';
            }
        } else {
            echo 'Cachorro adulto';

        }
    }
}
