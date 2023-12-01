<h1>Bienvenidos al sitio De Isabella</h1>
<?php

if(!empty($_SESSION['usuario'])){
    echo "
    <h2>
    Mucho gusto: 
        <strong> {$_SESSION['nombres']} {$_SESSION['apellidos']} </strong>
    </h2>
    ";
}
?>