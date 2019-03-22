<?php

require_once "functions.php";
require_once "App/Cliente.phphp";
top('Atualizar Cadastro');

$GLOBALS['aluno'] = new Aluno($_GET['id']);

// Verificar se o botão ja foi clicado
if(isset($_POST['btn-cadastrar'])){
    // array para exibir avisos
    $avisos = array();

    $aluno->lerAluno($_POST['id']);
    $aluno->set_nomeAluno($_POST['nome']);
    $aluno->set_cpfAluno($_POST['cpf']);
    $aluno->set_dataNascAluno($_POST['bdate']);
    $aluno->set_notaHistorico($_POST['nota']);
    $aluno->atualizarAluno();
    $avisos[] = "Cadastro Realizado com Sucesso!";
    header('Location: listacli.php');

}

?>

    <div class="container">
        <table style="width:100%">
            <form class="form-control-plaintext" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <div class="text-center">
                            <h1> Cadastro </h1>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ID: <input class="form-text" type="text" name="id" value="<?= $GLOBALS['aluno']->get_idAluno()?>"></td>
                        <td>Nome: <input class="form-text" type="text" name="nome" value="<?= $GLOBALS['aluno']->get_nomeAluno()?>"></td>
                        <td>Data de nascimento: <input class="form-text" type="date" name="bdate" value="<?= $GLOBALS['aluno']->get_dataNascAluno()?>"></td>
                    </tr>
                    <tr>
                        <td>CPF: <input class="form-text" type="float" name="cpf" value="<?= $GLOBALS['aluno']->get_cpfAluno()?>"></td>
                        <td>Nota: <input class="form-text" type="text" name="nota" value="<?= $GLOBALS['aluno']->get_notaHistorico()?>"></td>

                        <td></td>
                    </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <br><br>
                    <?php
                    // se existir avisos, exibe
                    if(!empty($avisos)):
                        foreach ($avisos as $aviso):
                            echo $aviso."<br>";
                        endforeach;
                    endif;
                    ?>
                    <button class="btn btn-lg btn-primary" type="submit" name="btn-cadastrar">Atualizar</button>
                </div>
            </form>
        </table>
    </div>
<?php bottom(); ?>