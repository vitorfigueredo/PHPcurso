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

function variavel_nao_acessivel(){
    echo $ip_usuario;
     // Variável de função e global são separadas
}

variavel_nao_acessivel();

function variavel_global_acessivel(){
    global $ip_usuario;

    echo $ip_usuario;
}
