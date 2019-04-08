<?php

require_once "vendor/autoload.php";

$pompiler = new \App\Controllers\PageCompiler('cadpro');
$p = new \App\Models\Produto();

if(isset($_POST['btn-cadastrar'])){

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];
    $medida = $_POST['unidadedemedida'];
    $p->nomeProduto = $nome;
    $p->valorProduto = $valor;
    $p->quantidadeProduto = $quantidade;
    $p->unidadeDeMedidaProduto = $medida;
    $p->criarProduto();
}