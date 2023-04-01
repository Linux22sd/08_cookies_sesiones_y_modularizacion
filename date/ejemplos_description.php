<?php
// date()
// DateTime()
// DateInterval()
// time()


// Trabajando con fechas de forma estructurada y orientada a objetos

/**
 * Forma estructurada:
 * Las funciones nos facilitan muchas cosas, pero muchas veces se pueden prestar a malas
 * practicas de escritura de codigo.
 * 
 * Orientada a objetos:
 * Cuando usamos POO se empieza a volver mas facil el uso y la lectura del lenguaje, 
 * todo empoeza a ser mas intuitivo.
 */

 // Ejemplo 1
 // Estructurada o tambien se le conoce por procedimiento o por funciones 
 // Agregemos cinco dias a una fecha en especifico.

 $intervalo = date_interval_create_from_date_string('5 days');
 $objeto_dateTime = date_create();
 echo date_format($objeto_dateTime, "Y/m/d") . "<br>";
 date_add($objeto_dateTime, $intervalo);
 echo date_format($objeto_dateTime, "Y/m/d") . "<br><br>";

 // Ejemplo 2
 // Usando POO 
 // Agregemos cinco dias a una fecha en especifico.

 // Creando una instancia de DateInterval
 $instancia_Interval = new DateInterval('P5D');
 $instancia_Interval->createFromDateString("5 days");
 $instancia_datetime = new DateTime();
 $instancia_datetime->add($instancia_Interval);
 echo $instancia_datetime->format("Y/m/d")."<br>";

 // Usando su metodo statico
$intervaloPOO = DateInterval::createFromDateString("5 days");
$date = new DateTime();
$date->add($intervaloPOO);
echo $date->format("Y/m/d");

?>