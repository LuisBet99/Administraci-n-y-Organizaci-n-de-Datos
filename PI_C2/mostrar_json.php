<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Climas Json</title>
</head>
<body>
    <?php

    $archivo = 'clima.json';

    if (file_exists("$archivo")) {

        $x = fopen($archivo, 'r')
            or die("Error: No se puede abrir el archivo json");

        $size = filesize($archivo);

        $contenido = fread($x, $size);

        fclose($x);

        $listadeClimas = json_decode($contenido, true);
        $numdeClimas = count($listadeClimas);
?> 
        <div class="container">
            <h1 class="titulo">El Clima</h1>
            <div class="table-responsive">
                <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Ciudad</th>
                        <th>Temperatura Max</th>
                        <th>Temperatura Min</th>
                        <th>Sensación Térmica</th>
                        <th>Viento km/h</th>
                        <th>Visibilidad km</th>
                        <th>Humedad %</th>
                        <th>Punto de rocío</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < $numdeClimas; $i++) {
                    echo '<tr>';
                    echo '<td>' . $listadeClimas[$i]['id'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['ciudad'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['temp_max'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['temp_min'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['sensacion_termica'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['viento'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['visibilidad'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['humedad'] . '</td>';
                    echo '<td>' . $listadeClimas[$i]['punto_rocio'] . '</td>';
                    echo '</tr>';
                } 
                ?> 
                </tbody>
                </table>
            </div>
        </div>

    <?php
    } 
    ?>
</body>
</html>