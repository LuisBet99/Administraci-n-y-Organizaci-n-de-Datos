<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/chartist.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="./js/chartist.min.js"></script>
    <title>PROYECTO FINAL</title>
</head>
<body>
    <div class="container">
        <div class="centro">
            <h1 class="titulo">PROYECTO FINAL</h1>
        </div> 
        <h2 class="titulo">Tabla de frecuencias</h2>  
    <div class="table-responsive">
    <table class="table table-hover">
    <thead class="thead-dark">
            <tr>
                <th>Número de artefactos</th>
                <th>Número de Viviendas</th>
            </tr>
        </thead>
        
        <?php
            $archivo = 'datosProcesados.json';
            $handle = fopen($archivo, 'r') or die("Error: No se puede abrir el archivo");
            $size = filesize($archivo);
            $contenido = fread($handle, $size);
            fclose($handle);
            
            $listaDatos = json_decode($contenido, true);
            
            
        ?>
        <tbody>
                <tr>
                    <td class=""> 0 pantallas</td>
                    <td><?php echo $listaDatos[0]['0_televisor'];?></td>
                </tr>
                <tr>
                    <td class=""> 1 pantalla </td>
                    <td><?php echo $listaDatos[0]['1_televisor'];?></td>
                </tr>
                <tr>
                    <td class=""> 2 pantallas </td>
                    <td><?php echo $listaDatos[0]['2_televisor'];?></td>
                </tr>

                <tr>
                    <td class=""> 3 pantallas </td>
                    <td><?php echo $listaDatos[0]['3_televisor'];?></td>
                </tr>

                <tr>
                    <td class=""> 4 pantallas </td>
                    <td><?php echo $listaDatos[0]['4_televisor'];?></td>
                </tr>
                <tr>
                    <td class=""> 0 computadoras </td>
                    <td><?php echo $listaDatos[1]['0_computadora'];?></td>
                </tr>
                <tr>
                    <td class=""> 1 computadoras </td>
                    <td><?php echo $listaDatos[1]['1_computadora'];?></td>
                </tr>
                <tr>
                    <td class=""> 2 computadoras </td>
                    <td><?php echo $listaDatos[1]['2_computadora'];?></td>
                </tr>
                <tr>
                    <td class=""> 3 computadoras </td>
                    <td><?php echo $listaDatos[1]['3_computadora'];?></td>
                </tr>
                <tr>
                    <td class=""> 4 computadoras </td>
                    <td><?php echo $listaDatos[1]['4_computadora'];?></td>
                </tr>
        </tbody>
        <caption>Total de pantallas: 1000000
            Total de computadoras: 1000000
        </caption>
    </table>
    </div>
    </div>

    <div class="container">
        <div class="centro">
            <h1>Grafica de barras: Viviendas con pantallas y computadoras</h1>
            <span class="temp"><span class="temp-box max">&nbsp;</span>&nbsp; Pantallas</span>
            <span class="temp"><span class="temp-box min">&nbsp;</span>&nbsp; Computadoras</span>
        </div>
        <div class="ct-chart ct-octave"></div>
        
        <script>
            var datosBarras={
                labels:[
                    '0 pantallas',
                    '1 pantallas',
                    '2 pantallas',
                    '3 pantallas',
                    '4 pantallas',
                    '0 computadoras',
                    '1 computadoras',
                    '2 computadoras'
                ],

            series: [{
                name: 'serie-1',
                data: [
                    '<?php echo $listaDatos[0]['0_televisor'] ?>',
                    '<?php echo $listaDatos[0]['1_televisor']; ?>',
                    '<?php echo $listaDatos[0]['2_televisor']; ?>',
                    '<?php echo $listaDatos[0]['3_televisor']; ?>',
                    '<?php echo $listaDatos[0]['4_televisor']; ?>',
                    '<?php echo $listaDatos[1]['0_computadoras']; ?>',
                    '<?php echo $listaDatos[1]['1_computadoras']; ?>',
                    '<?php echo $listaDatos[1]['2_computadoras']; ?>'
                ]
            }]
        };

        var opciones = {

                seriesBarDistance: 30,
                axisX: {
                    offset: 100
                },
                axisY:{
                    offset:80,
                    labelInterpolationFnc: function(value){
                        return value
                    },
                scaleMinSpace:15

                }
        };
        
        var opcionesResponsiveBar = [
                ['screen and (min-width: 641px) and (max-width: 1024px)', {
                    axisX:{
                        labelInterpolationFnc: function(value){
                            return value;
                        }
                    }
                }],
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 10000,
                    axisX: {
                        labelInterpolationFnc: function(value){
                            return value[0];
                        }
                    }
                }]
            ];

            <h2> Gráfico de pastel: Viviendas con Pantallas</h2>
            <span class="temp"><span class="temp-box per1">&nbsp;</span>&nbsp; 0 Pantallas</span>
            <span class="temp"><span class="temp-box per2">&nbsp;</span>&nbsp; 1 Pantallas</span>
            <span class="temp"><span class="temp-box per3">&nbsp;</span>&nbsp; 2 Pantallas</span>
            <span class="temp"><span class="temp-box per4">&nbsp;</span>&nbsp; 3 Pantallas</span>
            <span class="temp"><span class="temp-box per5">&nbsp;</span>&nbsp; 4 Pantallas</span>
            <div class="ct-chart ct-octave"></div>

            <h2> Gráfico de pastel: Viviendas con Computadoras</h2>
            <span class="temp"><span class="temp-box per1">&nbsp;</span>&nbsp; 0 Computadoras</span>
            <span class="temp"><span class="temp-box per2">&nbsp;</span>&nbsp; 1 Computadoras</span>
            <span class="temp"><span class="temp-box per3">&nbsp;</span>&nbsp; 2 Computadoras</span>
            <span class="temp"><span class="temp-box per4">&nbsp;</span>&nbsp; 3 Computadoras</span>
            <span class="temp"><span class="temp-box per5">&nbsp;</span>&nbsp; 4 Computadoras</span>
            <div class="ct-chart ct-octave"></div>

            
        var data ={
            labels:[
                "<?php echo round($listaDatos[0]['0_televisor'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[0]['1_televisor'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[0]['2_televisor'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[0]['3_televisor'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[0]['4_televisor'] / 1000000 * 100, 2) . "%"; ?>",

            ],
            series: [
                <?php echo $listaDatos[0]['0_televisor'] / 1000000; ?>,
                <?php echo $listaDatos[0]['1_televisor'] / 1000000; ?>,
                <?php echo $listaDatos[0]['2_televisor'] / 1000000; ?>,
                <?php echo $listaDatos[0]['3_televisor'] / 1000000; ?>,
                <?php echo $listaDatos[0]['4_televisor'] / 1000000; ?>,
            ]};
            var data1 = {
                labels:[
                "<?php echo round($listaDatos[1]['0_computadora'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[1]['1_computadora'] / 1000000 * 100, 2) . "%"; ?>",
                "<?php echo round($listaDatos[1]['2_computadora'] / 1000000 * 100, 2) . "%"; ?>",
                ],
                series: [
                    <?php echo $listaDatos[1]['0_computadora']; ?>,
                    <?php echo $listaDatos[1]['1_computadora']; ?>,
                    <?php echo $listaDatos[1]['2_computadora']; ?>,
                ]};
            
                var opcionesResponsive = [
                    ["screen and (max-width: 640px)", {
                        showLine: false,
                        showArea: true
                    }]
                ];

</body>
</html>