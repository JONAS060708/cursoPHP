<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //IMPORTANDO ARQUIVO CLASSES DO PHP
    require_once 'Caneta.php';
    //INSTANCIAR O OBJETO PELA CLASSE
    $c1 = new Caneta;
    $c1->cor = 'azul';
    $c1->carga = 5;
    $c1->ponta = 0.5;
    //$c1->tampada = false;
    $c2 = new Caneta;
    $c2->cor = 'vermelha';
    $c2->carga = 1;
    $c2->ponta = 1;

    //var_dump($c1);
    print_r($c1);
    print_r($c2);
    //chamar método
    $c1->tampar();
    $c1->destampar();
    $c1->rabiscar();
    
    print_r($c1);?><p>espaço</p><?php
    $c1->recarregar(500);
    print_r($c1);?><p>espaço</p><?php
   
    $c2->destampar();
    $c2->rabiscar();
    $c2->rabiscar();
    $c2->tampar();
    $c2->rabiscar();

        
    ?>
</body>
</html>
