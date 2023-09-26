<?php
namespace Model;

class EnlacesModel{

    public static function enlacesPagina($enlace){
        
        $modulo =match($enlace){
            "inicio"=>"View/inicio.php",
            "contacto"=>"View/contacto.php",
            "nosotros"=>"View/nosotros.php",
            default => "View/error.php"

        };
        return $modulo;
    }
}


?>