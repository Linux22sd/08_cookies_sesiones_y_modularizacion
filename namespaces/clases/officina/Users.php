<?php
namespace  userOffice;
class Users{
    protected $name;
    protected $lastname;

    public function __construct($name,$lastname){
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function getName()
    {
        return $this->name ." ". $this->lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }
    public function dice(){
        return " programando ";
    }
}

?>