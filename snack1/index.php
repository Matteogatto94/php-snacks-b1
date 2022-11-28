<?php
/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/

$matchs = [
    "Olimpia Milano - Cantù | 55-60",
    "Juventus - Maccabi Haifa | 120-55",
    "Inter Milano - Brescia | 25-96",
    "Cosenza - Catanzaro | 120-15",
    "Palermo - Messina | 55-69"
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
    <h1><?= 'Last match played:' ?></h1>
    <?php foreach ($matchs as $match) { ?>
        <p><?= $match ?></p>
    <?php } ?>
</body>

</html>