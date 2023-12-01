<?php 
namespace Model;

use Model\ConexionModel;

class GraficaModel{

    public static function mostrarDatos(){

        $stmt=ConexionModel::conectar()->prepare("SELECT curso,count(curso) as cantidad from inscripcion INNER JOIN curso on fkcursos = curso.id group by curso");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>