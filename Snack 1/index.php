<?php

/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
*/

$matches = [
    [
        'homeTeam' => [
            'name' => 'LA Lakers',
            'points' => 102,
        ],
        'guestTeam' => [
            'name' => 'LA Clippers',
            'points' => 90,
        ],

    ],

];

echo '<pre>';


// foreach ($matches as $match) {

//     foreach ($match as $team) {
//         var_dump($team['name']);
//         var_dump($team['points']);
//     }
// }

echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap style -->
    <title>Snack 1</title>
</head>

<body>
    <div class="container py-5">
        <h1>Matches</h1>
        <?php foreach ($matches as $match) : ?>

            <?php foreach ($match as $team) : ?>
                <p> <strong><?= $team['name']; ?>: </strong> <?= $team['points'] ?></p>
            <?php endforeach; ?>

        <?php endforeach; ?>

    </div>
</body>

</html>