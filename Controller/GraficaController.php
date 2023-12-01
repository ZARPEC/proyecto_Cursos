<?php
namespace Controller;
use Model\GraficaModel;


class GraficaController{

    public function mostrar(){

        $inscripcion = GraficaModel::mostrarDatos();
        return $inscripcion;
    }
}

?>