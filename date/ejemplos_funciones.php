<?php
//----------------------------------------------------------------------------
// Definir una zona de horario
echo "Usando default_timezone_set() y date('Y/m/d')"."<br>";
date_default_timezone_set("America/Mexico_City");

// Obtener la fecha actual usando funciones
$now = date("Y/m/d");
echo $now."<br><br>";

//----------------------------------------------------------------------------
// Obtener la fecha actual Usando POO

// Usando una instancia de la clase
echo "Usando POO"."<br><br>";
echo "Usando new DateTime()"."<br>";
$nowPOO1 = new DateTime();
echo $nowPOO1->format("Y/m/d")."<br>";
// Usando un metodo de la clase DateTime
echo "Usando date_create()"."<br>";
$nowPOO = date_create();
echo $nowPOO->format("Y/m/d")."<br><br>";

//-----------------------------------------------------------------------------
// strtotime convierte una cadena de texto a formato UNIX
echo "El tiempo UNIX es el tiempo en segundos que han pasado dede el 1 de Enero de 1970 hasta el dia de hoy"."<br>";
echo "Tiempo Unix en segundos desde el primero de Enero de 1970"."<br>";
echo strtotime("now")."<br><br>";

echo "Tiempo Unix en segundos desde el primero de Enero de 1970 hasta el 15 de Febrero del 2008"."<br>";
echo strtotime("15 February 2008")."<br><br>";

echo "Tiempo Unix en segundos desde el primero de Enero de 1970 hasta el dia de manana"."<br>";
echo strtotime("+1 day")."<br><br>";

echo "Tiempo Unix en segundos desde el primero de Enero de 1970 hasta el dia de ayer"."<br>";
echo strtotime("-1 day")."<br>";

?>