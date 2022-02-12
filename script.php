<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/validaLogin.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

defineLogin($usuario, $senha);

if(!empty(obterMensagemErro()))
{
header("location:index.php");
}






