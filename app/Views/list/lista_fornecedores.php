<?=  $this->extend('modelo'); ?>

<?=  $this->section('lista'); ?>

 <a href=" <?= base_url('Fornecedor/add'); ?> ">+ <?= lang("list/lista_fornecedores.add")?></a>
 <table>
 <tr>
 <th>#</th>
 <th><?= lang("list/lista_fornecedores.name")?></th>
 <th><?= lang("list/lista_fornecedores.cnpj")?></th>
 <th><?= lang("list/lista_fornecedores.end")?></th>
 <th><?= lang("list/lista_fornecedores.cep")?></th>
 <th><?= lang("list/lista_fornecedores.tel")?></th>
 </tr>
<?php foreach($fornecedores as $fornecedor){
    ?>
     <tr>
     <td> <?= $fornecedor->ID_FORNECEDOR ?> </td>
     <td> <?= $fornecedor->NOME_FORNECEDOR ?> </td>
     <td> <?= $fornecedor->CNPJ ?> </td>
     <td> <?= $fornecedor->ENDERECO ?> </td>
     <td> <?= $fornecedor->CEP ?> </td>
     <td> <?= $fornecedor->TELEFONE ?> </td>
     <td><a href=" <?= base_url('Fornecedor/edit/' . $fornecedor->ID_FORNECEDOR) ?> "><?= lang("list/lista_fornecedores.edit")?></a></td>
     <td><a href=" <?= base_url('Fornecedor/del/' . $fornecedor->ID_FORNECEDOR) ?> "><?= lang("list/lista_fornecedores.del")?></a></td>
     </tr>
<?php
    }
    ?>
 </table>
 <br><br>
 <a href=" <?= base_url(); ?> "><?= lang("list/lista_fornecedores.back")?></a>
    

 <?=   $this->endSection(); ?>