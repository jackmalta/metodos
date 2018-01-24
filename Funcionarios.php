<?php
  class Funcionarios {
    public $nome;
    public $salario = 1000;

    function aumentaSalario($valor)
    {
      $this->salario += $valor;
    }

    function consultaDados()
    {
      echo "Nome: $this->nome \nSalário: $this->salario".PHP_EOL;
    }
  }

 ?>
