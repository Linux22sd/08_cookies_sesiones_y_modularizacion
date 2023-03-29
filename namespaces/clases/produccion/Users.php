<?php
namespace  userProduc;
class Users{
    protected $lenguaje;
    protected $fecha;

    public function __construct($lenguaje, $fecha){
        $this->lenguaje = $lenguaje;
        $this->fecha = $fecha;
    }

    public function getLenguaje(){
        return $this->lenguaje;
    }
    public function getFecha(){
        return $this->fecha->format("d/m/Y.");
    }
    public function ide(){
        return "Visual Studio Code.";
    }
}

?>