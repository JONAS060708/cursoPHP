<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 06 BANCO</title>
</head>
<body>

<form action="index.php" method="post">
<input type="submit" name="campo1" value="ligar">
<input type="submit" name="campo1" value="desligar"><br>
<input type="button" name="campo1" value="aumentar">
<input type="button" name="campo1" value="diminuir"><br>

</form>
<pre>

<?php

    echo "O valor de CAMPO 1 é: " . $_POST["campo1"]."<br>";
    //echo "<br>O valor de CAMPO 2 é: " . $_POST["campo2"]."</br>";
    $n =  $_POST["campo1"];
    var_dump($n);
    require_once "Controlador.php";
    // INICIAR OBJETO $c1 = new Object();
    $c1 = new ControleRemoto;
    //construtor do objeto
    $c1->ControleRemoto();
    print_r($c1);
    $c1->teste($n);
    
    

    //Chamar métodos $c1->metdhod();
    /**$c1->desligar();
    $c1->ligarMudo();
    $c1->desligarMudo();
    $c1->pause();
    $c1->ligar();
    $c1->play();
    $c1->maisVolume(); 
    $c1->maisVolume(); 
    $c1->maisVolume(); 
    $c1->maisVolume(); 
    $c1->menosVolume();  
    $c1->abrirMenu();
    */
    ?>
    
    <script>
        let ligar = document.querySelector('input#ligar')
        document.write(`${ligar.value}`)
    </script>
</pre>
</body>
</html>