<?php
function treygolniki($a, $b, $c)
{
    if ($a === $b && $b === $c) {
        return "Равносторонний";
    } elseif ($a === $b || $a === $c || $b === $c) {
        return "Равнобедренный";
    } else {
        return "Разносторонний";
    }
}


$a = (float)readline("Первая сторона: ");
$b = (float)readline("Вторая сторона: ");
$c = (float)readline("Третья сторона: ");


if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Треугольник является " . treygolniki($a, $b, $c) . ".\n";
} else {
    echo "Тут такого треугольника и не бывало.\n";
}
