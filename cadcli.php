<?php

require_once "vendor/autoload.php";

$compiler = new \App\Controllers\PageCompiler('cadcli');
$c = new \App\Models\Cliente();

if(isset($_POST['btn-cadastrar'])){
    $c->setNomeCliente($_POST['nome']);
    $c->setTelefoneCliente($_POST['fone']);
    $c->setDataNascimentoCliente($_POST['bday']);
    $c->setCpfCliente($_POST['cpf']);
    $c->criarCliente();
    $id = $c->get_lastInsertID();
}