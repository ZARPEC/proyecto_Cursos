<?php
require_once('autoload.php');


use Controller\PaginaController;

$capturaEnlace = new PaginaController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<?php require_once('navbar.php'); ?>

<body>

    <div class="container">
        <?php
        $capturaEnlace->enlacesPagina();
        ?>
    </div>
</body>

</html>