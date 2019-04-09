<?php
require_once "vendor/autoload.php";
$c = new \App\Models\Cliente();
if(isset($_POST['btn-cadastrar'])){
    $c->lerCliente($_POST['id']);
    $c->setNomeCliente($_POST['nome']);
    $c->setTelefoneCliente($_POST['fone']);
    $c->setDataNascimentoCliente($_POST['bday']);
    $c->setCpfCliente($_POST['cpf']);
    $c->atualizarCliente();
}
if(isset($_GET['id'])){
    $page = new \App\Controllers\PageCompiler('cliente',$_GET['id']);
} elseif (isset($_POST['id'])){
    $page = new \App\Controllers\PageCompiler('cliente',$_POST['id']);
}
