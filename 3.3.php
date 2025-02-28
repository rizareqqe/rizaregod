<?php

$students = [
 ['name' => 'Маша', 'age' => 22, 'grades' => [5, 4, 5]],
 ['name' => 'Витя', 'age' => 23, 'grades' => [3, 4, 2]],
 ['name' => 'Олег', 'age' => 21, 'grades' => [4, 5, 5]],
];

function calculateAverage($grades)
{
 return array_sum($grades) / count($grades);
}

$result = [];
foreach ($students as $student) {
 $average = calculateAverage($student['grades']);
 if ($average >= 4) {
  $result[] = $student['name'] . ": " . number_format($average, 2);
 }
}

echo implode(" ", $result) . "\n";
