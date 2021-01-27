<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 11</title>
</head>
<body>
<pre>
<?php
    require_once 'Pessoa.php';

    //$p1 = new Pessoa();
    $p = array();
    $p[0] = new Visitante();
    $p[1] = new Aluno();
    $p[2] = new Bolsista();

    //$p[0]->nome = 'JONAS';

    print_r($p);
    
?>
</pre>    
</body>
</html>