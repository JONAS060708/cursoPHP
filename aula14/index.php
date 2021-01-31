<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIOS</title>
</head>
<body>
    <pre>
<?php
        require_once'Gafanhoto.php';
        require_once'Video.php';

    $v = array();//video
    $g =array();//gafanhotos

    $v[0] = new Video('Programação');
    $v[1] = new Video('COMBATE');

    $g[0] = new Gafanhoto('Jonas');
    $g[1] = new Gafanhoto('Figaro');

    $v[0]->play();
    $v[1]->play();

    $v[0]->like();
    $v[1]->like();
    $v[1]->like();

    $g[0]->viuMaisUm();
    $g[0]->viuMaisUm();

    for ($i=0; $i <sizeof($v) ; $i++) { 
        
        print_r($v[$i]);
       
    }
    for ($i=0; $i <sizeof($g) ; $i++) { 
               
        print_r($g[$i]);
    }
    


    ?>
    </pre>
</body>
</html>