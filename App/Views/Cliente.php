<?php
/**
 * Created by PhpStorm.
 * User: Ewert
 * Date: 25/03/2019
 * Time: 10:45
 */

namespace App\Views;


class Cliente
{
    public function __construct($origin,\App\Models\Cliente $c)
    {
        echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Cadastrar Cliente</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/Features-Boxed.css'>
    <link rel='stylesheet' href='assets/css/styles.css'>
</head>

<body style='background-color:rgb(238,244,247);'>
    <div class='features-boxed'>
        <div class='container'>
            <div class='intro'>
                <h2 class='text-center'>Cadastrar Clientes</h2>
                <form action='$origin' method='POST'>
                    <small>ID:</small>
                    <input class='form-control' type='text' name='id' placeholder='$c->getIdCliente()' readonly>
                    <small>Nome:</small>
                    <input class='form-control' type='text' name='nome' value='$c->getNomeCliente()'>
                    <small>Data de Nascimento:</small>
                    <input class='form-control' type='text' name='bday' value='$c->getDataNascimentoCliente()'>
                    <small>CPF:</small>
                    <input class='form-control' type='text' name='cpf' value='$c->getCpfCliente()'>
                    <small>Telefone:</small>
                    <input class='form-control' type='text' name='fone' value='$c->getCpfCliente()'>
                    <button class='btn btn-secondary' type='submit' name='btn-cadastrar' style='margin:16px 0px;'>Cadastrar</button> 
                </form>
                <a href='index.php'><button class='btn btn-secondary' style='margin:-16px 0px;'>Voltar</button></a> 
            </div>
        </div>
    </div>
    <script src='assets/js/jquery.min.js'></script>
    <script src='assets/bootstrap/js/bootstrap.min.js'></script>
</body>

</html>
        ";
    }
}