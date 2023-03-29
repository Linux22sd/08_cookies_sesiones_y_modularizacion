<?php
require "clases/produccion/Users.php";
require "clases/officina/Users.php";

use userOffice\Users;
use userProduc\Users as Prog;

$luis = new Users("Luis","Padilla");
$alejandro = new Users("Alejandro", "Diaz");

$php = new Prog("PHP", new DateTime("now"));
$javascript = new Prog("JavaScript", new DateTime("now"));

?>