<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 09</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<pre>
<?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';
    $p = array();
    $l = array();
    $p[0] = new Pessoa("Jonas",33,'M');
    $p[1] = new Pessoa("Sabrina",25,'F');
    
    $leitor = $p[0]->getNome(); //Busca propriedade/atributo privada da CLASSE pelo método publico

    //COLOCANDO OBJETO INTEIRO DENTRO DE OUTRO OBJETO
     $l[0] = new Livro('O Mago','Paulo Coelho',150,$p[0]); 
     $l[1] = new Livro('OS TRÊS PORQINHOS','Paulo Coelho',10,$p[0]); 
     $l[2] = new Livro('ALICE NO PAIS DAS MARAVILHAS','Paulo Coelho',550,$p[1]); 
    //$l[0] = new Livro('O Mago','Paulo Coelho',150,$leitor);
    
    $l[0]->abrir();
    $l[0]->folhear(1);
    $l[0]->avacarPag();
    $l[0]->avacarPag();
    $l[0]->avacarPag();
    $l[0]->voltarPag();
   
    
    for ($i=0; $i < sizeof($l) ; $i++) { 
        $l[$i]->detalhes();
    }

   // print_r($p);
   // print_r($l);


?>
</pre>
<script src="front.js"></script>    
</body>
</html>