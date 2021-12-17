<?php
// Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore 
// un array di post associati a quella data. Stampare ogni data con i relativi post.
// Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [
    '16/12/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 2'
        ],
        [
            'title' => 'Post 3',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 3'
        ]
    ],
    '17/12/2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 5'
        ],
    ],
    '18/12/2021' => [
        [
            'title' => 'Post 6',
            'author' => 'Luigi Ragusa',
            'text' => 'Testo post 6'
        ],
    ]
];

$array_of_keys_1 = array_keys($posts);

for ($i = 0; $i < count($array_of_keys_1); $i++) {
    $array_of_keys_2 = array_keys($posts[$array_of_keys_1[$i]]);

    for ($j = 0; $j < count($array_of_keys_2); $j++) {
        $values = $posts[$array_of_keys_1[$i]][$array_of_keys_2[$j]]
?>
        <h1><?php echo $values['title'] ?></h1>
        <h3><?php echo $values['author'] ?></h3>
        <p><?php echo $values['text'] ?></p>
<?php
    }
}
?>