<?= $this->extend('modelo_relatorio'); ?>
<?= $this->section('lista'); ?>
<?php
if ($Tipo == "mes") {
?>
   <table>
      <thead>
         <tr>
            <th>Mês e Ano</th>
            <th>Quantidade Vendida</th>
         </tr>
         </thead>
      <tbody>
         <?php
         foreach ($Resultados as $Resultado) {
         ?>
            <tr>
               <td> <?= $Resultado->MES_E_ANO ?> </td>
               <td> <?= $Resultado->QTD ?> </td>
            </tr>
      <?php
         }
      ?>
      </tbody>
   </table>
<?php
}
?>
<?php
if ($Tipo == "produto") {
?>
   <table>
      <thead>
         <tr>
            <th>Produto</th>
            <th>Quantidade Vendida</th>
            <th>Unidades Vendidas</th>
         </tr>
      </thead>
      <tbody>
         <?php
         foreach ($Resultados as $Resultado) {
         ?>
            <tr>
               <td> <?= $Resultado->NOME_PRODUTO ?> </td>
               <td> <?= $Resultado->QTD ?> </td>
               <td> <?= $Resultado->TOTAL_VENDA ?> </td>

            </tr>
         <?php
         }
         ?>
      </tbody>
   </table>
   <br>
<?php
}
?>
<?php
if ($Tipo == "vendedor") {
?>
   <table>
      <thead>
         <tr>
            <th>Funcionario</th>
            <th>Quantidade Vendida</th>
         </tr>
      </thead>
      <tbody>
         <?php
         foreach ($Resultados as $Resultado) {
         ?>
            <tr>
               <td> <?= $Resultado->NOME_VENDEDOR ?> </td>
               <td> <?= $Resultado->QTD ?> </td>
            </tr>
         <?php
         }
         ?>
      </tbody>
   </table>
   <br>
<?php
}
?>
<?= $this->endSection(); ?>