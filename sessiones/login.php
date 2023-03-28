<?php
session_start();
$users = [
    [
        "username" => "luis",
        "email" => "luis@hotmail.com"
    ],
    [
        "username" => "alejandro",
        "email" => "alejandro@hotmail.com"
    ]
];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
?>