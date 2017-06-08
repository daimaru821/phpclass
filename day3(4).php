<?php
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$number3 = $_GET['number3'];

if ($number1 > $number2 && $number1 > $number3) {
  echo $number1 . " is  greatest number.";
}elseif ($number2 > $number1 && $number2 > $number3){
  echo $number2 . " is greatest number.";
}else{
  echo $number3 . " is greatest number";
}
