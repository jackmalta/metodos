<?php
  require 'Conta.php';

  $conta = new Conta();

  echo "Saldo: $conta->saldo".PHP_EOL;
  $conta->deposita(2500);

  echo "$conta->saldo".PHP_EOL;
 ?>
