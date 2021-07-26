<?php

function define_category(string $nome, string $idade) : ?string
{
    $categorias = []; //declaração do array
    
    $categorias[] = 'infantil'; // conteúdo da posição 0
    $categorias[] = 'adolescente'; // conteúdo da posição 1
    $categorias[] = 'adulto'; // conteúdo da posição 2
    
    // print_r($categorias); // printa o array
    
    // echo $nome." está na categoria: ";
    
    if(valida_nome($nome) && valida_idade($idade))
    {
        remove_error();
        if($idade >= 6 AND $idade <= 12)
        {
            // echo 'infantil';
            
            for($i = 0; $i < count($categorias); $i++)
            {
                if($categorias[$i] == 'infantil')
                {
                    // echo "O nadador ".$nome." irá competir na categoria infantil.";
                    set_success('O(A) nadador(a) '.$nome.' irá competir na categoria infantil.');
                    return null;
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
                    // echo "O nadador ".$nome." irá competir na categoria adolescente.";
                    set_success('O(A) nadador(a) '.$nome.' irá competir na categoria adolescente.');
                    return null;
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
                    set_success('O(A) nadador(a) '.$nome.' irá competir na categoria adulto.');
                    return null;
                }
            }
        }
        else
        {
            // echo $nome." não tem idade para competir!!!";
            set_success($nome.' não tem idade para competir!!!');
            return null;
        }
    }
    else 
    {
        remove_success();
        return get_error();
    }
}
