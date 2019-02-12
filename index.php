<?php

require_once 'classes/DB.php';
require_once 'classes/Aluno.php';


$aluno = new Aluno();

$aluno->set_nomeAluno('Heru');
$aluno->set_dataNascAluno('01/01/2000');
$aluno->set_cpfAluno('086.500.300-75');

$aluno->criarAluno();

$aluno->lerAluno($aluno->get_idAluno());

echo $aluno->get_nomeAluno();

$aluno->set_nomeAluno('Haru');
$aluno->editarAluno();

echo $aluno->get_nomeAluno();
