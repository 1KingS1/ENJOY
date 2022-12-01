<?= $this->extend('modelo'); ?>
<?= $this->section('lista'); ?>
<?php
   if($Tipo=="mes"){
?>
   <table>
   <tr>
   <th><?= lang("list/lista_relatorio.date")?></th>
   <th><?= lang("list/lista_relatorio.qntvd")?></th>
   </tr>
   <?php
      foreach($Resultados as $Resultado){
         ?>
      <tr>
      <td> <?= $Resultado->MES_E_ANO ?> </td>
      <td> <?= $Resultado->QTD ?> </td>
      <td></td>
      </tr>
      <?php
      }
      ?>
   </table>
   <?php
      if(!empty($Link)&&$Link=='true'){
         echo"<a href='".base_url('Venda/relatorio_mes/salvar')."'>".lang("list/lista_relatorio.rel")."</a>
         <br>
         <a href='".base_url('/Venda')."'>".lang("list/lista_relatorio.back")."</a>";
      }
   }
   ?>
<?php
   if($Tipo=="produto"){
?>
   <table>
   <tr>
   <th><?= lang("list/lista_relatorio.prod")?></th>
   <th><?= lang("list/lista_relatorio.qntvd")?></th>
   <th><?= lang("list/lista_relatorio.unvd")?></th>
   </tr>
   <?php
      foreach($Resultados as $Resultado){
         ?>
      <tr>
      <td> <?= $Resultado->NOME_PRODUTO ?> </td>
      <td> <?= $Resultado->QTD ?> </td>
      <td> <?= $Resultado->TOTAL_VENDA ?> </td>
      
      </tr>
      <?php
      }
      ?>
   </table>
   <br>
   <?php
      if(!empty($Link)&&$Link=='true'){
         echo"<a href='".base_url('Venda/relatorio_produto/salvar')."'>".lang("list/lista_relatorio.rel")."</a>
         <br>
         <a href='".base_url('/Venda')."'>".lang("list/lista_relatorio.back")."</a>";
      }
   }
   ?>
<?php
   if($Tipo=="vendedor"){
?>
   <table>
   <tr>
   <th><?= lang("list/lista_relatorio.func")?></th>
   <th><?= lang("list/lista_relatorio.qntvd")?></th>
   </tr>
   <?php
      foreach($Resultados as $Resultado){
         ?>
      <tr>
      <td> <?= $Resultado->NOME_VENDEDOR ?> </td>
      <td> <?= $Resultado->QTD ?> </td>
      <td></td>
      </tr>
      <?php
      }
      ?>
   </table>
   <br>
   <?php
      if(!empty($Link)&&$Link=='true'){
         echo"<a href='".base_url('Venda/relatorio_vendedor/salvar')."'>".lang("list/lista_relatorio.rel")."</a>
         <br>
         <a href='".base_url('/Venda')."'>".lang("list/lista_relatorio.back")."</a>";
      }
   }
   ?>
<?= $this->endSection(); ?>