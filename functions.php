<?php
/**
 * Created by PhpStorm.
 * User: Ewerton
 * Date: 11/02/2019
 * Time: 11:05
 */


function top($pagetitle){
    echo "
                <!DOCTYPE html>
                <html lang='pt-br'>
                <head>
                    <title>$pagetitle</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                    <meta name='description' content=''>
                    <meta name='author' content='Ewerton H Marschalk'>
                    <link rel='icon' href='https://cdn.icon-icons.com/icons2/72/PNG/256/contact_people_14393.png'>
                    <!-- Bootstrap CSS -->
                    <link href='css/bootstrap.min.css' rel='stylesheet'>
                </head>
                <body ng-controler='relations'>";
}

function bottom(){
    echo "</body>";

    echo "
                <!-- Jquery JS -->	
                <script src='js/jquery-3.3.1.min.js'></script>
                <!-- Bootstrap JS -->
                <script src='js/bootstrap.min.js'></script>
                <script src='js/bootstrap.bundle.min.js'
                <!-- Popper JS -->
                <script src=''></script>
                </html>
                ";
}

/**
 * @param Aluno $aluno
 */
function Cadastrar(Aluno $aluno)
{
    $aluno->set_nomeAluno($_POST['nome']);
    $aluno->set_cpfAluno($_POST['cpf']);
    $aluno->set_dataNascAluno($_POST['bdate']);
    $aluno->set_notaHistorico($_POST['nota']);
    $aluno->criarAluno();
    return true;
}
