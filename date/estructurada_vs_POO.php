<?php
// por procedimiento / estructurada / funciones

$interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "Y-m-d")."<br>";

// poo
 
$interval1 = DateInterval::createFromDateString("5 days");
$date1 = new DateTime();
$date1->add($interval1);
echo $date1->format("Y-m-d")."<br>";

?>