<?= $this->extend('modelo'); ?>
<?= $this->section('form'); ?>

<form method="post">
    <div>
        <div class="row-mb-3">    
            <label for="NOME_PRODUTO" class="col-sm-3 col-form-label">Nome do produto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="NOME_PRODUTO" id="NOME_PRODUTO" value="<?= $produto->NOME_PRODUTO?>">
            </div>
        <div class="row-mb-3">
            <label for="MARCA" class="col-sm-3 col-form-label">Marca</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="MARCA" id="MARCA" value="<?= $produto->MARCA?>">
            </div>
        </div>
        <div class="row-mb-3">
            <label for="QUANTIDADE" class="col-sm-3 col-form-label">Quantidade</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="QUANTIDADE" id="QUANTIDADE" value="<?= $produto->QUANTIDADE?>">
            </div>
        </div>
        <div class="row-mb-3">
            <label for="VALOR" class="col-sm-3 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="VALOR" id="VALOR" value="<?= $produto->VALOR?>">
            </div>
        </div>
        <div class="row-mb-3">
            <label for="ID_FORNECEDOR" class="col-sm-3 col-form-label">Fornecedor</label>
            <div class="col-sm-10">
                <select name="ID_FORNECEDOR" id="ID_FORNECEDOR" value="" class="form-control">
                    <?php
                    if(is_array($fornecedores)){
                        foreach($fornecedores as $i => $fornecedor)
                    {
                    ?>
                    <option value="<?= $fornecedor->ID_FORNECEDOR;?>" <?php if($select_forn == $fornecedor->ID_FORNECEDOR) echo 'selected="' .$select_forn. '"'?> ><?= $fornecedor->NOME_FORNECEDOR?></option>
                    <?php
                    }
                    }else{
                        
                    }
                    ?>
                </select>
            </div>
        </div>
        <br>
        <div>
            <input type='submit' value='<?= $botao ?>' class="btn btn-outline-success">
        </div>
        <br>
        <div>
            <input type="reset" value="Limpar Formulário" class="btn btn-outline-success">
            <a href="<?= base_url('Produto/') ?>"><button type="button" class="btn btn-outline-success"> Voltar </button></a>
        </div>
    </div>
</form>
<?php
    $this->endSection();
?>