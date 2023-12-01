<?php

use Controller\InscripcionController;


if (!empty($_SESSION['id']) && !empty($_SESSION['rol']) && $_SESSION['rol']=='a') {
    $inscripciones = new InscripcionController;
    $listado = $inscripciones->mostrar();

    foreach ($listado as $row => $item) {
        echo "
            <div class='row'>
                <div class='col'> {$item['IdInscripcion']} </div>
                <div class='col'> {$item['nombres']} </div>
                <div class='col'> {$item['curso']} </div>
                <div class='col'> <a href='index.php?action=editarInscripcion&idInscripcion={$item['IdInscripcion']}'>Editar</a> </div>
                <div class='col'> <a href='index.php?action=eliminarInscripcion&idInscripcion={$item['IdInscripcion']}'>Eliminar</a> </div>
            </div>
        ";
    }
}

elseif (!empty($_SESSION['id'])) {
    $inscripciones = new InscripcionController;
    $listado = $inscripciones->mostrar();

    foreach ($listado as $row => $item) {
        if($item['IdUsuario']==$_SESSION['id'])
        echo "
            <div class='row'>
                <div class='col'> {$item['IdInscripcion']} </div>
                <div class='col'> {$item['nombres']} </div>
                <div class='col'> {$item['curso']} </div>
                <div class='col'> <a href='index.php?action=editarInscripcion&idInscripcion={$item['IdInscripcion']}'>Editar</a> </div>
                <div class='col'> <a href='index.php?action=eliminarInscripcion&idInscripcion={$item['IdInscripcion']}'>Eliminar</a> </div>
            </div>
        ";
    }
}