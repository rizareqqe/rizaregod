<?php
function daysvmonth($month)
{
 if ($month === 2) {
  return 28;
 } elseif (in_array($month, [4, 6, 9, 11])) {
  return 30;
 } else {
  return 31;
 }
}


$month = (int)readline("Введите номер месяца с 1 по 12: ");


if ($month >= 1 && $month <= 12) {
 echo "В месяце " . daysvmonth($month) . " дней.\n";
} else {
 echo "Такого месяца нет-_-.\n";
} 