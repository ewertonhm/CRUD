<?php
/**
 * Created by PhpStorm.
 * User: E086510309
 * Date: 25/03/2019
 * Time: 17:03
 */

namespace App\Views;


class ListarProduto
{
    public function __construct($dataArray)
    {
        echo "
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
<body style='background-color:rgb(238,244,247);'>
<div id='main' class='container-fluid'>
    <div>
        <a href='index.php'><button type='button' class='btn btn-secondary' style='margin:16px 0px;'>Inicio</button></a>
        <a href='cadcli.php'><button type='button' class='btn btn-secondary' style='margin:16px 0px;'>Inserir</button></a>
    </div>
    <div id='list' class='row'>
        <div class='table-responsive col-md-12'>
            <table class='table table-striped' cellspacing='0' cellpadding='0'>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Unidade de Medida</th>
                    <th>Editar</th>
                </tr>
                </thead>
        ";

        foreach ($dataArray as $data){
            echo "

                <tr>
                    <tbody>
                    <td>$data->id</td>
                    <td>$data->nome</td>
                    <td>$data->quantidade</td>
                    <td>$data->valor</td>
                    <td>$data->unidademedida</td>
                    <td>
                        <a href='produto.php?id=$data->id'><button type='button' class='btn btn-secondary'>Editar</button></a>
                        <a href='delpro.php?id=$data->id'><button type='button' class='btn btn-secondary'>Excluir</button></a>
                    </td>
                </tr>
                </tbody>
            ";
        }



        echo "
        </table>
        </div>
    </div> <!-- /#list -->
</div>  <!-- /#main -->
<script src='assets/js/jquery.min.js'></script>
<script src='assets/bootstrap/js/bootstrap.min.js'></script>
</body>
</html>
        ";
    }
}