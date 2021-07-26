<?php

/**
 AULA - INTRODUÇÃO AO PHP
 
 CRIE UM PROJETO EM PHP PARA UMA COMPETIÇÃO DE NATAÇÃO, O SISTEMA DEVERÁ PERMITIR A INSERÇÃO DE
 COMPETIDORES COM SEU NOME E IDADE, E O SISTEMA DEVERÁ IDENTIFICAR EM QUAL CATEGORIA O NADADOR
 IRÁ COMPETIR, POR EXEMPLO, 6 A 12 ANOS CATEGORIA INFANTIL, DE 13 A 18 CATEGORIA ADOLESCENTE,
 ACIMA DE 18 CATEGORIA ADULTO, O SISTEMA DEVERÁ RETORNAR A CATEGORIA PARA CADA NADADOR QUE FOR
 CADASTRADO.
 
 **/

session_start();

$categorias = []; //declaração do array

$categorias[] = 'infantil'; // conteúdo da posição 0
$categorias[] = 'adolescente'; // conteúdo da posição 1
$categorias[] = 'adulto'; // conteúdo da posição 2

// print_r($categorias); // printa o array

// $nome = 'Eduardo'; // string
// $idade = 5; // int

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// empty() verifica se a variável está vazia

if(empty($nome))
{
    // echo 'O nome deve conter 3 ou mais caracteres';
    $_SESSION['mensagem-de-erro'] = 'O campo nome não pode ser vazio!';
    header('location: index.php');
    return;
}

// srtlen() conta os caracteres de uma string

else if(strlen($nome) < 3)
{
    // echo 'O nome deve conter 3 ou mais caracteres!';
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter 3 ou mais caracteres!';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 40)
{
    // echo 'O nome não pode ter mais de 40 caracteres!';
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ter mais de 40 caracteres!';
    header('location: index.php');
    return;
}

// is_numeric() verifica se é uma string numérica

else if(!is_numeric($idade))
{
    // echo 'Insira apenas números no campo idade!';
    $_SESSION['mensagem-de-erro'] = 'Insira apenas números no campo idade!';
    header('location: index.php');
    return;
}

// var_dump($nome); // mostra tipo da variável $nome
// var_dump($idade); // mostra tipo da variável $idade

// echo $nome." está na categoria: ";

if($idade >= 6 AND $idade <= 12)
{
    // echo 'infantil';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            // echo "O nadador ".$nome." irá competir na categoria infantil.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' irá competir na categoria infantil.';
            header('location: index.php');
            return;
        }
    }
}
else if ($idade >= 13 AND $idade <= 18)
{
    // echo 'adolescente';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            // echo "O nadador ".$nome." irá competir na categoria adoslecente.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' irá competir na categoria adoslecente.';
            header('location: index.php');
            return;
        }
    }
}
else if ($idade > 18)
{
    // echo 'adulto';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            // echo "O nadador ".$nome." irá competir na categoria adulto.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' irá competir na categoria adulto.';
            header('location: index.php');
            return;
        }
    }
}
else
{
    // echo $nome." não tem idade para competir!!!";
    $_SESSION['mensagem-de-sucesso'] = $nome.' não tem idade para competir!!!';
    header('location: index.php');
    return;
    
    
}