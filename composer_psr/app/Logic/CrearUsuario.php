<?php
use App\Classes\Users;
use App\Classes\Lenguaje;

function createUsers(){
    $luis = new Users("Luis","Padilla");
    $php = new Lenguaje("PHP", new DateTime("now"));
    echo $luis->getName()." "."esta".$luis->dice()."en"." ".$php->getLenguaje();
}

?>