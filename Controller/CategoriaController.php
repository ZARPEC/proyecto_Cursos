<?php

namespace Controller;
use Model\CategoriaModel;

class CategoriaController{

    public function mostrar(){
        $categoria = CategoriaModel::mostrarCategoria();
        //AQUI SE HARIAN LOS CÁLCULOS (TOTALES, IVA, %)
        return $categoria;//se van a la vista
    }

    
}

?>