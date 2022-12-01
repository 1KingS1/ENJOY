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
        <label for="NOME_FORNECEDOR"><?= lang("form/form_fornecedor.name")?>:</label>
        <input type='text' name='NOME_FORNECEDOR' id='NOME_FORNECEDOR' value="<?= $NOME_FORNECEDOR ?>">
        <br>
        <label for="CNPJ"><?= lang("form/form_fornecedor.cnpj")?>:</label>
        <input type='text' name='CNPJ' id='CNPJ' value="<?= $CNPJ ?>">
        <br>
        <label for="ENDERECO"><?= lang("form/form_fornecedor.end")?>:</label>
        <input type='text' name='ENDERECO' id='ENDERECO' value="<?= $ENDERECO ?>">
        <br>
        <label for="CEP"><?= lang("form/form_fornecedor.cep")?>:</label>
        <input type='text' name='CEP' id='CEP' value="<?= $CEP ?>">
        <br>
        <label for="TELEFONE"><?= lang("form/form_fornecedor.tel")?>:</label>
        <input type='tel' name='TELEFONE' id='TELEFONE' value="<?= $TELEFONE ?>">
        <br>
        <input type='submit' value='<?= $botao ?>'>
    </form>

    <a href="<?= base_url('Fornecedor/') ?>"><?= lang("form/form_fornecedor.back")?></a>

<?php
    $this->endSection();
?>