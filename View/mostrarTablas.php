<?php
use Controller\CategoriaController;
$categoria= new CategoriaController();

?>

<table id="example" class="display" width="100%"></table>

<script type="text/javascript">
    let dataCategorias=<?php echo json_encode($categoria->mostrar());?>;
    let data=[];

    for(let i=0; i<dataCategorias.length;i++){
        data.push([dataCategorias[i].id,dataCategorias[i].categoria,dataCategorias[i].curso]);
    }

    let table = new DataTable('#example',{
        columns:[
            {title: 'Id'},
            {title: 'Categoria'},
            {title: 'Curso'}
        ],
        data: data
    });


</script>