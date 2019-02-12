<?php
    require_once "functions.php";
    require_once "classes/DB.php";
    top('alunos');

    $db = DB::get_instance();
    $params = [
        'joins' => ['historico'],
        'bindjoin' => ['historico.id_aluno = aluno.id']
    ];
    $consulta = $db->find("aluno",$params);

?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Dada de Nascimento</th>
        <th scope="col">CPF</th>
        <th scope="col">Nota</th>
        <th scope="col">Data de Cadastro</th>
        <th scope="col">Alterar dados</th>
        <th scope="col">Deletar</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($consulta as $tableItem){
        echo"<tr>
        <th scope='row'>$tableItem->id</th>
        <td>$tableItem->nome</td>
        <td>$tableItem->data_nasc</td>
        <td>$tableItem->cpf</td>
        <td>$tableItem->nota</td>
        <td>$tableItem->data_cad</td>
        <td><button type='button' class='btn btn-primary'>Atualizar</button></td>
        <td><button type='button' class='btn btn-warning'>Deletar</button></td>
    </tr>";
    } ?>


    </tbody>
</table>

<?php bottom(); ?>