<?=  $this->extend('modelo'); ?>
<?=  $this->section('lista'); ?>

 <a href=" <?= base_url('Estoque/add'); ?> ">+ <?= lang("list/lista_estoques.add")?></a>
 <table>
 <tr>
 <th>#</th>
 <th><?= lang("list/lista_estoques.date")?></th>
 <th><?= lang("list/lista_estoques.qnt")?></th>
 <th><?= lang("list/lista_estoques.prod")?></th>
 </tr>
<?php foreach($estoques as $estoque){
    ?>
     <tr>
     <td> <?= $estoque->ID_ESTOQUE ?> </td>
     <td> <?= $estoque->DATA_ENTRADA ?> </td>
     <td> <?= $estoque->QUANTIDADE_ENTRADA ?> </td>
     <td> <?= $produto->where("ID_PRODUTO", $estoque->ID_PRODUTO)->findAll()[0]->NOME_PRODUTO?> </td>
     <td><a href=" <?= base_url('Estoque/edit/' . $estoque->ID_ESTOQUE) ?> "><?= lang("list/lista_estoques.edit")?></a></td>
     <td><a href=" <?= base_url('Estoque/del/' . $estoque->ID_ESTOQUE) ?> "><?= lang("list/lista_estoques.del")?></a></td>
     </tr>
<?php
    }
    ?>
 </table>
 <br><br>
 <a href=" <?= base_url(); ?> "><?= lang("list/lista_estoques.back")?></a>
    

 <?=   $this->endSection(); ?>