<?php

namespace Model;

use Model\ConexionModel;

class CategoriaModel{

    
    public static function mostrarCategoria(){
        $stmt = ConexionModel::conectar()->prepare("SELECT categoria.id as id,categoria,curso FROM categoria INNER JOIN curso ON categoria.id = curso.fkcategoria");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}

?>