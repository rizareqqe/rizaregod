<?php

function calculateExpression($expression)
{
 $expression = str_replace(' ', '', $expression);
 if (empty($expression) || preg_match('/[a-zA-Z\\\\]/', $expression)) {
  return "Error";
 }

 $numbers = [];
 $operations = [];
 $i = 0;
 $currentNumber = '';

 while ($i < strlen($expression)) {
  $char = $expression[$i];

  if (is_numeric($char) || ($char === '-' && ($i === 0 || !is_numeric($expression[$i - 1])))) {
   $currentNumber .= $char;
   while ($i + 1 < strlen($expression) && is_numeric($expression[$i + 1])) {
    $currentNumber .= $expression[++$i];
   }
   if ($currentNumber !== '') {
    $numbers[] = (int)$currentNumber;
    $currentNumber = '';
   }
  } elseif ($char === '+' || $char === '-' || $char === '*' || $char === '/') {
   $operations[] = $char;
  } else {
   return "Error";
  }
  $i++;
 }

 if (count($numbers) > 5) {
  return "Error";
 }

 if (empty($numbers)) {
  return "Error";
 }

 $result = $numbers[0];
 for ($i = 0; $i < count($operations); $i++) {
  if (!isset($numbers[$i + 1])) {
   return "Error";
  }
  $op = $operations[$i];
  $num = $numbers[$i + 1];

  if ($op === '+') $result += $num;
  elseif ($op === '-') $result -= $num;
  elseif ($op === '*') $result *= $num;
  elseif ($op === '/' && $num !== 0) $result /= $num;
  else return "Error";
 }

 if (!is_int($result)) {
  return "Error";
 }

 return $result;
}

$testCases = [
 "2+4",
 "-2+8-4",
 "abc",
 "5\\5",
 "5/0"
];

foreach ($testCases as $test) {
 echo "Входная строка: $test Ответ: " . calculateExpression($test) . "\n";
}
