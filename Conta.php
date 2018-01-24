<?php
class Conta
{
  public $numero;
  public $saldo = 0;


  function deposita($valor)
  {
    $this->saldo += $valor;
  }
}

 ?>
