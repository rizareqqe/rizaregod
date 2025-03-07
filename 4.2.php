<?php

function isPerfectNumber($N)
{

 $sum = 0;


 for ($i = 1; $i < $N; $i++) {
  if ($N % $i === 0) {
   $sum = $sum + $i;
  }
 }


 return $sum === $N;
}


$N = 496;

if (isPerfectNumber($N))
 echo " Идеальное число";
else
 echo "Не идеальное число";
