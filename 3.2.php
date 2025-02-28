<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

rsort($numbers);

$thirdMax = $numbers[2];

echo "Третье максимальное число в массиве: " . $thirdMax . "\n";
