<?php

require_once "vendor/autoload.php";

$compiler = new \App\Controllers\PageCompiler('cadcli');

if(!isset($_POST['btn-cadastrar'])){
    $c = new \App\Models\Cliente();
    $c->setNomeCliente($_POST['nome']);
    $c->setTelefoneCliente($_POST['fone']);
    $c->setDataNascimentoCliente($_POST['bday']);
    $c->setCpfCliente($_POST['cpf']);
    $c->criarCliente();
    $id = $c->get_lastInsertID();
    echo "Cadastro criado com o id: $id";
}