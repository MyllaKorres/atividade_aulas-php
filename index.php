<?php

/** CRIE UM PROJETO EM PHP PARA UMA COMPETIÇÃO DE NATAÇÃO, O SISTEMA DEVERÁ PERMITIR A INSERÇÃO DE 
    COMPETIDORES COM SEU NOME E IDADE, E O SISTEMA DEVERÁ IDENTIFICAR EM QUAL CATEGORIA O NADADOR 
    IRÁ COMPETIR, POR EXEMPLO, 6 A 12 ANOS CATEGORIA INFANTIL, DE 13 A 18 CATEGORIA ADOLESCENTE,
    ACIMA DE 18 CATEGORIA ADULTO, O SISTEMA DEVERÁ RETORNAR A CATEGORIA PARA CADA NADADOR QUE FOR
    CADASTRADO. **/

$categorias = []; //declaração do array

$categorias[] = 'infantil'; // conteúdo da posição 0
$categorias[] = 'adolescente'; // conteúdo da posição 1
$categorias[] = 'adulto'; // conteúdo da posição 2

// print_r($categorias); // printa o array

$nome = 'Eduardo'; // string
$idade = 5; // int

// var_dump($nome); // mostra tipo da variável $nome
// var_dump($idade); // mostra tipo da variável $idade

// echo $nome." está na categoria: ";

if($idade >= 6 AND $idade <= 12)
{
    // echo 'infantil';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome." compete na categoria infantil.";
    }
}
else if ($idade >= 13 AND $idade <= 18)
{
    // echo 'adolescente';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome." compete na categoria adoslecente.";
    }
}
else if ($idade > 18)
{
    // echo 'adulto';
    
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome." compete na categoria adulto.";
    }
}
else 
{
    echo $nome." não tem idade para competir!!!";
}
?>