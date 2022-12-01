<?= $this->extend('modelo'); ?>
<?= $this->section('lista'); ?>

<table>
 <tr>
 <th>#</th>
 <th>Data da Venda</th>
 <th>Quantidade Vendida</th>
 <th>Produto Vendido</th>
 <th>Vendedor</th>
 <th>Cliente</th>
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
     </tr>
<?php
    }
    ?>
 </table><table>
 <tr>
 <th>#</th>
 <th>Data da Venda</th>
 <th>Quantidade Vendida</th>
 <th>Produto Vendido</th>
 <th>Vendedor</th>
 <th>Cliente</th>
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
     <td><a href=" <?= base_url('Venda/edit/'. $Venda->ID_VENDA) ?> ">Editar</a></td>
     <td><a href=" <?= base_url('Venda/del/'. $Venda->ID_VENDA) ?> ">Apagar</a></td>
     </tr>
<?php
    }
    ?>
 </table>


<?= $this->endSection(); ?>