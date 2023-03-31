<?php
namespace App\Classes;
use App\Traits\Group;

class Admin{
    use Group;
    public function saludar(){
        return "Hola";
    }
    public function despedirse(){
        return "Adios";
    }
}


?>