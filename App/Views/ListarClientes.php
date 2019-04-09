<?php
/**
 * Created by PhpStorm.
 * User: E086510309
 * Date: 25/03/2019
 * Time: 17:03
 */

namespace App\Views;


class ListarClientes
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
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>CPF</th>
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
                    <td>$data->data_nasc</td>
                    <td>$data->cpf</td>
                    <td>$data->telefone</td>
                    <td>
                        <a href='cliente.php?id=$data->id'><button type='button' class='btn btn-secondary'>Editar</button></a>
                        <a href='delcli.php?id=$data->id'><button type='button' class='btn btn-secondary'>Excluir</button></a>
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