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
