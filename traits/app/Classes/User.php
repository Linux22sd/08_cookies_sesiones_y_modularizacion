<?php
namespace App\Classes;
use App\Traits\Group;

class User{
    use Group;
    public function programar(){
        return "programando";
    }

    public function debugging(){
        return "debuggeando";
    }
}
?>