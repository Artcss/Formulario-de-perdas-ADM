<?php
$servidor = "localhost"; // nome servidor
$dbname = "formulario"; // nome do banco
$dbusuario = "root"; // usuario do banco
$dbsenha = ""; // senha do banco
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

  if (!$conn) {

    die ("conexão falhou: " . mysqli_connect_error());
  }
  ?>