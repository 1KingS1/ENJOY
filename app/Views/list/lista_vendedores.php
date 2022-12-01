<?= $this->extend('modelo'); ?>

<?= $this->section('lista'); ?>

 <a href="<?= base_url('Vendedor/add') ?>">+ <?= lang("list/lista_vendedores.add") ?></a>
 <table>
 <tr>
 <th>#</th>
 <th><?= lang("list/lista_vendedores.id") ?></th>
 <th><?= lang("list/lista_vendedores.data_nasc") ?></th>
 <th><?= lang("list/lista_vendedores.cpf") ?></th>
 <th><?= lang("list/lista_vendedores.email") ?></th>
 <th><?= lang("list/lista_vendedores.end") ?></th>
 <th><?= lang("list/lista_vendedores.cep") ?></th>
 <th><?= lang("list/lista_vendedores.tel") ?></th>
 </tr>
 <?php
    foreach($vendedores as $vendedor){
        ?>
     <tr>
     <td> <?= $vendedor->ID_VENDEDOR ?> </td>
     <td> <?= $vendedor->NOME_VENDEDOR ?> </td>
     <td> <?= $vendedor->DATA_NASC ?> </td>
     <td> <?= $vendedor->CPF ?> </td>
     <td> <?= $vendedor->EMAIL ?> </td>
     <td> <?= $vendedor->ENDERECO ?> </td>
     <td> <?= $vendedor->CEP ?> </td>
     <td> <?= $vendedor->TELEFONE ?> </td>
     <td><a href=" <?= base_url('Vendedor/edit/'. $vendedor->ID_VENDEDOR) ?> "><?= lang("list/lista_vendedores.edit") ?></td>
     <td><a href=" <?= base_url('Vendedor/del/'. $vendedor->ID_VENDEDOR) ?> "><?= lang("list/lista_vendedores.del") ?></td>
     </tr>
<?php
    }
    ?>
 </table>
 <br><br>
 <a href=" <?= base_url() ?> "><?= lang("list/lista_vendedores.back") ?></a>
    

 <?=   $this->endSection(); ?>