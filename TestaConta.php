<?php
  require 'Conta.php';

  $conta = new Conta();

  $argv;

  //Saque
  if ($argv[1] < 0) {
    $val = $argv[1];
    echo "Saldo Inicial: $conta->saldo".PHP_EOL;
    $conta->saca($val);

    echo "Saldo Atual: $conta->saldo".PHP_EOL;
  }
  elseif ($argv[1] > 10) {
    $val = $argv[1];
    echo "Saldo Inicial: $conta->saldo".PHP_EOL;
    $conta->deposita($val);

    echo "Saldo Atual: $conta->saldo".PHP_EOL;
  }elseif ($argv[1] == 1) {
    //imprimeExtrato

    $conta->imprimeExtrato();
  }elseif ($argv[1] == 2) {
    //consultaSaldoDisponivel
    $conta->consultaSaldoDisponivel();
  }else echo "Valor inválido!";





 ?>
