<?php
// Establecer la zona horaria
date_default_timezone_set("America/Mexico_City");

// Obtener la fecha actual
$now = date("Y-m-d H:i:s");
echo $now;

// devuelve un objeto
$now1 = date_create();
echo "<pre>";
print_r($now1);
echo "</pre>";

// strtotime
echo strtotime($now);
echo "<br>";
echo strtotime("now");
echo "<br>";
echo strtotime("next monday");

// Fechas immutables esta fecha no se puede modificar
$date_immutable = new DateTimeImmutable();
echo "<pre>";
print_r($date_immutable);
echo "</pre>";

// Diferencia de tiempo
$today = new DateTime();
$fecha = new DateTime("1978-02-15");
$interval = $fecha->diff($today);
echo $interval->format("%Y anios %d dias")."<br>";

// Crear desde un formato dado
$date3 = DateTime::createFromFormat("l d F Y", "Sunday 17 April 2022");
echo $date3->format("Y/m/d l")."<br>";

// Modificar una fecha
$date4 = new DateTime();
$date4->modify("+1 day +2 months");
echo $date4->format("Y m d");

?>