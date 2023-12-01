<?php
    use Controller\GraficaController;


    if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION    
        $grafica = new GraficaController();//Crear el objeto que traerá los datos

?>

<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

<h1>Página de gráfica</h1>

<div class="container">

<canvas id="grafica"></canvas>

</div>

<script type="text/javascript">
    var contenido = <?php echo json_encode($grafica->mostrar()); ?>;
    //alert(contenido[2].curso);
    //Accediendo a los elementos del array
    //contenido.forEach((element)=>console.log(element.curso+' '+element.cantidad));

    // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X. 
    let etiquetas= [];
    let data = [];
    contenido.forEach((element)=>etiquetas.push(element.curso));
    contenido.forEach((element)=>data.push(element.cantidad));
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Ventas por mes",
    data: data, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(126, 47, 247, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>

<?php

}//CIERRE DE VALIDACION, INICIO SESION OBLIGADO
?>