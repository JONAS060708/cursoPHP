<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERANÇA</title>
    <style>
        body{
            background: black;
            color: blanchedalmond;
        }
        i#iguais{
            color: red;
        }
    </style>
</head>
<body>
<h1>ESTUDO DE HERANÇA</h1>
<hr>HERANÇA<hr>
    <P>Permite basear uma nova CLASSE na definição de uma outra CLASSE previamente existente</P>
    <p>A Herança será aplicada tanto para as características filhas quanto para os comportamentos</p>
    <h1>EXEMPLO</h1>
    <hr>CLASSE - Aluno<hr>
    <p>
    <i id="iguais">private $nome;</br>
    private $idade;</br>
    private $sexo;</i></br>
    private $matricula;</br>
    </p>
    <hr>MÉTODOS <hr>
    <i id="iguais">public fazerAniver(){}</i></br>
    public cancelarMatricula(){}</br>
    <h1>-------------------------------------------</h1>
    <hr>CLASSE - Professor<hr>
    <p>
    <i id="iguais">private $nome;</br>
    private $idade;</br>
    private $sexo;</i></br>
    private $especialidade;</br>
    private $salario;</br>
    </p>
    <hr>MÉTODOS <hr>
    <i id="iguais">public fazerAniver(){}</i></br>
    public receberAumento(){}</br>
    <h1>-------------------------------------------</h1>
    <hr>CLASSE - Funcionario<hr>
    <p>
    <i id="iguais">private $nome;</br>
    private $idade;</br>
    private $sexo;</i></br>
    private $setor;</br>
    private $trabalhando;</br>
    </p>
    <hr>MÉTODOS <hr>
    <i id="iguais">public fazerAniver(){}</i></br>
    public mudarTrabalho(){}</br>
    <h1>-------------------------------------------</h1>
    
    <h1>Nota-se que as CLASSES tem atributos iguais</h1>
    <p>Podemos então criar uma nova Classe com estes atributos semelhantes para diminuirmos o Códiogo Ex:</p>
    <hr>CLASSE - Pessoa <hr>
    <i id="iguais">private $nome;</br>
    private $idade;</br>
    private $sexo;</i></br><hr>
    <i id="iguais">public fazerAniver(){}</i><hr></br>

    <?php
        echo'php';
    ?>
</body>
</html>