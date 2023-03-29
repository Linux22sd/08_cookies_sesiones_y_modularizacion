<?php
require "logic/logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <ul>
        <li><?= $luis->getName() ?> esta <?= $luis->dice() . $php->getLenguaje() ?> en <?= $php->ide() ?> la fecha de <?= $php->getFecha() ?></li>

        <li><?= $alejandro->getName() ?> esta <?= $alejandro->dice() . $javascript->getLenguaje() ?> en <?= $javascript->ide() ?> la fecha de <?= $javascript->getFecha() ?></li>

    </ul>
    
</body>
</html>