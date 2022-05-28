<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
    <title>Grafica de climas</title>
</head>
<body>
    <div class="container">
        <div class="centro">
            <h1>Clima del 21 al 31 de mayo</h1>
            <span class="temp"><span class="temp-box max">&nbsp;</span>&nbsp; Temperaturas Máximas</span>
            <span class="temp"><span class="temp-box min">&nbsp;</span>&nbsp; Temperaturas Minimas</span>
            <span class="temp"><span class="temp-box viento">&nbsp;</span>&nbsp; Viento</span>
        </div>
        <div class="ct-chart ct-octave"></div>

        <?php
            $archivo = 'clima.json';
            $handle = fopen($archivo, 'r')
            or die("Error: No se puede abrir el archivo");
            $size = filesize($archivo);
            $contenido = fread($handle, $size);
            fclose($handle);
            
            $listaTemper = json_decode($contenido, true);
            
            
        ?>
        <script>
            var datos = {
                labels: [
                '<?php echo $listaTemper[0]['Dia']; ?>',
                '<?php echo $listaTemper[1]['Dia']; ?>',
                '<?php echo $listaTemper[2]['Dia']; ?>',
                '<?php echo $listaTemper[3]['Dia']; ?>',
                '<?php echo $listaTemper[4]['Dia']; ?>',
                '<?php echo $listaTemper[5]['Dia']; ?>',
                '<?php echo $listaTemper[6]['Dia']; ?>',
                '<?php echo $listaTemper[7]['Dia']; ?>',
                '<?php echo $listaTemper[8]['Dia']; ?>',
                '<?php echo $listaTemper[9]['Dia']; ?>',
                '<?php echo $listaTemper[10]['Dia']; ?>'
                ],
                series: [{
                    name: 'serie-1',
                    data: [
                        <?php echo $listaTemper[0]['Temp_Max']; ?>,
                        <?php echo $listaTemper[1]['Temp_Max']; ?>,
                        <?php echo $listaTemper[2]['Temp_Max']; ?>,
                        <?php echo $listaTemper[3]['Temp_Max']; ?>,
                        <?php echo $listaTemper[4]['Temp_Max']; ?>,
                        <?php echo $listaTemper[5]['Temp_Max']; ?>,
                        <?php echo $listaTemper[6]['Temp_Max']; ?>,
                        <?php echo $listaTemper[7]['Temp_Max']; ?>,
                        <?php echo $listaTemper[8]['Temp_Max']; ?>,
                        <?php echo $listaTemper[9]['Temp_Max']; ?>,
                        <?php echo $listaTemper[10]['Temp_Max']; ?>,
                    ]
                }, {
                    name: 'serie-2',
                    data: [
                        <?php echo $listaTemper[0]['Temp_Min']; ?>,
                        <?php echo $listaTemper[1]['Temp_Min']; ?>,
                        <?php echo $listaTemper[2]['Temp_Min']; ?>,
                        <?php echo $listaTemper[3]['Temp_Min']; ?>,
                        <?php echo $listaTemper[4]['Temp_Min']; ?>,
                        <?php echo $listaTemper[5]['Temp_Min']; ?>,
                        <?php echo $listaTemper[6]['Temp_Min']; ?>,
                        <?php echo $listaTemper[7]['Temp_Min']; ?>,
                        <?php echo $listaTemper[8]['Temp_Min']; ?>,
                        <?php echo $listaTemper[9]['Temp_Min']; ?>,
                        <?php echo $listaTemper[10]['Temp_Min']; ?>
                    ]
                }, {
                    name: 'serie-3',
                    data: [
                        <?php echo $listaTemper[0]['Viento']; ?>,
                        <?php echo $listaTemper[1]['Viento']; ?>,
                        <?php echo $listaTemper[2]['Viento']; ?>,
                        <?php echo $listaTemper[3]['Viento']; ?>,
                        <?php echo $listaTemper[4]['Viento']; ?>,
                        <?php echo $listaTemper[5]['Viento']; ?>,
                        <?php echo $listaTemper[6]['Viento']; ?>,
                        <?php echo $listaTemper[7]['Viento']; ?>,
                        <?php echo $listaTemper[8]['Viento']; ?>,
                        <?php echo $listaTemper[9]['Viento']; ?>,
                        <?php echo $listaTemper[10]['Viento']; ?>,
                    ]
                }]
            };

            var opciones = {
                fullWidth: true,
                seriesBarDistance: 30,
                chartPadding: {
                    bottom: 40
                },
                axisX: {
                    position: 'start'
                },
                axisY:{
                    type: Chartist.FuxedScaleAxis,
                    ticks: [0,20,25,30,35,40],
                    high: 40,
                }
            };

            var opcionesResponsive = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    axisX:{
                        labelInterpolationFnc: function(value){
                            return value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 10,
                    axisX: {
                        labelInterpolationFnc: function(value){
                            return value[0];
                        }
                    }
                }]
            ];

            new Chartist.Line('.ct-chart', datos, opciones, opcionesResponsive);
        </script>
    </div>
</body>
</html>