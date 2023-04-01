<?php
$date = new DateTime();
$birthday = new DateTime("1978/02/15");

$interval = $birthday->diff($date);
// Recordar que por ser un intervalo se tiene que poner el signo de % en su impresion
echo $interval->format("%Y anios %m mes(es) %d dia(s)")."<br>";

// Crear un objeto DateTime a partir de un string
$objeto = DateTime::createFromFormat("l j F Y","Sunday 17 April 2022");
echo $objeto->format("Y/m/d")."<br>";

// Modificar una fecha usando POO
$fecha = new DateTime();
$fecha->modify("-1 day");
echo $fecha->format("Y/m/d");

?>