<?= $this->extend('modelo'); ?>
<?= $this->section('form'); ?>

<?php
$CPF = $NOME = $ENDERECO = $TELEFONE = "";

if(!empty($cliente)){
    $CPF = $cliente -> CPF;
    $NOME = $cliente -> NOME;
    $ENDERECO = $cliente -> ENDERECO;
    $TELEFONE = $cliente -> TELEFONE;
}

if(is_array($msg)){
    echo "<ul>";
    foreach($msg as $erro){
        echo"<li>$erro</li>";
    }
    echo "</ul>";
}else{
    echo $msg;
}
?>

    <form method="post">
        <div>
            <div class="row-mb-3">
                <label for="CPF" class="col-sm-3 col-form-label"> CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="CPF" id="CPF" value="<?= $CPF ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="NOME" class="col-sm-3 col-form-label"> Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NOME" id="NOME" value="<?= $NOME ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="ENDERECO" class="col-sm-3 col-form-label"> Endereco</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ENDERECO" id="ENDERECO" value="<?= $ENDERECO ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="TELEFONE" class="col-sm-3 col-form-label"> Telefone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="TELEFONE" id="TELEFONE" value="<?= $TELEFONE ?>">
                </div>
            </div>
            <br>
            <div>
                <input type='submit' value='<?= $botao ?>' class="btn btn-outline-success">
            </div>
            <br>
            <div>
                <input type="reset" value="Limpar Formulário" class="btn btn-outline-success"> 
                <a href="<?= base_url('Cliente/') ?>"><button type="button" class="btn btn-outline-success">Voltar</button></a>

            </div>
        </div>
    </form>

<?php
    $this->endSection();
?>