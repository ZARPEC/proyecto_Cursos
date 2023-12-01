<?php

use Controller\InscripcionController;
use Controller\CursoController;

$curso = new CursoController();
$inscripcion = new InscripcionController();

if (!empty($_SESSION['id'])) {
?>
    <h1 class="text-center">Página de inscripción</h1>
    <div class="container w-50">
        <form method="POST">

            <div class="alert alert-light" role="alert">
                <h1 class="text-center">
                    <?php echo $_SESSION['nombres'] . " " . $_SESSION['apellidos'];
                    ?>
                </h1>
            </div>

            <div class="form-group">
                <div class="row mb-3">
                    <div class="col-2"><label>Curso</label></div>
                    <div class="col-10">
                        <select name="idcurso" class="form-select">
                            <?php
                            foreach ($curso->mostrar() as $row => $item) {
                                echo "<option value='{$item['id']}'>{$item['curso']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <button type="submit" class="btn btn-outline-success btn-sm">Enviar</button>
                </div>
            </div>
        </form>
        <div class="mt-4">

        </div>
    <?php
    if ($inscripcion->inscribir() == "guardado") {
        echo " 
        <div class='alert alert-dismissible alert-success mt-4'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        Alumno Inscrito
        </div>";
    } else if ($inscripcion->inscribir() == "error") {

        echo " 
        <div class='alert alert-dismissible alert-danger mt-4'>
        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
        Error
        </div>";
    }
}
    ?>



    </div>