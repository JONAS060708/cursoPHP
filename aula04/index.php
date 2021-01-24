<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 04 GETTER E SETERS E MODIFICADOREd</title>
    <style>
        body{
            background: rgb(35, 35, 35);
            color: white;
            font: normal 10pt Arial;
        }
    </style>
</head>
<body>
<pre>
<p>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta("BIC","AZUL",1.05);
    $c2 = new Caneta("CRISTAL","BRANCA",0.5);
    



    
    print_r($c1);
    print_r($c2);
    echo "Eu tenho uma caneta {$c1->getModelo()} e de ponta {$c1->getPonta()}<br>";
    echo "Eu tenho uma caneta {$c2->getModelo()} e de ponta {$c2->getPonta()}";
    ?>
</p>
</pre>    
</body>
</html>