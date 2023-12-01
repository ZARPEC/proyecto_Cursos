<?php

session_start();
require_once('autoload.php');
require_once('Helpers/Helpers.php');

use Controller\PaginaController;

$pagina = new PaginaController;

$pagina->mostrarInicio();



?>