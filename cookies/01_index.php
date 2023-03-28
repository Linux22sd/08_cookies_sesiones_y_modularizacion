<?php
setcookie(
    name: "header_color",
    value: "grey"
);
$color = $_COOKIE["header_color"] ?? "blue";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>PHP</title>
</head>
<body>
    <header style="background: <?= $color ?>">
        <img src="./php-logo-icon-tab-85498608.jpg" alt="logo">
    </header>
</body>
</html>

