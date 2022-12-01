<?= $this->extend('modelo'); ?>
<?= $this->section('form'); ?>

<?= $msg ?>

<form method="post">
    <div>
        <div class="row-mb-3">
            <label for="DATA_ENTRADA" class="col-sm-3 col-form-label">Data de entrada</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" name="DATA_ENTRADA" id="DATA_ENTRADA" value="<?= $estoque->DATA_ENTRADA?>">
            </div>
        </div>
        <div class="row-mb-3">
            <label for="QUANTIDADE_ENTRADA" class="col-sm-3 col-form-label">Quantidade entrada</label>
            <div class="col-sm-10">
                <input type="int" class="form-control" name="QUANTIDADE_ENTRADA" id="QUANTIDADE_ENTRADA" value="<?= $estoque->QUANTIDADE_ENTRADA?>">0
            </div>
        </div>
        <div class="row-mb-3">
            <label for="PRODUTO" class="col-sm-3 col-form-label">Produto</label>
            <div class="col-sm-10">
                <select name="ID_PRODUTO" id="PRODUTO" value="" class="form-control">
                    <?php
                    if(is_array($produtos)){
                        foreach($produtos as $i => $produto)
                    {
                    ?>
                    <option value="<?= $produto->ID_PRODUTO;?>" <?php if($select_prod == $produto->ID_PRODUTO) echo 'selected="' .$select_prod. '"'?> ><?= $produto->NOME_PRODUTO?></option>
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
            <a href="<?= base_url('Estoque/') ?>"><button type="button" class="btn btn-outline-success"> Voltar </button></a>
        </div>
    </div>
</form>
<?php
    $this->endSection();
?>
</form>
<br>