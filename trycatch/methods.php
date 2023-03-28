<?php

function division(){
    return 20/0;
}
try{
    $resultado = division();
    echo $resultado;
}
catch(Throwable  $e){

    echo "-----> Por mensaje:<br>";
    echo $e->getMessage();
    echo "<br><br>";

    echo "-----> Por codigo:<br>";
    echo $e->getCode();
    echo "<br><br>";

    echo "-----> Por archivo:<br>";
    echo $e->getFile();
    echo "<br><br>";

    echo "-----> Por linea:<br>";
    echo $e->getLine();
    echo "<br><br>";

    echo "-----> Por segimiento en array:";
    echo "<pre>";
    print_r($e->getTrace());
    echo "</pre>";

    echo "-----> Por seguiniento en texto:<br>";
    echo $e->getTraceAsString();
}
?>