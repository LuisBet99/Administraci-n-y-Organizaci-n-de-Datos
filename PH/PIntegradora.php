<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Archivo de Texto
    $datos = "datos.txt";

    //Abrir el archivo
    $abrir = fopen($datos, "w")
        //Mensaje en caso de no poder abrir el archivo
        or die("Error al abrir el archivo");

        //Escribir en el archivo
        fwrite($abrir, "PH <br>");
        //Leer el archivo
        $leer = readfile($datos);


        $random = mt_rand(1.0, 15.0)/ 4.0;
        echo (" Promedio : $random <br>");

        function rand_float($min, $max){
            return mt_rand(1.0, 15.0)/ 4.0;
        }

        $Arreglo = array();
        for ($i=0; $i < 4.0 ; $i++) { 
            $random = rand_float(1.0, 15.0);
            array_push($Arreglo, $random);
        }

        var_dump($Arreglo);
        foreach($Arreglo as $valor){
            echo(" $valor <br>");
        }


    ?>
</body>
</html>