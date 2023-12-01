<?php
namespace Model;

class EnlacesModel{

    public static function enlacesPagina($enlace){
        
        $modulo =match($enlace){
            "inicio"=>"View/inicio.php",
            "contacto"=>"View/contacto.php",
            "nosotros"=>"View/nosotros.php",
            "inscripcion"=>"View/inscripcion.php",
            "verInscripcion"=>"View/mostrarInscripcion.php",
            "editarInscripcion"=>"View/editarInscripcion.php",
            "eliminarInscripcion"=>"View/eliminarInscripcion.php",
            "login"=>"View/login.php",
            "logout"=>"View/logout.php",
            "crearCuenta"=>"View/nuevoUsuario.php",
            "mostrarTabla"=>"View/mostrarTablas.php",
            "pdf"=>"View/pdf.php",
            "grafica"=>"View/grafica.php",
            default => "View/error.php"

        };
        return $modulo;
    }
}


?>