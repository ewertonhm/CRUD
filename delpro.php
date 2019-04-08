<!DOCTYPE html>
<html lang='en'>
<head>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Lista de Cliente</title>
        <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' href='assets/css/Features-Boxed.css'>
        <link rel='stylesheet' href='assets/css/styles.css'>
    </head>
</head>
<body>
<?php
require_once 'vendor\autoload.php';
$c = new \App\Models\Produto($_GET['id']);
echo "<p>Tem certeza que deseja excluir o produto $c->nomeProduto ?<br>";
echo "<br><a href=delpro.php?id=$c->idProduto&confirm=1><button type='button' class='btn btn-secondary' style='margin:8px 2px;'>Excluir</button></a>";
if(isset($_GET['confirm'])){
    if($_GET['confirm'] == 1){
        $c->deletarProduto();
        echo "<p>Produto deletado</p>";
        echo"<a href='listapro.php'><button type='button' class='btn btn-secondary' style='margin:16px 2px;'>Voltar</button></a><a href='index.php'><button type='button' class='btn btn-secondary' style='margin:16px 16px;'>Inicio</button></a>";
    }
}
?>
</body>
