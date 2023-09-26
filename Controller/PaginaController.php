<?php

namespace Controller;
use Model\EnlacesModel;
class PaginaController
{

    public function mostrarInicio()
    {
        require_once("View/template.php");
    }

    public function enlacesPagina()
    {
        if (isset($_GET['action'])) {   //esta definida la variable action
            //lleva al modelo
            $enlace=$_GET['action'];
        } else {
            //llevara a la pagina de incio
            $enlace = "inicio";
        }
        $respuesta= EnlacesModel::enlacesPagina($enlace); //devuelde la ruta exacta de la pagina
        require_once($respuesta);
    }
}
?>
