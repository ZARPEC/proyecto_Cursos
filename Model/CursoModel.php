<?php

namespace Model;

use Model\ConexionModel;

class CursoModel{

    
    public static function mostrarCurso(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM curso");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}

?>