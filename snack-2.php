<?php
// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
// che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
// Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && !is_nan($age) && (strpos($mail, '.') !== false && strpos($mail, '@') !== false)) {
        echo "Accesso eseguito correttamente";
    } else {
        echo "I dati inseriti non sono corretti";
    }
} else {
    echo "Non hai eseguito l'accesso";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-2</title>
</head>

<body>
    <form action="#" method="GET">
        <label for="name">Name:</label>
        <input type="text" name="name" id="input-name" autocomplete="off">
        <label for="name">Mail:</label>
        <input type="text" name="mail" id="input-name" autocomplete="off">
        <label for="name">Age:</label>
        <input type="text" name="age" id="input-name" autocomplete="off">
        <button>Submit</button>
    </form>
</body>

</html>