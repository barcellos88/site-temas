<?php

function validaUsuario(string $usuario) : bool
{
    if(empty($usuario))
    {
        setarMensagemErro(mensagem: 'O usuario não pode estar vazio');
        return false;
    }
    else if(strlen($usuario) < 3)
    {
        setarMensagemErro(mensagem: 'O nome deve conter mais que 2 caracteres ');
        return false; 
    }
    else if(strlen($usuario) > 11)
    {
        setarMensagemErro(mensagem: 'O nome deve conter no maximo 10 caracteres');
        return false;
    }
    return true;
}


function validaSenha(string $senha) : bool
{
    if(empty($senha))
    {
        setarMensagemErro(mensagem: 'A senha não pode estar vazio');
        return false;
    }
    else if(strlen($senha) < 3)
    {
        setarMensagemErro(mensagem: 'A senha deve conter mais que 2 caracteres');
        return false; 
    }
    else if(strlen($senha) > 11)
    {
        setarMensagemErro(mensagem: 'A senha deve conter no maximo 10 caracteres');
        return false;
    }
    return true;
}


