<?php
// O que é um Objeto?
// Tudo o que podemos ver e sentir! e criar descrições do mesmo
/**
 * Caracteristica 
 * Comportamento
 * estado
 * 
 * ex:
 * caneta -- material ou abstrata
 * pode ser percebida pelos sentidos? sim 
 * tem caracteristica - sim azul
 * comportamento - sim escrever
 * estado - sim tampada
 * 
 * CLASSES OU MOLDE DEVE RESOLVER TRES PERGUNTAS
 *  [ATRIBUTO] COISA QUE EU TENHO : modelo , cor, ponta, carga tampada
 *  [MÉTODOS] COISAS QUE EU FAÇO : Escrever , rabiscar, pintar, tampar, destampar
 * [ESTADO] COMOESTOU AGORA  : escrevendo, rabiscando
 */
echo '<h1>Criar [ CLASSE ]</h1>
<p>
    Classe Caneta </br>
    modelo:Caractere</br>
    cor:caractere</br>
    ponta:real</br>
    carga:interiro</br>
    tampada:logico</br>
    Metodo rabiscar()</br>
    se(tampada) entao</br>
    escreva("ERRO")</br>
    senão</br>
    Fimse</br>
    FimMetodo</br>
    Metodo tampar()</br>
    se(tampada)</br>
    escreva("já esta tampada")</br>
    senão</br>
    tampada = true</br>
    FimMedoto</br>
    FimClasse
</p>
<h1>INSTANCIAR</h1>
<h2>Criar um objeto apartir de uma CLASSE ou seja um Objeto é uma instancia de uma CLASSE!</h2>
<p>
c1 = nova Caneta</br>
c1.cor = "vermelha" <<< adicionando  atributos no objeto c1</br>
c1.tampar()</br>

c2 = nova Caneta</br>
c2.cor = "azul"</br>
c2.rabiscar() <<< Métodos para o objeto c2</br>
</p>

<h1>ABSTRAÇÃO</h1>
<p>
Abstração é retirar do objeto as coisas mais importantes que definem o mesmo
entre ATRIBUTOS E MÉTODOS
</p>
<h1>EXERCÍCIO</h1>
<h2>Classificar dois objetos concretos e dois Abstratos</h2>
Objeto 1: telefone
modelo:celular
cor:preto
carga:50



';

?>