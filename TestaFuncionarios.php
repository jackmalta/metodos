<?php

  require 'Funcionarios.php';

  $funcionario = new Funcionarios();

  $funcionario->aumentaSalario(250);
  echo "$funcionario->salario".PHP_EOL;

 ?>
