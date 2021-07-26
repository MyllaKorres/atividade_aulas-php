<?php

/**
 AULA - INTRODU��O AO PHP
 
 CRIE UM PROJETO EM PHP PARA UMA COMPETI��O DE NATA��O, O SISTEMA DEVER� PERMITIR A INSER��O DE
 COMPETIDORES COM SEU NOME E IDADE, E O SISTEMA DEVER� IDENTIFICAR EM QUAL CATEGORIA O NADADOR
 IR� COMPETIR, POR EXEMPLO, 6 A 12 ANOS CATEGORIA INFANTIL, DE 13 A 18 CATEGORIA ADOLESCENTE,
 ACIMA DE 18 CATEGORIA ADULTO, O SISTEMA DEVER� RETORNAR A CATEGORIA PARA CADA NADADOR QUE FOR
 CADASTRADO.
 
 **/

session_start();

$categorias = []; //declara��o do array

$categorias[] = 'infantil'; // conte�do da posi��o 0
$categorias[] = 'adolescente'; // conte�do da posi��o 1
$categorias[] = 'adulto'; // conte�do da posi��o 2

// print_r($categorias); // printa o array

// $nome = 'Eduardo'; // string
// $idade = 5; // int

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// empty() verifica se a vari�vel est� vazia

if(empty($nome))
{
    // echo 'O nome deve conter 3 ou mais caracteres';
    $_SESSION['mensagem-de-erro'] = 'O campo nome n�o pode ser vazio!';
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
    // echo 'O nome n�o pode ter mais de 40 caracteres!';
    $_SESSION['mensagem-de-erro'] = 'O nome n�o pode ter mais de 40 caracteres!';
    header('location: index.php');
    return;
}

// is_numeric() verifica se � uma string num�rica

else if(!is_numeric($idade))
{
    // echo 'Insira apenas n�meros no campo idade!';
    $_SESSION['mensagem-de-erro'] = 'Insira apenas n�meros no campo idade!';
    header('location: index.php');
    return;
}

// var_dump($nome); // mostra tipo da vari�vel $nome
// var_dump($idade); // mostra tipo da vari�vel $idade

// echo $nome." est� na categoria: ";

if($idade >= 6 AND $idade <= 12)
{
    // echo 'infantil';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            // echo "O nadador ".$nome." ir� competir na categoria infantil.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' ir� competir na categoria infantil.';
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
            // echo "O nadador ".$nome." ir� competir na categoria adoslecente.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' ir� competir na categoria adoslecente.';
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
            // echo "O nadador ".$nome." ir� competir na categoria adulto.";
            $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome.' ir� competir na categoria adulto.';
            header('location: index.php');
            return;
        }
    }
}
else
{
    // echo $nome." n�o tem idade para competir!!!";
    $_SESSION['mensagem-de-sucesso'] = $nome.' n�o tem idade para competir!!!';
    header('location: index.php');
    return;
    
    
}