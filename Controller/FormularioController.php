<?php

namespace Controller;

require_once("src/Exception.php");
require_once("src/PHPMailer.php");
require_once("src/SMTP.php");

use phpMailer\PHPMailer\PHPMailer;
use phpMailer\PHPMailer\SMTP;
use phpMailer\PHPMailer\Exception;

class FormularioController
{


    public function procesarFormulario()
    {
        if (!empty($_POST['email']) and !empty($_POST['nombre']) and !empty($_POST['comentario'])) {
            $mail = $_POST['email'];
            $nombre =  $_POST['nombre'];
            $comentario =  $_POST['comentario'];

            $email = new PHPMailer(true);
            try {
                $email->isSMTP();
                $email->Host = "smtp.gmail.com";
                $email->SMTPAuth = true;
                $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $email->Port = 587;
                $email->Username = "pruebaphpzarpec@gmail.com";
                $email->Password = "atmmziuwspmmrgsj";
                $email->CharSet="UTF-8";

                $email->setFrom("pruebaphpzarpec@gmail.com", 'De:');
                $email->addAddress("axelza25@gmail.com", $nombre); //a donde se envia el correo

                $email->isHTML(true);
                $email->Subject = "Informacion Cursos";

                $email->Body ="
                Contactar a: <strong>{$nombre}</strong><br>
                Email: <strong>{$mail}</strong><br>
                Comentario:<strong> {$comentario}</strong><br>
                ";
                // $email->addAttachment('archivo.pdf'); adjuntar archivo al correo
                $email->send();
            } catch (Exception $e) {
                echo "Error: {$email->ErrorInfo}";
            }

            echo "<div class='alert alert-dismissible alert-success' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <p> Correo enviado, te contactaremos</p>
            </div>
            ";
        } else {
            //error
            echo "<div class='alert alert-dismissible alert-danger' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            Error
            </div>
            ";
        }
    }
}
