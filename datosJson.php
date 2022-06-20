<?php

$archivo = fopen("datosCrudos.txt","r");
$n°linea = 0;


$computadoras0 = 0;
$computadoras1 = 0;
$computadoras2 = 0;
$computadoras3 = 0;
$computadoras4 = 0;


$pantallas0 = 0;
$pantallas1 = 0;
$pantallas2 = 0;
$pantallas3 = 0;
$pantallas4 = 0;


while ($linea = fgets($archivo)){

    $aux[$n°linea] = $linea;
    if(substr($aux[$n°linea], 0, -4) == 0){
        $pantallas0++;
    }
    if(substr($aux[$n°linea], 2) == 0){
        $computadoras0++;
    }
    if(substr($aux[$n°linea], 0, -4) == 1){
        $pantallas1++;
    }
    if(substr($aux[$n°linea], 2) == 1){
        $computadoras1++;
    }
    if(substr($aux[$n°linea], 0, -4) == 2){
        $pantallas2++;
    }
    if(substr($aux[$n°linea], 2) == 2){
        $computadoras2++;
    }
    if(substr($aux[$n°linea], 0, -4) == 3){
        $pantallas3++;
    }
    if(substr($aux[$n°linea], 2) == 3){
        $computadoras3++;
    }
    if(substr($aux[$n°linea], 0, -4) == 4){
        $pantallas4++;
    }
    if(substr($aux[$n°linea], 2) == 4){
        $computadoras4++;
    }

    $n°linea++;
    
}

$datos = array (
    "0" => array(
        "0_televisor" => "$pantallas0",
        "1_televisor" => "$pantallas1",
        "2_televisor" => "$pantallas2",
        "3_televisor" => "$pantallas3",
        "4_televisor" => "$pantallas4"
    ),
    "1" => array(
        "0_computadora" => "$computadoras0",
        "1_computadora" => "$computadoras1",
        "2_computadora" => "$computadoras2",
        "3_computadora" => "$computadoras3",
        "4_computadora" => "$computadoras4"
    )
    );

    $json = json_encode($datos);
    $bytes = file_put_contents("datosProcesados.json", $json);
    echo "Se ha creado exitosamente";

    ?>