<?php
try{
    $resultado = 20/0;
    echo $resultado; 
}
catch(Throwable $e){
    echo $e->getMessage();
}


?>