<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERANÇA 02</title>
    <style>
        td{
            border: solid orange;
            text-align: center;
            font: normal 8pt Arial;
        }
        td#descrição{
            color: red;
        }
        i{
            color: red;
        }
    </style>
</head>
<body>
<h5>HERANÇA IMPLEMENTAÇÃO-DIFERENÇA E NOMENCLATURAS</h5><hr>
Navegação pela Herança<br> 
de cima para baixo é chamado de ESPECIALIZAÇÃO <br>
de baixo para cima é chamada de GENERALIZAÇÃO

<table>
<tr>
<td>A</td><td id="descrição"> < Classe MÃE Raiz (progênitora / super classe) Ancestral de ABAA...</td> 
</tr>
<tr>
<td>AA</td>
<td>AB</td>
<td>AC</td><td id="descrição" > << Classes Filhas (sub classes de A)</td>
</tr>
<tr>
<td>AAA</td><td>ABA | ABB</td><td>ACA</td><td id="descrição" > <<< Descendente de A</td>
</tr>
<tr>
<td></td><td>ABAA / ABAB | ----------------- </td><td></td><td id="descrição" > << Classe FILHA DE ABA</td>
<h3>SUB CLASSES HERDAM TUDO O QUE SUAS SUPER CLASSE TEM</h3>
<h3>Clasees que não tem filhas são chamadas de FOLHAS</h3>
</tr>
</table>
<h2>TIPOS DE HERANÇA</h2>
<h3>HERANÇA DE IMPLEMENTAÇÃO</h3>
<P>Classe herda da mãe e nada mais.</P>
<h3>HERANÇA PARA DIFERENÇA </h3>
<P>Classe herda da mãe e faz implementações como precisar.</P>
<i>CLASSE ABSTRATA</i>
<p>Não pode ser instanciada apenas serve como progênitora, não gera objetos</p>
<i>CLASSE FINAL</i>
<p>Não pode herdar outra Classe OBRIGATÓRIAMENTE FOLHA, não pode ter filhos</p>
<i>MÉTODO ABSTRATO</i>
<p>Declarado mas não implementado na progenitora, podendo ser colocada apenas na interface</p>
<i>MÉTODO FINAL</i>
<p>Não pode ser subescrito por suas sub-classes OBRIGATÓRIAMENTE herdado</p>

<?php



?>
    
</body>
</html>