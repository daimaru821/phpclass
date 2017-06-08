<?php
$score = $_GET['score'];

if ($score <= 33 && $score >= 0) {
 echo "Fail";
}elseif ($score > 33 && $score <=40) {
  echo "D";
}elseif ($score > 40 && $score <=50) {
  echo "C";
}elseif ($score > 50 && $score <=60) {
  echo "B";
}elseif ($score > 60 && $score <=80) {
  echo "A";
}elseif ($score > 80 && $score <=100) {
  echo "A+";
}else {
  echo "Nothing";
}
 ?>
