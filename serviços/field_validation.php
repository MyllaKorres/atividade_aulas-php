<?php

// AULA - CONHECENDO FUNÇÕES E VALIDAÇÃO DE DADOS COM PHP

// empty() verifica se a variável está vazia

// declare(strict_type=1); // checagem mais rígida

function valida_nome(string $nome) : bool // definição do tipo de retorno
{
    if(empty($nome))
    {
        // echo 'O nome deve conter 3 ou mais caracteres';
        set_error('O campo nome não pode ser vazio!');
        return false;
    }
    
    // srtlen() conta os caracteres de uma string
    
    else if(strlen($nome) < 3)
    {
        // echo 'O nome deve conter 3 ou mais caracteres!';
        set_error('O nome deve conter 3 ou mais caracteres!');
        return false;
    }
    
    else if(strlen($nome) > 40)
    {
        // echo 'O nome não pode ter mais de 40 caracteres!';
        set_error('O nome não pode ter mais de 40 caracteres!');
        return false;
    }
    return true;
}

function valida_idade(string $idade) : bool
{
    // is_numeric() verifica se é uma string numérica
    
    if(!is_numeric($idade))
    {
        // echo 'Insira apenas números no campo idade!';
        set_error('Insira apenas números no campo idade!');
        return false;
    }
    return true;
}