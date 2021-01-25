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
    $c1 = new Conta();
    $c2 = new Conta();
    $c1->Conta('Banrisul','Jonas',1,'Corrente',10);    
    $c2->Conta("SICREDI","Nicolle",0001,"POUPANÇA",107);
    
    
   //echo $c1->adicionarSaldo(100);
   echo $c1->adicionarSaldo(10);
   echo $c1->retirarSaldo(15);


    ?>
   
</body>
</html>