<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 03</title>
</head>
<body>
<pre>
<p>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->cor ="vermelha";
    $c1->modelo ="Bic";    
    //$c1->ponta = 1.0;
    //$c1->carga = 10;
    
    
    print_r($c1);
    //var_dump($c1);
       
    $c1->tampar();
    $c1->recarregar(10);
    $c1->destampar();
    //$c1->rabiscar();
    
    print_r($c1);
    ?>
</p>
</pre>    
</body>
</html>