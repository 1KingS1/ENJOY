<?=  $this->extend('modelo'); ?>

<?=  $this->section('lista'); ?>

 <a href=" <?= base_url('Produto/add'); ?> ">+ <?= lang("list/lista_produtos.add")?></a>
 <table>
 <tr>
 <th>#</th>
 <th><?= lang("list/lista_produtos.name")?></th>
 <th><?= lang("list/lista_produtos.marca")?></th>
 <th><?= lang("list/lista_produtos.qnt")?></th>
 <th><?= lang("list/lista_produtos.valor")?></th>
 <th><?= lang("list/lista_produtos.fornc")?></th>
 </tr>
<?php foreach($produtos as $produto){
    ?>
     <tr>
     <td> <?= $produto->ID_PRODUTO ?> </td>
     <td> <?= $produto->NOME_PRODUTO ?> </td>
     <td> <?= $produto->MARCA ?> </td>
     <td> <?= $produto->QUANTIDADE ?> </td>
     <td> <?= $produto->VALOR ?> </td>
     <td> <?= $fornecedor->where("ID_FORNECEDOR", $produto->ID_FORNECEDOR)->findAll()[0]->NOME_FORNECEDOR?> </td>
     <td><a href=" <?= base_url('Produto/edit/' . $produto->ID_PRODUTO) ?> "><?= lang("list/lista_produtos.edit")?></a></td>
     <td><a href=" <?= base_url('Produto/del/' . $produto->ID_PRODUTO) ?> "><?= lang("list/lista_produtos.del")?></a></td>
     </tr>
<?php
    }
    ?>
 </table>
 <br><br>
 <a href=" <?= base_url(); ?> "><?= lang("list/lista_produtos.back")?></a>
    

 <?=   $this->endSection(); ?>