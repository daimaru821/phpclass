<?php
$month = $_GET['month'];

if ($month == J || $month == j) {
  echo "January";
}elseif ($month == F || $month == f) {
  echo "Feburanry";
}elseif ($month == M || $month == m) {
  echo "March";
}elseif ($month == A || $month == a) {
  echo "April";
}elseif ($month == Ma || $month == ma) {
  echo "May";
}elseif ($month == Ju || $month == ju) {
  echo "June";
}elseif ($month == Jl || $month == jl) {
  echo "July";
}elseif ($month == Au || $month == au) {
  echo "August";
}elseif ($month == Se || $month == se) {
  echo "Septenmber";
}elseif ($month == Oc || $month == oc) {
  echo "Ocutober";
}elseif ($month == No || $month == no) {
  echo "Novenber";
}elseif ($month == De || $month == de) {
  echo "Decenmber";
}else{
  echo "false";
}
 ?>
