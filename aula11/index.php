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
    require_once 'Visitante.php';
    require_once 'Aluno.php';
    require_once 'Bolsista.php';


    //$p1 = new Pessoa();
    $p = array();
    $p[0] = new Visitante('ANA',17,'F');
    $p[1] = new Aluno('JUBILEU',16,'M','MEDICINA');
    $p[2] = new Aluno('MILENA',15,'f','FISICA NUCLEAR');
    $p[3] = new Bolsista('Adão',18,'M','QUIMICA','100%');

    for ($i=0; $i < sizeof($p) ; $i++) { 
        # code...
        print_r($p[$i]);
        
    }
    /**
    $p[1]->setCurso('TI');
    $p[2]->setCurso('MATEMÁTICA');
    $p[2]->setBolsa('matematica');
    $p[1]->pagarMensalidade();
    $p[2]->pagarMensalidade();
    $p[2]->renovarBolsa();
    */
   # print_r($p);
    
?>
</pre>    
</body>
</html>