<?php
// Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .box {
            margin: 2px;
            display: flex;
            padding: 1rem;
        }

        .box.gray {
            border: 2px solid gray;
        }

        .box.green {
            border: 2px solid yellowgreen;
        }
    </style>
    <title>snack-6</title>
</head>

<body>
    <?php
    $teachers = $db['teachers'];
    $pm = $db['pm'];

    for ($i = 0; $i < count($teachers); $i++) {
    ?>
        <div class="box gray">
            <?php echo  $teachers[$i]['name'] . " " . $teachers[$i]['lastname'] ?>
        </div>
    <?php
    }

    for ($i = 0; $i < count($pm); $i++) {
    ?>
        <div class="box green">
            <?php echo  $pm[$i]['name'] . " " . $pm[$i]['lastname'] ?>
        </div>
    <?php
    }
    ?>
</body>

</html>

<php ?>