<?php

require_once('./ClaseClima.php');

$archivo_json = "clima.json";

$cl1 = new Clima(
    "1",
    "Cd. Lerdo",
    "36",
    "18",
    "35",
    "13",
    "16",
    "14",
    "7"
);
$cl2 = new Clima(
    "2",
    "Chihuahua",
    "35",
    "11",
    "14",
    "7",
    "16",
    "35",
    "-2"
);
$cl3 = new Clima(
    "3",
    "Saltillo",
    "33",
    "28",
    "20",
    "10",
    "16",
    "41",
    "8"
);
$cl4 = new Clima(
    "4",
    "Cdmx",
    "31",
    "25",
    "16",
    "9",
    "9.7",
    "63",
    "9"
);
$cl5 = new Clima(
    "5",
    "Durango",
    "35",
    "29",
    "14",
    "11",
    "16",
    "34",
    "2"
);
$clima = array();
$clima[] = $cl1;
$clima[] = $cl2;
$clima[] = $cl3;
$clima[] = $cl4;
$clima[] = $cl5;

$json_string = json_encode($clima);

$arch = fopen($archivo_json,'w');
if( $arch == false ) {
    echo ( "Error al abrir el archivo" );
    exit();
}
fwrite($arch,$json_string);
fclose($arch);
echo '<h3>Datos escritos en clima.json </h3>';
header("refresh:2;url=mostrar_json.php");
?>
