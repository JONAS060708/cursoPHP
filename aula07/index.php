<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 07 BANCO</title>
</head>

<body>

    <pre>

<?php
require_once "Controlador.php";
require_once "luta.php";
$L = array(2);
$L[0] = new Lutador('Sabrina', 'Brasileiro', 25, 1.56, 58, 1, 0, 0);
$L[1] = new Lutador('Leticia', 'Brasileiro', 34, 1.57, 52, 0, 1, 0);
/**
 * $L[2] = new Lutador('Sabrina','Brasileiro',26,1.56,56,0,0,0);
 * $L[3] = new Lutador('GOKU','DRAGON BAL Z',36,1.85,120);
 * $L[4] = new Lutador('VEGETA','DRAGON BAL Z',39,1.70,80);
 * $L[5] = new Lutador('MIA KALIFA','MEXICU',22,1.65,54,1000,0,0);
 */


$luta = new Luta;

$luta->marcarLuta($L[0], $L[1]);
$luta->lutar();

for ($i = 0; $i < sizeof($L); $i++) {
    $L[$i]->status();
}




?>
    
    <script>
        
    </script>
</pre>
</body>

</html>