<?php

use Controller\UsuarioController;

$usuario = new UsuarioController;

?>

<h1 class="text-center">Login</h1>
<div class="container w-50">

    <form method="POST" id="formulario">
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Usuario</label></div>
                <div class="col-10"><input class="form-control" type="text" name="usuario" required></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Contraseña</label></div>
                <div class="col-10"><input type="password" class="w-75 form-control" name="password" id="password"> </input></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <button type="submit" class="btn btn-outline-success btn-sm">Iniciar sesión</button>
            </div>
        </div>

    </form>

    <div id="passwordError" title="Error en password" hidden>
        <p>La contraseña es muy corta</p>
    </div>

    <div class="mt-4">

    </div>
    <?php
    $resultado = $usuario->login();
    if ($resultado == "Error") {

        echo "<div class='alert alert-danger mt-5' role='alert'>
        Error en los datos
        </div>";
    }

    ?>

</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("formulario").addEventListener('submit', validarFormulario);
    });

    function validarFormulario(evento) {
        evento.preventDefault();
        let password = document.getElementById('password').value;
        if (password.length < 3) {
            $.passwordError();
            return;
        }
        this.submit();
    }

    $.passwordError = function() {
        let element = document.getElementById("passwordError");
        element.removeAttribute("hidden");
        $("#passwordError").dialog();
        //$("#passwordError").show();
    };
</script>