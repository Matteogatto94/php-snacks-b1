<?php

/* 
Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/
$age = $_GET['age'];
$name = $_GET['nome'];
$mail = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
</head>

<body>
    <form action="script.php" method="get">
        <div>
            <label for="age">age</label>
            <input name="age" id="age" type="number">
        </div>
        <div>
            <label for="nome">nome</label>
            <input name="nome" id="nome" type="nome">
        </div>
        <div>
            <label for="mail">email</label>
            <input name="email" id="email" type="email">
        </div>

        <div>
        </div>
        <button type="submit">INVIA</button>
        <button type="reset">reset</button>
    </form>
</body>

</html>