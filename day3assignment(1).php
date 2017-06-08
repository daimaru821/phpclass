<?php
$number1 =$_GET['number1'];
$opr =$_GET['opr'];
$number2 =$_GET['number2'];

switch ($opr) {
  case '+':
    echo $number1 + $number2;
    break;
  case '-':
    echo $number1 - $number2;
    break;
  case '/':
    echo $number1 / $number2;
    break;
  case '*':
    echo $number1 * $number2;
    break;

  default:
    echo "error";
    break;
}
 ?>
