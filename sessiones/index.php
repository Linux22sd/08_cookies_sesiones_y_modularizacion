<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
</head>
<body>
    <?php if(isset($_SESSION["id"])): ?>
        <h1>hola <?= $_SESSION["username"] ?></h1>
        <p>tu email es: <?= $_SESSION["email"]?></p>
    <?php else: ?>
        <h2>No has iniciado session</h2>    
    <?php endif ?>
    
</body>
</html>