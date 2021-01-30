<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLIMORFISMO</title>
</head>
<body>

    <pre>
    <?php
    require_once'Mamifero.php';
    require_once'Reptil.php';
    require_once'Ave.php';
    require_once'Peixe.php';
    require_once'Lobo.php';
    require_once'Cachorro.php';
    $a = array();

    $a[0] = new Mamifero(100,10,4,'PRETO');
    $a[1] = new Reptil(2,5,0,'CORAL');
    $a[2] = new Ave(3,7,4,'PRATA');
    $a[3] = new Peixe(500,3,2,'AZUL');

    $a[4] = new Lobo(50,12,5,'Branco');
    $a[5] = new Cachorro(5,4,4,"colorido");
    
    for ($i=0; $i < sizeof($a); $i++) { 
        print_r($a[$i]);
    }

    $a[0]->locomover();
    $a[1]->locomover();
    $a[2]->locomover();
    $a[3]->locomover();
    $a[4]->locomover();
    $a[5]->locomover();

    $a[5]->reagirD('');



    ?>
    </pre>
</body>
</html>