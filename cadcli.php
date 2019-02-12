<?php
    require_once "functions.php";
    top('cadastro');
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
                    <td>Nome: <input class="form-text" type="text" name="nome"></td>
                    <td>Data de nascimento: <input class="form-text" type="date" name="bdate"></td>
                    <td>CPF: <input class="form-text" type="float" name="cpf"></td>
                </tr>
                <tr>
                    <td>Nota: <input class="form-text" type="text" name="nota"></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
            <div class="text-center">
                <br><br>
                <?php
                // se existir erros, exibe
                if(!empty($erros)):
                    foreach ($erros as $erro):
                        echo $erro."<br>";
                    endforeach;
                endif;
                ?>
                <button class="btn btn-lg btn-primary" type="submit" name="btn-cadastrar">Cadastrar</button>
            </div>
        </form>
    </table>
</div>
</body>
</html>
