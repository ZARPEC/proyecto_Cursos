<?php

namespace Controller;
use Model\CursoModel;

class CursoController{

    public function mostrar(){
        $curso = CursoModel::mostrarCurso();
        return $curso;//se van a la vista
    }


}

?>