<?php

session_start();

function set_error(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function set_success(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function get_error() : ?string // pode retornar string ou NULL
{
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    return NULL;
}

function get_success() : ?string // pode retornar string ou NULL
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];
    return NULL;
}

function remove_error() : void
{
    if(isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);
}

function remove_success() : void
{
    if(isset($_SESSION['mensagem-de-sucesso']))
        unset($_SESSION['mensagem-de-sucesso']);
}