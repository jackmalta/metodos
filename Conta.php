<?php
class Conta
{
  public $numero;
  public $saldo = 800;
  public $limite = 500;
  public $agencia = 35;

  //Depositar
  function deposita($valor)
  {
    $this->saldo += $valor;
  }

  function saca($valor)
  {
    $this->saldo += $valor;
  }

  function imprimeExtrato()
  {
    echo "Número da conta: $this->numero \nSaldo: $this->saldo \nLimite: $this->limite \nAgência: $this->agencia".PHP_EOL;
  }

  function consultaSaldoDisponivel()
  {
    echo "Saldo Disponível: $this->saldo \tLimite de Saque: $this->limite".PHP_EOL;
  }

}

 ?>
