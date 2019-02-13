<?php

require_once "functions.php";
require_once "classes/Aluno.php";

if ($_GET['id']){
    $aluno = new Aluno($_GET['id']);
    $aluno->deletarAluno();
    header('Location: listacli.php');
}