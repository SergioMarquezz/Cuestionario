$(document).ready(function() {
  
    $("#table-responsive-respuestas-familiar").fadeOut();
    $("#table-responsive-respuestas-general").fadeOut(); 
    $("#table-responsive-respuestas-trayectoria").fadeOut();
    $("#table-responsive-general").fadeOut();
    $("#table-responsive-familiar").fadeOut();
    $("#table-responsive-familiar2").fadeOut();  
    $("#table-responsive-trayectoria").fadeOut();
    $("#table-responsive-caracteristicas").fadeOut();
    $("#table-responsive-respuestas-caracteristicas").fadeOut();

    $("#cursar-materia").hide();
    
    cargarTablaAlumnos();
   // cargarNombre();
    secciones();
    salir();


} );


function cargarTablaAlumnos(){

    var table = $('#dt-alumnos').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion": "1"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            //{ "data": "matricula"},
            { "data": "nombre_carrera"},
           // { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
    
}

function cargarNombre(){


    $.ajax({
        type: "POST",
        url: "../../php/nombre-usuario.php",
        dataType: "json",
        success: function (response) {
            
            console.log(response);
            
            $("#name-user").text(response.nombre);
            $("#user-bienvenido").text("Bienvenida médico " + response.nombre);
        }
    });

}

function cargarTablaRespuestasGeneral(){

    var table = $('#dt-respuestas').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion": "1"
            }
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
           // { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
        
    verRespuestasGeneral("#dt-respuestas tbody", table);
    
}

function cargarTablaRespuestasFamiliar(){

    var table = $('#dt-respuestas-familiar').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion": "4"
            }
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
            
    verRespuestasFamiliar("#dt-respuestas-familiar tbody", table)
}


function cargarTablaRespuestasTrayecotria(){

   
    var table = $('#dt-respuestas-trayectoria').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST", 
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion": "2"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
            
    verRespuestasTrayectoria("#dt-respuestas-trayectoria tbody", table);
}

function cargarTablaRespuestasCaracteristicas(){

    var table = $('#dt-respuestas-caracteristicas').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion":"3"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
       
    verRespuestasCaracteristicas("#dt-respuestas-caracteristicas tbody", table);
}

function cargarTablaRespuestasAcademicas(){

    var table = $('#dt-respuestas-academicas').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "../../php/vista-alumnos.php",
            data:{
                "seccion": "5"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
    verRespuestasPersonales("#dt-respuestas-academicas tbody" ,table);     
}

function verRespuestasGeneral(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        
       
        $("#table-responsive-general").fadeIn();
        //$("#table-responsive-respuestas-general").fadeOut();
        
        $("#respuestas-generales").text("Respuetas Del Alumno " + tr.nombre);

             $("#dt-alumnos-datos").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones,
                    "opcion": "Generales"
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "reactivo"},
                { "data": "respuesta"},
            ],
    
        })
        
    });
    
}

function verRespuestasFamiliar(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        
        $("#table-responsive-familiar").fadeIn();
        $("#table-responsive-familiar2").fadeIn();
       // $("#table-responsive-respuestas-familiar").fadeOut();
       $("#respuestas-familiar").text("Respuetas Del Alumno " + tr.nombre);

        $("#dt-alumnos-datos-familiar").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones,
                    "opcion": "Generales"
                    
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "reactivo"},
                { "data": "respuesta"},
            ],
    
        })

        $("#dt-alumnos-datos-familiar2").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones,
                    "opcion": "Familiar"
                    
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "respuesta"},
            ],
    
        })

    });
}

function verRespuestasTrayectoria(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        
         $("#table-responsive-trayectoria").fadeIn();
        //$("#table-responsive-respuestas").fadeOut();
        $("#respuestas-trayectoria").text("Respuetas Del Alumno " + tr.nombre);

        $("#dt-alumnos-datos-trayecotria").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones,
                    "opcion": "Familiar"
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "respuesta"},
            ],
    
        })


        $.ajax({
            type: "POST",
            url: "../../php/pro_estado.php",
            data:{
                "cve_aspi": tr.cve_persona,
                "opcion": "no-materia",
            
            },
            datType: "json",
            success: function (response){
                
                var json_info = JSON.parse(response);
                console.log(json_info);
                $("#promedio-bachiller").text(json_info.data[0].promedio_bachillerato);
                $("#estado").text(json_info.data[0].nombre);

                if(json_info.data[0].mes_anio_materia != ""){
                    $("#cursar-materia").show();
                    $("#materia").show();
                    $("#materia").text(json_info.data[0].mes_anio_materia);
                }
                else{
                    $("#cursar-materia").hide();
                    $("#materia").hide();
                }
            }
        });

    });
}

function verRespuestasCaracteristicas(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        console.log(tr.cve_persona);
        $("#table-responsive-caracteristicas").fadeIn();
       // $("#table-responsive-datos").fadeIn();
        //$("#table-responsive-respuestas").fadeOut();
        $("#respuestas-caracteristicas").text("Respuetas Del Alumno " + tr.nombre);

        $("#dt-alumnos-datos-caracteristicas").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones,
                    "opcion":"Generales"
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "reactivo"},
                { "data": "respuesta"},
            ],
    
        })

    });
}

