<?php

class Clima
{

    public $id;
    public $ciudad;
    public $temp_max;
    public $temp_min;
    public $sensacion_termica;
    public $viento;
    public $visibilidad;
    public $humedad;
    public $punto_rocio;

    public function __construct(string $id, string $ciudad, string $temp_max, string $temp_min, string $sensacion_termica, string $viento, string $visibilidad, string $humedad, string $punto_rocio)
    {
        $this->id = $id;
        $this->ciudad = $ciudad;
        $this->temp_max = $temp_max;
        $this->temp_min = $temp_min;
        $this->sensacion_termica = $sensacion_termica;
        $this->viento = $viento;
        $this->visibilidad = $visibilidad;
        $this->humedad = $humedad;
        $this->punto_rocio = $punto_rocio;
    }

}
?>
