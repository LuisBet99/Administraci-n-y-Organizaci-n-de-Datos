<?php

//ABRIR EL ARCHIVO
$abrir = fopen("Opiniones.csv", "r");

//LEER TODAS LAS LINEAS
while(!feof($abrir)){
    $leer = fgets($abrir);
    //IMPRIMIR EN PANTALLA LO LEIDO
    echo $leer."<br>";
}

//CERRAR EL ARCHIVO
fclose($abrir);

?>