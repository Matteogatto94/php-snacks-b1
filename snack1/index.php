<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$matchs = [
    [
        'hometeam' => 'Olimpia Milano',
        'guestteam' => 'Cantù',
        'homescore' => 55,
        'guestscore' => 60
    ],
    [
        'hometeam' => 'Juventus',
        'guestteam' => 'Maccabi Haifa',
        'homescore' => 120,
        'guestscore' => 55
    ],
    [
        'hometeam' => 'Inter Milano',
        'guestteam' => 'Brescia',
        'homescore' => 25,
        'guestscore' => 96
    ],
    [
        'hometeam' => 'Cosenza',
        'guestteam' => 'Catanzaro',
        'homescore' => 120,
        'guestscore' => 15
    ],
    [
        'hometeam' => 'Palermo',
        'guestteam' => 'Messina',
        'homescore' => 55,
        'guestscore' => 69
    ]

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack1</title>
</head>

<body>
    <ul>
        <?php foreach ($matchs as $match) : ?>
            <li><?= $match['hometeam'] . ' - ' . $match['guestteam'] . ' | ' . $match['homescore'] . ' - ' . $match['guestscore'] ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>