function verRespuestasAcademicas(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        
       // $("#table-responsive-datos").fadeIn();
        //$("#table-responsive-respuestas").fadeOut();
        $("#alumnos").text("Respuestas Alumno Datos Generales");

        $("#dt-alumnos-datos-academicas").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "../../php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_persona,
                    "seccion": secciones
                },
                datType: "json",
            },
            "columns": [
                { "data": "pregunta"},
                { "data": "reactivo"},
                { "data": "respuesta"},
            ],
    
        })

    });
}



function secciones(){

    $("#button-inicio").click(function (e) { 
        e.preventDefault();
        
        $("#table-responsive-alumnos").fadeIn();
        $("#table-responsive-respuestas-familiar").fadeOut();
        $("#table-responsive-respuestas-general").fadeOut();
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-familiar").fadeOut();
        $("#alumnos").text("Datos de Alumnos");

        location.reload();
    });

    $("#button-general").click(function (e) { 
        e.preventDefault();
       
        Lobibox.notify("success",{
    
            size: 'mini',
            width: 1400,
            rounded: true,
            delayIndicator: false,
            position: 'bottom left',
            msg: '<h3>Se cambio a la sección DATOS GENERALES, podra ver sus respectivas respuestas del alumno</h3>'
        });
        
        $("#secciones").val("1");
        $("#alumnos").text("Datos de Alumnos");

        cargarTablaRespuestasGeneral();
        $("#table-responsive-respuestas-general").fadeIn();
        $("#table-responsive-alumnos").fadeOut();
        $("#button-general").addClass("activar");
        
        $(this).attr("disabled", "disabled");
        //$("#dt-alumnos-datos").empty();
        
       // location.reload();
       
      //  $("#table-responsive-alumnos").fadeOut();
       // var table = $("#dt-alumnos-datos").DataTable();
       // table.ajax.reload();
        
        //setTimeout(load, 2000)
    });
    $("#button-familiar").click(function (e) { 
        e.preventDefault();
        Lobibox.notify("success", {
    
            size: 'mini',
            width: 1400,
            rounded: true,
            delayIndicator: false,
            position: 'bottom left',
            msg: '<h3>Se cambio a la sección ENTORNO FAMILIAR, podra ver sus respectivas respuestas del alumno</h3>'
        });

        $("#table-responsive-alumnos").fadeOut();
        $("#table-responsive-respuestas-familiar").fadeIn();
        $("#table-responsive-respuestas-general").fadeOut();
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-familiar").fadeOut();

        $("#secciones").val("4");
    
        $("#alumnos").text("Datos de Alumnos");
        $("#button-familiar").addClass("activar");
        $("#button-general").removeClass("activar");
        $("#button-general").removeAttr("disabled");
        $(this).attr("disabled", "disabled");

        cargarTablaRespuestasFamiliar();      
        //location.reload();
    })
    
    $("#button-trayectoria").click(function (e) { 
        e.preventDefault();

        Lobibox.notify("success", {
    
            size: 'mini',
            width: 1400,
            rounded: true,
            delayIndicator: false,
            position: 'bottom left',
            msg: '<h3>Se cambio a la sección TRAYECTORIA ACADÉMICA, podra ver sus respectivas respuestas del alumno</h3>'
        });
        $("#secciones").val("2");
        
        $("#table-responsive-respuestas-trayectoria").fadeIn();
        $("#table-responsive-alumnos").fadeOut();
        $("#alumnos").text("Datos de Alumnos");
        $("#button-trayectoria").addClass("activar");
        $("#button-general").removeClass("activar");
        $("#button-general").removeAttr("disabled");
        $("#button-familiar").removeClass("activar");
        $("#button-familiar").removeAttr("disabled");
        $(this).attr("disabled", true);
        cargarTablaRespuestasTrayecotria();
    });

    $("#button-personales").click(function (e) { 
        e.preventDefault();
        
        Lobibox.notify("success", {
    
            size: 'mini',
            width: 1410,
            rounded: true,
            delayIndicator: false,
            position: 'bottom left',
            msg: '<h3>Se cambio a la sección CARACTERÍSTICAS PERSONALES, podra ver sus respectivas respuestas del alumno</h3>'
        });
        $("#secciones").val("3");
        $("#table-responsive-alumnos").fadeOut();
        $("#table-responsive-respuestas-caracteristicas").fadeIn();
        $(this).attr("disabled", true);
        $(this).addClass("activar");
        cargarTablaRespuestasCaracteristicas();
    });

    //$("#li-academicas").click(function (e) { 
       // e.preventDefault();
        
        /*Lobibox.notify("success", {
    
            size: 'mini',
            width: 1400,
            rounded: true,
            delayIndicator: false,
            position: 'bottom left',
            msg: '<h3>Se cambio a la sección DECISIONES ACADÉMICAS, podra ver sus respectivas respuestas del alumno</h3>'
        });*/
      //  $("#secciones").val("5");
      //  cargarTablaRespuestasAcademicas();
    //});
}

function salir(){

    $("a#salir").click(function (e) { 
        e.preventDefault();

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Salir</h5>");

        $.confirm.show({

            "message": "<h4>¿Desea continuar?</h4>",
            "type":"warning",
            "yesText":"Si",
            "noText":"No",

            "yes": function (){
                window.location.href = "../../php/cerrar-sesion.php";
            }
        })
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

