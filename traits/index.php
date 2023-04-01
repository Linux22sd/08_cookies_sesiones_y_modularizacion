<?php

require "vendor/autoload.php";

use App\Classes\Admin;
use App\Classes\User;

$Luis = new Admin();
$Pedro = new User();

echo $Luis->saludar() ." "."Luis"."<br>";
echo "Estas"." ". $Luis->revisar() ."<br>";            // clase Admin
echo "o estas"." ".$Luis->agregar()."?"."<br><br>";    // trait  Group

echo "Pedro esta"." ".$Pedro->programar()."<br>";      // clase User
echo "y tambien"." ".$Pedro->revisar()."<br>";         // trait  Group
  
?>