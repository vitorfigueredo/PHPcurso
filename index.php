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

//String Aula 18

$String_Aspas_duplas = "Quando for utilizada aspas duplas, uma variável é automaticamente concatenada, como esse exemplo do valor de: $valor_um"; //Dessa forma não é necessário utilizar . para concatenar texto com variável
echo $String_Aspas_duplas;

$string_nome = "Vitor dos Santos Figueredo";

$string_nome_primeira = "vitor dos santos figueredo";

echo "</br>";
echo "</br>";

echo strtoupper($string_nome);// transforma todo o texto em maiusculo.

echo "</br>";
echo "</br>";

echo strtolower($string_nome); // transforma o texto inteiro em letras minusculas.

echo "</br>";
echo "</br>";

echo ucwords($string_nome_primeira); // Função transforma a primera letra de cada palavra em maiuscula

echo "</br>";
echo "</br>";

$string_replace = "nome";

echo $string_replace = str_replace("o", "0", $string_replace);

echo "</br>";
echo "</br>";

$string_busca = "A repetição é mãe da retenção!";

$string_palavra_busca = "mãe";

echo $q = strpos($string_busca, $string_palavra_busca);

echo "</br>";
echo "</br>";

var_dump($q);

echo "</br>";
echo "</br>";

$string_antes_q = substr($string_busca, 0 , $q);

var_dump($string_antes_q);

echo "</br>";
echo "</br>";

$string_depois_q = substr($string_busca, $q + strlen($string_palavra_busca));

var_dump($string_depois_q);

echo "</br>";
echo "</br>";

// Usando include e require
include "incluir.php"; // Include não para execução do código
include_once "incluir.php"; // faz com que não ocorra erro caso o arquivo seja chamado 2 ou mais vezes!

echo somar(10, 36);

echo "</br>";
echo "</br>";

require "requerir.php"; // O arquivo deve existir e não pode ter erros
require_once "requerir.php"; // faz com que não ocorra erro caso o arquivo seja chamado 2 ou mais vezes!
echo diminuir(25, 14.86);

echo "</br>";
echo "</br>";

//Segue uso de Switch Case
$teste_switch = "Cu";

switch ($teste_switch) {
    case 'Oi':
        echo "Foi oi mesmo!";
        break;
    
    case 'Ai':
        echo "Deu com a cara no Porta!";
        break;
    
    default:
        echo "Está com o cu na mão!";
        break;
}

echo "</br>";
echo "</br>";

// Extrutura de repetição

for ($i=0; $i < 10; $i++) { 

    if($i > 3 && $i < 7) continue; // Não mostrar o conteudo do FOR enquanto atender o IF
    if($i > 11) break;// Para totalmente a execução do FOR quando atender o IF

    echo "Chegou a encomenda número: " . $i;
    echo "</br>";
}

echo "</br>";
echo "</br>";

//Aula Foreach

?>

<form>
    <input type="text" name="nome" id="">
    <input type="text" name="sexo" id="">
    <input type="submit" value="enviar">
</form>

<?php

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do Campo: " . $key . "</br>";
        echo "Valor: " . $value . "</br>";
        echo "<hr>";
    }
}

//Exemplo de DO WHILE, DO para executar um código, enquanto o argumento em WHILE não for atingido. Cuidar para não gerar loop infinito

$while_desconto = 0.8;
$while_total = 155;


do {
    $while_total *= $while_desconto;
} while ($while_total >= 98.5);

echo "</br>";
echo "</br>";

echo $while_total;

echo "</br>";
echo "</br>";

// Arrays
echo "Arrays de uma e duas dimensões" . "</br>";

$array_uma_dimensao[0] = "uma dimensão";
$array_uma_dimensao[1] = "uma dimensão + 01";

$array_duas_dimensoes[0][0] = "duas dimensões index 0";
$array_duas_dimensoes[0][1] = "duas dimensões index 0 + 01";

$array_duas_dimensoes[1][0] = "duas dimensões index 1";
$array_duas_dimensoes[1][1] = "duas dimensões index 1 + 01";

