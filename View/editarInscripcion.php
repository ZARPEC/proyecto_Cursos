<?php

use Controller\InscripcionController;
use Controller\CursoController;

$inscripcion = new InscripcionController();
$registro = $inscripcion->editar(); //array con los campos de BD

$inscripcion->actualizar(); //Enviar los nuevos datos a la BD

$curso = new CursoController();
?>

<form method="POST">


    <div class="form-group">
        <div class="row mb-3">
            <div class="col-2"><label>Nombre</label></div>
            <h3><?php echo $_SESSION['nombres'] . " " . $_SESSION['apellidos'] ?> </h3>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-2"><label>Curso anterior</label></div>
            <div class="col-10"><input class="form-control" type="text" name="idcurso" value="<?php echo $registro['curso'] ?>" readonly></div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-2"><label>Curso</label></div>
            <select name="idcurso" class="form-select">
                <?php
                foreach ($curso->mostrar() as $row => $item) {

                    if ($registro['idCurso'] != $item['id'])
                        echo "<option value='{$item['id']}'>{$item['curso']}</option>";
                }
                ?>
        </div>
    </div>


    <input type="hidden" name="idInscripcion" value="<?php echo $registro['IdInscripcion']; ?>">

    <div class="form-group">
        <div class="row mt-3">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </div>
</form>