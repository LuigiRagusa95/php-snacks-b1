<?php
// Snack 7
// Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
$class = [
    [
        "name" => "Luigi",
        "surname" => "Ragusa",
        "votes" => [8, 9, 6, 8]
    ],
    [
        "name" => "Peter",
        "surname" => "Griffin",
        "votes" => [3, 5, 8, 1]
    ],
    [
        "name" => "Harry",
        "surname" => "Potter",
        "votes" => [4, 10, 3, 2]
    ],
];
$array_keys = array_keys($class);


for ($i = 0; $i < count($array_keys); $i++) {
    echo '<br />';
    $average = array_sum(($class[$array_keys[$i]]['votes'])) / count(($class[$array_keys[$i]]['votes']));
    echo '<span>' . "Nome: " . ($class[$array_keys[$i]]['name']) . '</span><br />';
    echo '<span>' . "Cognome: " . ($class[$array_keys[$i]]['surname']) . '</span><br />';
    echo '<span>' . "Media: " . $average . '</span><br />';
}
