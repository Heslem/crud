<?php

/**
 * @param array<int> $array
 * @return int
 */
function calculateSum(array $array): int {
    $sum = 0; // Инициализируем переменную $sum
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo 'Сумма чисел: ' . calculateSum($numbers);