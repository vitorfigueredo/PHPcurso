<?php

require_once "codigoJSON.php";

//echo json_encode($pessoas); // Gera um json a partir de Array

$dados = '[
    {
    "nome": "Vitor Figueredo",
    "idade": 30
    },
    {
    "nome": "Lais Martinelli Comim",
    "idade": 30
    }
    ]';
var_dump(json_decode($dados, true)); // Transforma JSON em Array do PHP, necessário colocar true para eliminar a palavra objeto da frente do array.

?>