<?php

function defineLogin(string $usuario, string $senha)
{
    if(validaUsuario($usuario) && validaSenha($senha))
    {
        removeMensagemErro();
        if($usuario == 'admin' & $senha == 'admin')
        {
            header("location:temas/tema_1/sessoes/home/index_home.html");
        }
        else if($usuario == 'convidado' & (!empty($senha)))
        {
            header("location:temas/tema-2/index2.html");
        }
    }
    else
    {
        return obterMensagemErro();
    }
}