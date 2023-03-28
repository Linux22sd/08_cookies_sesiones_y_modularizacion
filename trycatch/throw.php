<?php
// Este ejercicio se corre em consola
try{
    $comprar = readline("Que quieres comprar?");

    if($comprar !== "auto"){
        throw new Exception("Lo sentimos solo vendemos autos\n");
    }
    else{
        echo "Tenemos una gran variedad de automoviles\n";
    }
    
}
catch(Throwable $e){
    echo $e->getMessage();
}
?>