<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTUDO HERANÇA</title>
</head>
<body>
<pre>
    <?php
    require_once 'Integrantes.php';
        $a =array();

        $a[0] = new Aluno('Jonas',33,'M',123,'Engenharia');
        $a[1] = new Professor('SALETE',55,'F','MATEMATICA',2500.50);
        $a[2] = new Funcionario('ALINE',19,'F','ADMINISTRATIVO');
        $a[4] = new Pessoa();

        $a[4]->setNome("pessoa");
        
        $a[0]->cancelarMatricula();
        $a[1]->receberAumento(2000.95);
        $a[2]->fazerAniver();
        //$a[2]->mudarTrabalho();


        print_r($a)
    ?>
</pre>
</body>
</html>