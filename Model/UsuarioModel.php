<?php

namespace Model;

use Model\ConexionModel;


class UsuarioModel
{

    public static function login($datos)
    {
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM usuario where usuario=:usuario");
        $stmt->bindParam(":usuario", $datos['usuario'], \PDO::PARAM_STR);
        $stmt->execute();
        //Si hay un resultado que coincide
        return $stmt->fetch(); //devolviendo la respuesta
    }

    public static function CrearCuenta($datos)
    {
        try {
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO usuario(nombres,apellidos,usuario,password,rol) values(:nom,:ape,:user,:pass,:rol)");
            $stmt->bindParam(":nom", $datos['nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(":ape", $datos['apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(":user", $datos['usuario'], \PDO::PARAM_STR);
            $stmt->bindParam(":pass", $datos['password'], \PDO::PARAM_STR);
            $stmt->bindParam(":rol", $datos['rol'], \PDO::PARAM_STR);
            return $stmt->execute() ? true : false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
