<?php
$limit = 100;

echo "Простые числа от 1 до $limit:";

for ($n = 2; $n <= $limit; $n++) {

 $b = true;

 for ($a = 2; $a < $n; $a++) {

  if ($n % $a === 0) {

   $b = false;

   break;
  }
 }

 if ($b) {

  echo $n . " ";
 }
}
