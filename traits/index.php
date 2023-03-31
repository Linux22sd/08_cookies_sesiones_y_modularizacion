<?php

require "vendor/autoload.php";

use App\Classes\Admin;
use App\Classes\User;

$Luis = new Admin();
$Pedro = new User();

echo $Luis->saludar() ." "."Luis"."<br>";
echo "Estas"." ". $Luis->revisar() ."<br>";
echo "o estas"." ".$Luis->agregar()."?";
?>