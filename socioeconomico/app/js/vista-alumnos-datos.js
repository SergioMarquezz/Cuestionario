$(document).ready(function() {
  
    $('#dt-alumos').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type: "POST", 
            url: "../../php/vista-datos-generales.php",
            data:{
                "clave_aspi": "9459",
                "seccion": "1",
            }
        },
        "columns": [
            { "data": "nombre"},
            { "data": "pregunta"},
            { "data": "reactivo"},
            { "data": "respuesta"},
            { "defaultContent": "<button type='button' class='editar btn btn-sm btn-primary'><i class='fa fa-pencil-square-o'></i> Editar</button> <button type='button' class='eliminar btn btn-sm btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i> Borrar</button>" }
        ],
    });

    cargarDatos();
} );


function cargarDatos(){

    $.ajax({
        type: "POST",
        url: "../../php/nombre-usuario.php",
        data: {

            "clave_aspi": "9459",
            "seccion": "1",
         
        },
        dataType: "json",
        success: function (response) {
            
            console.log(response);

        }
    });

    $.ajax({
        type: "POST",
        url: "../../php/vista-alumnos.php",
        data: {

            "clave_aspi": "9459",
            "seccion": "1",
         
        },
        dataType: "json",
        success: function (response) {
            
            console.log(response);

        }
    });

}



var espaniol = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
};