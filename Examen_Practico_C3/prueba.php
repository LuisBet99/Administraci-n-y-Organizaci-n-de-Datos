<?php
    $archivo = 'clima.json';
    if(file_exists($archivo)){
        $handle = fopen($archivo, 'r')
        or die("Error: No se puede abrir el archivo");
        $size = filesize($archivo);
        $contenido = fread($handle, $size);
        fclose($handle);
        $listatemper = json_decode($contenido, true);
        $numdatos = count($listatemper);
        echo '<br>';
        for($i = 0; $i <= $numdatos; $i++){
            echo $listatemper[$i]['Temp_Max'] . '<br>';
        }
    }
?>