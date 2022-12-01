<?= $this->extend('modelo'); ?>

<?= $this->section('lista'); ?>

 <a href="<?= base_url('Venda/add') ?>">+ <?= lang("list/lista_vendas.add")?></a> | 
 <a href="<?= base_url('Venda/relatorio_mes')?>"><?= lang("list/lista_vendas.vdmes")?></a> 
 | <a href="<?= base_url('Venda/relatorio_produto')?>"><?= lang("list/lista_vendas.vdprod")?></a> 
 | <a href="<?= base_url('Venda/relatorio_vendedor')?>"><?= lang("list/lista_vendas.vdvend")?></a>
 <table>
 <tr>
 <th>#</th>
 <th><?= lang("list/lista_vendas.date")?></th>
 <th><?= lang("list/lista_vendas.qnt")?></th>
 <th><?= lang("list/lista_vendas.prod")?></th>
 <th><?= lang("list/lista_vendas.vend")?></th>
 <th><?= lang("list/lista_vendas.client")?></th>
 </tr>
 <?php
    foreach($Vendas as $Venda){
        ?>
     <tr>
     <td> <?= $Venda->ID_VENDA ?> </td>
     <td> <?= $Venda->DATA_VENDA ?> </td>
     <td> <?= $Venda->QUANTIDADE_VENDA ?> </td>
     <td> <?= $Venda->NOME_PRODUTO ?> </td>
     <td> <?= $Venda->NOME_VENDEDOR ?> </td>
     <td> <?= $Venda->NOME ?> </td>
     <td><a href=" <?= base_url('Venda/del/'. $Venda->ID_VENDA) ?> "><?= lang("list/lista_vendas.del")?></td>
     </tr>
<?php
    }
    ?>
 </table>
 <br><br>
 <a href=" <?= base_url() ?> "><?= lang("list/lista_vendas.back")?></a>
    

 <?=   $this->endSection(); ?>