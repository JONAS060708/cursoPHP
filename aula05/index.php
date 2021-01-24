<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 05 BANCO</title>
</head>
<body>
    <?php
    require_once "Banco.php";
    $c1 = new Banco("Banrisul","Jonas",0001,"POUPANÇA",10);
    
    echo $c1->adicionarSaldo(100);
    echo $c1->adicionarSaldo(10);
    echo $c1->retirarSaldo(125);


    ?>
</body>
</html>