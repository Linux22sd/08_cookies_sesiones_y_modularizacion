<?php
class User_exception extends Exception{
    public function get_nameUser(){
        return "El nombre es correcto";
    }
}
class Admin_exception extends Exception{
    public function get_nameAdmin(){
        return "El nombre es incorrecto";
    }
}
try{
    $exception = readline("Exception a lanzar:  ");

    if($exception == "Luis"){
        throw new User_exception("hola");
    }
    else{
        throw new Admin_exception("adios");
    }
}
catch(User_exception $e){
    echo $e->getMessage()."\n";
    echo $e->get_nameUser(). "\n";
}
catch(Admin_exception $e){
    echo $e->getMessage()."\n";
    echo $e->get_nameAdmin(). "\n";
}
finally{
    echo "Este es finally y siempre se ejecuta\n";
}
?>