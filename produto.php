<?php
require_once "vendor/autoload.php";
$p = new \App\Models\Produto();
if(isset($_POST['btn-cadastrar'])){
    $p->lerProduto($_POST['id']);
    $p->setNomeProduto($_POST['nome']);
    $p->setUnidadeDeMedidaProduto($_POST['unidademedida']);
    $p->setQuantidadeProduto($_POST['quantidade']);
    $p->setValorProduto($_POST['valor']);
    $p->atualizarProduto();
}
if(isset($_GET['id'])){
    $page = new \App\Controllers\PageCompiler('produto',$_GET['id']);
} elseif (isset($_POST['id'])){
    $page = new \App\Controllers\PageCompiler('produto',$_POST['id']);
}