echo $array_uma_dimensao[0] . "</br>";
echo $array_duas_dimensoes[1][1] . "</br>";
echo end($array_duas_dimensoes[0]);

echo "</br>";
echo "</br>";

//JSON

$pessoas = array();

array_push($pessoas, array('nome' => 'Vitor Figueredo', 'idade' => 30));
array_push($pessoas, array('nome' => 'Lais Martinelli Comim', 'idade' => 30));


echo $pessoas[0]['nome'];

echo "</br>";
echo "</br>";
// Constantes

define('IP_HOST', '127.0.0.1'); // pode ser utilizado em várias versões, é comum utilizar DEFINE para banco de dados e outras constantes

echo IP_HOST;

echo "</br>";
echo "</br>";

define('DATA_BASE', ['HOST' => 'localhost', 'DB_NAME' => 'teste', 'USER_NAME' => 'Vitor_teste', 'PASSWORD' => 'teste']);

var_dump(DATA_BASE);

echo "</br>";
echo "</br>";

echo PHP_VERSION;

echo "</br>";
echo "</br>";

session_start();

$_SESSION['NAME'] = 'Vitor Testando';

echo "</br>";
echo "</br>";

function olaMundo($texto){
    return 'Olá mundo ingrato, por isso: ' . $texto;
}

echo olaMundo("Viva sem desespero!");

echo "</br>";
echo "</br>";

//Segue comparação de parametro com e sem referência. Com referênvia, permite que a função escreva na memória global o valor do parametro.
function valor_valor($valor_valor){
    $valor_valor += 50;

    return $valor_valor;
}

$valor_valor_um = 24;

echo valor_valor($valor_valor_um);

echo "</br>";
echo "</br>";

function valor_referencia(&$valor_referencia){
    $valor_referencia += 50;

    return $valor_referencia;
}

$valor_valor_dois = 24;

echo valor_referencia($valor_valor_dois);

echo "</br>";
echo "</br>";

echo $valor_valor_um . "<br>" . $valor_valor_dois;

echo "</br>";
echo "</br>";

// Abaixo função para somar todos os valores de um array, de modo que pode-se passar n parametros em uma função de soma.
function somar_tudo(float ...$valores){
    return array_sum($valores);
}

echo "A soma total de SOMAR_TUDO É = " . somar_tudo(10, 14, 34.45, 10);

echo "</br>";
echo "</br>";

//Dessa forma o retorno fica com o tipo de variável passada após os :
function somar_tudo_retorno(float ...$valores):float {
    return array_sum($valores);
}

echo "A soma total de SOMAR_TUDO_RETORNO É = " . var_dump(somar_tudo_retorno(10, 14, 34.45, 10));

echo "</br>";
echo "</br>";

echo "Funções anônimas não possuem nome nem retorno";

$funAnomina = function(){
    echo "Essa função é anônima";
};
echo "</br>";
$funAnomina();

echo "</br>";
echo "</br>";

// mostra a hora do sistema d para dia, m para mês e Y para ano com 4 digitos. H para hora em 24, i minutos e s segundos
echo date("d/m/Y H:i:s"); // no site do php olhar manual php para função date, mostra todas as combinações possíveis

echo "</br>";
echo "</br>";

echo date("D d/m/Y", $tp);

echo "</br>";
echo "</br>";
//transforma uma data no modo inglês para TimeStamp(tempo em segundos). Aceita vários tipos de valores
$tp = strtotime("1988-12-21");

echo "</br>";
echo "</br>";

//passa sistema de data para português brasil ou outro idioma/região
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo "Foi setado local BR";

echo "</br>";
echo "</br>";
// funciona com setlocale, aceita vários parametros seguidos, usando percentual junto
echo "Retorno dos parametros A e B: ";
echo strftime("%A, %B");

echo "</br>";
echo "</br>";

$obDate = new DateTime();

echo "Objeto date: ";
echo $obDate->format("d/m/Y H:i");
echo "</br>";
$adDias = new DateInterval("P15D");
$obDate->add($adDias);
echo "Objeto date + 15 dias: ";
echo $obDate->format("d/m/Y H:i");
