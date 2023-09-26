<?php

use Controller\FormularioController;

$formulario = new FormularioController();


?>

<h1 class="text-center">Página contacto</h1>
<div class="container w-50">
    <form method="POST">
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Email</label></div>
                <div class="col-10"><input  class="form-control" type="email" name="email" required></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Nombre</label></div>
                <div class="col-10"><input class="form-control" type="text" name="nombre" required></div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Comentario</label></div>
                <div class="col-10"><textarea class="w-75 form-control" cols="30" rows="10" name="comentario"> </textarea></div>

            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <button type="submit" class="btn btn-outline-success btn-sm">Enviar</button>
            </div>
        </div>
    </form>
    <div class="mt-4">
        <?php $formulario->procesarFormulario(); ?>
    </div>


</div>