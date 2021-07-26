<?php

/**
 AULA - INTRODUÇÃO AO PHP
 
 CRIE UM PROJETO EM PHP PARA UMA COMPETIÇÃO DE NATAÇÃO, O SISTEMA DEVERÁ PERMITIR A INSERÇÃO DE
 COMPETIDORES COM SEU NOME E IDADE, E O SISTEMA DEVERÁ IDENTIFICAR EM QUAL CATEGORIA O NADADOR
 IRÁ COMPETIR, POR EXEMPLO, 6 A 12 ANOS CATEGORIA INFANTIL, DE 13 A 18 CATEGORIA ADOLESCENTE,
 ACIMA DE 18 CATEGORIA ADULTO, O SISTEMA DEVERÁ RETORNAR A CATEGORIA PARA CADA NADADOR QUE FOR
 CADASTRADO.
 
 **/

include "serviços/session_message.php";
include "serviços/field_validation.php";
include "serviços/competition_category.php";

// $nome = 'Eduardo'; // string
// $idade = 5; // int

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome); // mostra tipo da variável $nome
// var_dump($idade); // mostra tipo da variável $idade

define_category($nome, $idade);

header('location:index.php');

