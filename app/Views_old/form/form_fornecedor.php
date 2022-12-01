<?php

    $this->extend('modelo');

    $this->section('form');

    $NOME_FORNECEDOR = $CNPJ = $ENDERECO = $CEP = $TELEFONE = "";

    if($fornecedor != ""){
        $NOME_FORNECEDOR = $fornecedor -> NOME_FORNECEDOR;
        $CNPJ = $fornecedor -> CNPJ;
        $ENDERECO = $fornecedor -> ENDERECO;
        $CEP = $fornecedor -> CEP;
        $TELEFONE = $fornecedor -> TELEFONE;
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

    <form method='post'>
        <div>
        <div class="row-mb-3">
            <label for="NOME_FORNECEDOR" class="col-sm-3 col-form-label">Nome Fornecedor</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" name='NOME_FORNECEDOR' id='NOME_FORNECEDOR' value="<?= $NOME_FORNECEDOR ?>">
                </div>
        </div>
        <div class="row-mb-3">
            <label for="CNPJ" class="col-sm-3 col-form-label">CNPJ</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" name='CNPJ' id='CNPJ' value="<?= $CNPJ ?>">
                </div>
        </div>
        <div class="row-mb-3">
            <label for="ENDERECO" class="col-sm-3 col-form-label">Endereço</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" name='ENDERECO' id='ENDERECO' value="<?= $ENDERECO ?>">
                </div>
        </div>
        <div class="row-mb-3">
            <label for="CEP" class="col-sm-3 col-form-label">CEP</label>
            <div class="col-sm-10">
                <input type='text' class="form-control" name='CEP' id='CEP' value="<?= $CEP ?>">
            </div>
        </div>
        <div class="row-mb-3">
            <label for="TELEFONE" class="col-sm-3 col-form-label">Telefone</label>
            <div class="col-sm-10">
                <input type='tel' class="form-control" name='TELEFONE' id='TELEFONE' value="<?= $TELEFONE ?>">
            </div>
        </div>
        <br>
        <div>
        <input type='submit' value='<?= $botao ?>' class="btn btn-outline-success">
        </div>
        <br>
        <div>
        <input type="reset" value="Limpar Formulário" class="btn btn-outline-success">
    <a href="<?= base_url('Fornecedor/') ?>"><button type="button" class="btn btn-outline-success"> Voltar </button></a>
</div>
    </form>
    

<?php
    $this->endSection();
?>

