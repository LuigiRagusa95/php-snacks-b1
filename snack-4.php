<?php
// Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta

$min = 0;
$max = 100;
$count = 0;
$quantity = 15;
$rand_array = [];

while ($count <= $quantity) {
    $count++;
    $rand_number = rand($min, $max);

    if (!in_array($rand_number, $rand_array)) {
        $rand_array[] = $rand_number;
    }
}

var_dump($rand_array);
