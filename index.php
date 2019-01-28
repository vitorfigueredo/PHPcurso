<?php

$texto = "Oi meu querido"; // Variável String

$numero = 10; // Variável Int

$flutuante = 10.5; // Variável ponto flutuante

$carros = array("Corolla", "Civic", "Cruze"); // Array simples

$data = new DateTime(); // Novo objeto

var_dump($carros); // mostra informação sobre a variável em tela

echo "</br>";
echo "</br>";

$testeGet = $_GET["a"];

var_dump($testeGet);

echo "</br>";
echo "</br>";

$ip_usuario = $_SERVER["REMOTE_ADDR"];

var_dump($ip_usuario);

echo "</br>";
echo "</br>";

function variavel_nao_acessivel(){
    $ip_usuario = "192.168.0.100";
    echo $ip_usuario;
     // Variável de função e global são separadas
}

variavel_nao_acessivel();

echo "</br>";
echo "</br>";

function variavel_global_acessivel(){
    global $ip_usuario;

    echo $ip_usuario;
}

variavel_global_acessivel();

echo "</br>";
echo "</br>";

$valor_um = 10;
$valor_dois = 10;

// Operadores Atribuição

$op_atribuicao = "="; //Atribuir valor a uma variável
$op_concatenacao = " . " . "<= é o ponto mesmo";
$op_adicao_de_variavel = '$variavel_1 .= "o que adicionar (normalmente texto)"';
$op_incrementar_variavel_valor_qualquer = '$variavel += valor(numero)';
$op_decrementar_variavel_valor_qualquer = '$variavel -= valor(numero)';
$op_multiplicar_variavel_valor_qualquer = '$variavel *= valor(numero)';
$op_dividir_variavel_valor_qualquer = '$variavel /= valor(numero)';
$op_potencializar_variavel_valor_qualquer = '$variavel **= valor(numero)';

echo $valor_um +=2; // testar operadores de Atribuição
echo "</br>";
echo "</br>";

//Operadores Aritiméticos (operações matemáticas)
$op_adicao = "+";
$op_subtracao = "-";
$op_multiplicacao = "*";
$op_divisao = "/";
$op_potencia = "**";
$op_resto_divisao = "%";

echo $valor_dois % 3 . " Resto de Divisão"; // testar operadores de Aritiméticos

echo "</br>";
echo "</br>";

//Operadores de comparação
$op_igualdade_valor = "==";
$op_igualdade_tipo_valor = "===";
$op_maior = ">";
$op_menor = "<";
$op_diferente_valor = "!=";
$op_diferente_tipo_valor = "!==";
$op_maior_igual_ou_menor_unico =  '$a <=> $b, mostra 1 para $a maior, 0 para $a e $b iguais e -1 para $b maior'; 
$op_descartar_valor_nulo_mostrar = '$a ?? $b ?? $c, se $a for NULL mostrará b, mas se $b também NULL mostrará C ou se todos forem NULL, não mostrará nenhum! Mostrará somente o primeiro valor não NULL. APENAS PHP 7';

$valor_null = NULL;
$valor_null_b = NULL;
$valor_null_c = 9;

echo $valor_null ?? $valor_null_b ?? $valor_null_c;

echo "</br>";
echo "</br>";

//Operadores Lógicos

echo "</br>";
echo "</br>";

//String