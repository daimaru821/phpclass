<?php
$money = $_GET['money'];
$change = 0;

if ($money >= 2000) {
  $twothu = $money / 2000;
  $twothu = floor($twothu);
  $change1 = $money - $twothu * 2000;
  $fivehun = $change1 / 500;
  $fivehun = floor($fivehun);
  $change2 = $change1 - $fivehun * 500;
  $onehun = $change2 / 100;
  $onehun = floor($onehun);
  $change3 = $change2 - $onehun * 100;
  $fifty = $change3 / 50;
  $fifty = floor($fifty);
  $change4 = $change3 - $fifty * 50;
  $ten = $change4 / 10;
  $ten = floor($ten);

  echo "Your money are 2000 * ".$twothu." and 500 * ".$fivehun." and 100 * ".$onehun." and 50 * ".$fifty." and 10 * ".$ten;
}elseif($money < 2000 && $money >= 500){
  $fivehun = $money / 500;
  $fivehun = floor($fivehun);
  $change2 = $money - $fivehun * 500;
  $onehun = $change2 / 100;
  $onehun = floor($onehun);
  $change3 = $change2 - $onehun * 100;
  $fifty = $change3 / 50;
  $fifty = floor($fifty);
  $change4 = $change3 - $fifty * 50;
  $ten = $change4 / 10;
  $ten = floor($ten);

  echo "Your money are 500 * ".$fivehun." and 100 * ".$onehun." and 50 * ".$fifty." and 10 * ".$ten;
}elseif($money < 500 && $money >= 100){
  $onehun = $money / 100;
  $onehun = floor($onehun);
  $change3 = $money - $onehun * 100;
  $fifty = $change3 / 50;
  $fifty = floor($fifty);
  $change4 = $change3 - $fifty * 50;
  $ten = $change4 / 10;
  $ten = floor($ten);

  echo "Your money are 100 * ".$onehun." and 50 * ".$fifty." and 10 * ".$ten;
}elseif($money < 100 && $money >= 50){
  $fifty = $money / 50;
  $fifty = floor($fifty);
  $change4 = $money - $fifty * 50;
  $ten = $change4 / 10;
  $ten = floor($ten);

  echo "Your money are 50 * ".$fifty." and 10 * ".$ten;
}elseif($money < 50 && $money >= 10){
  $ten = $money / 10;
  $ten = floor($ten);
  $change5 = $money - $ten * 10;

  echo "Your money are 10 * ".$ten;
}else{
  error;
}

 ?>
