<?php

    $this->extend('modelo');

    $this->section('form');

    $NOME_VENDEDOR = $DATA_NASC = $CPF = $EMAIL = $ENDERECO = $CEP = $TELEFONE = "";

    if($vendedor != ""){
        $NOME_VENDEDOR = $vendedor -> NOME_VENDEDOR;
        $DATA_NASC = $vendedor -> DATA_NASC;
        $CPF = $vendedor -> CPF;
        $EMAIL = $vendedor -> EMAIL;
        $ENDERECO = $vendedor -> ENDERECO;
        $CEP = $vendedor -> CEP;
        $TELEFONE = $vendedor -> TELEFONE;
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
                <label for="NOME_VENDEDOR" class="col-sm-3 col-form-label">Nome Vendedor:</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control" name='NOME_VENDEDOR' id='NOME_VENDEDOR' value="<?= $NOME_VENDEDOR ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="DATA_NASC" class="col-sm-3 col-form-label">Data de nascimento:</label>
                <div class="col-sm-3">
                    <input type='date' class="form-control" name='DATA_NASC' id='DATA_NASC' value="<?= $DATA_NASC ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="CPF" class="col-sm-3 col-form-label">CPF:</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control"  name='CPF' id='CPF' value="<?= $CPF ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="EMAIL" class="col-sm-3 col-form-label">EMAIL:</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control"  name='EMAIL' id='EMAIL' value="<?= $EMAIL ?>">
                </div>
            </div>
            <div class="row-mb-3">
                <label for="TELEFONE" class="col-sm-3 col-form-label">TELEFONE:</label>
                <div class="col-sm-10">
                    <input type='tel' class="form-control"  name='TELEFONE' id='TELEFONE' value="<?= $TELEFONE ?>">
                </div>
            </div>
            <div class="row-mb-3">
            <label for="ENDERECO" class="col-sm-3 col-form-label">ENDERECO:</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control"  name='ENDERECO' id='ENDERECO' value="<?= $ENDERECO ?>">    
                </div>
            </div>
            <div class="row-mb-3">
                <label for="CEP" class="col-sm-3 col-form-label">CEP:</label>
                <div class="col-sm-10">
                    <input type='text' class="form-control"  name='CEP' id='CEP' value="<?= $CEP ?>">
                </div>
            </div>
            <br>
            <div>
                <input type='submit' value='<?= $botao ?>' class="btn btn-outline-success">
            </div>
            <br>
            <div>
                <input type="reset" value="Limpar Formulário" class="btn btn-outline-success">
                <a href="<?= base_url('Vendedor/') ?>"><button type="button" class="btn btn-outline-success">Voltar</button></a>
            </div>
        </div>

    </form>

<?php
    $this->endSection();
?>