<?php
  include("/index.html");
  if($_POST) {
    $v1 = $_POST("txtv1");
    $v2 = $_POST("txtv2");
    $op = $_POST("operacao");

    if ($op == 'Soma') {
      $total = $v1 + $v2;
      echo $total;
    } else if ($op == 'Subtra��o') {
      $total = $v1 - $v2;
      echo $total;
    } else if ($op == 'Multiplica��o') {
      $total = $v1 * $v2;
      echo $total;
    } else if ($op == 'Divis�o') {
      $total = $v1 / $v2;
      echo $total;
    }
  }
?>