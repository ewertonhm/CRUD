<?php
/**
 * Created by PhpStorm.
 * User: E086510309
 * Date: 22/03/2019
 * Time: 15:33
 */

namespace App\Views;


class Main
{
    public function __construct()
    {
        echo <<<TAG
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Main</title>
    <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/fonts/font-awesome.min.css'>
    <link rel='stylesheet' href='assets/css/styles.min.css'>
    <link rel='stylesheet' href='assets/css/custom.css'>
</head>

<body>
    <div class='features-boxed'>
        <div class='container'>
            <div class='intro'>
                <h2 class='text-center'>Principal</h2>
            </div>
            <div class='row justify-content-center features'>
                <div class='col-sm-6 col-md-5 col-lg-5 item'>
                    <a href='cadcli.php'>
                        <div class='box'><i class='fa fa-user-plus icon'></i>
                            <h3 class='name'>Cadastrar clientes</h3>
                        </div>
                    </a>
                </div>
                <div class='col-sm-6 col-md-5 col-lg-5 item'>
                     <a href='listacli.php'>
                        <div class='box'><i class='fa fa-users icon'></i>
                            <h3 class='name'>Listar Clientes</h3>
                        </div>
                     </a>   
                </div>
                <div class='col-sm-6 col-md-5 col-lg-5 item'>
                    <a href='cadpro.php'>
                        <div class='box'><i class='fa fa-cart-plus icon'></i>
                            <h3 class='name'>Cadastrar Produtos</h3>
                        </div>
                    </a>    
                </div>
                <div class='col-sm-6 col-md-5 col-lg-5 item'>
                    <a href='listapro.php'>
                        <div class='box'><i class='fa fa-cart-arrow-down icon'></i>
                            <h3 class='name'>Listar Produtos</h3>
                        </div>
                    </a>    
                </div>
            </div>
        </div>
    </div>
    <script src='assets/js/jquery.min.js'></script>
    <script src='assets/bootstrap/js/bootstrap.min.js'></script>
</body>

</html>
TAG;
    }
}