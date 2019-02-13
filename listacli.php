<?php
    require_once "functions.php";
    require_once "classes/DB.php";
    top('Listagem de Alunos');

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
        $dellink = "delcli.php?id=$tableItem->id";
        $updatelink = "updatecli.php?id=$tableItem->id";
        echo"<tr>
        <th scope='row'>$tableItem->id</th>
        <td>$tableItem->nome</td>
        <td>$tableItem->data_nasc</td>
        <td>$tableItem->cpf</td>
        <td>$tableItem->nota</td>
        <td>$tableItem->data_cad</td>
        <td><button type='submit' name='btn-udpdate' class='btn btn-primary'><a class='card-link text-white' href='$updatelink'>Atualizar</a></button></td>
        <td><button type='submit' name='btn-delete' class='btn btn-warning'><a class='card-link text-white' href='$dellink'>Delete</a></button></td>
    </tr>";
    } ?>


    </tbody>
</table>

<?php bottom(); ?>