$(document).ready(function() {
  
    $("#table-responsive-respuestas-familiar").fadeOut();
    $("#table-responsive-familiar").fadeOut();
    $("#table-responsive-familiar2").fadeOut();  
    $("#table-responsive-respuestas-general").fadeOut(); 
    $("#table-responsive-general").fadeOut();
    $("#table-responsive-respuestas-trayectoria").fadeOut();
    $("#table-responsive-trayectoria").fadeOut();
    $("#table-responsive-respuestas-academicas").fadeOut();
    $("#table-responsive-academicas").fadeOut();
    $("#table-responsive-caracteristicas").fadeOut();
    $("#table-responsive-respuestas-caracteristicas").fadeOut(); 
    $("#table-responsive-lenguas").fadeOut();
    $("#button-inicio").addClass("activar");

    
    cargarTablaAlumnos();
    cargarNombre();
    secciones();
    salir();


} );


function cargarTablaAlumnos(){

    var table = $('#dt-alumnos').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "php/vista-alumnos.php",
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
        url: "php/nombre-usuario.php",
        dataType: "json",
        success: function (response) {
            
            console.log(response);
            
            $("#user-bienvenido").text("Bienvenida psicologa " + response.datos.name + " "+
            response.datos.pa +  " " +response.datos.ma);
        }
    });

}

function cargarTabla(tbody, table){

    $(tbody).on("click", "button#recargar", function (){
        
        setTimeout(function(){

            table.ajax.reload();
            console.log("segundos");
        },2000);
        
    });
}

function cargarTablaRespuestasGeneral(){

    var table = $('#dt-respuestas').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "php/vista-alumnos.php",
            data:{
                "seccion": "1"
            },
            dataType: "json",
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
           // { "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" },
           // { "defaultContent": "<button type='button' class='btn btn-sm btn-primary' id='recargar'><i class='fa fa-trash-o'></i>Recargar tabla</button>" }
        ],
       /* order: [[3, 'asc']],
        rowGroup: {
            dataSrc: 'nombre_carrera'
        },*/
       // 'rowsGroup': [5],
        /*columnDefs: [ {
            targets: [ 3 ],
            visible: false
        } ]*/
    });

    $('#dt-lenguas').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "php/pro_estado.php",
            data:{
                "cve_aspi": "",
                "opcion": "lenguas"
            },
            dataType: "json",
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            { "data": "reactivo"},
            { "data": "lengua"},
        ],
    });

    $("#table-responsive-lenguas").fadeIn();
     
    verRespuestasGeneral("#dt-respuestas tbody", table);
     
}

function cargarTablaRespuestasFamiliar(){

    var table = $('#dt-respuestas-familiar').DataTable({

        "destroy": true,
         "language": espaniol,
         "ajax": {
            type:"POST",
            url: "php/vista-alumnos.php",
            data:{
                "seccion": "4"
            }
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            //{ "data": "matricula"},
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
            url: "php/vista-alumnos.php",
            data:{
                "seccion": "2"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            //{ "data": "matricula"},
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
            url: "php/vista-alumnos.php",
            data:{
                "seccion":"3"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            //{ "data": "matricula"},
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
            url: "php/vista-alumnos.php",
            data:{
                "seccion": "5"
            }
      
        },
        "columns": [
            { "data": "nombre"},
            { "data": "apellido_pat"},
            { "data": "apellido_mat"},
            //{ "data": "matricula"},
            { "data": "nombre_carrera"},
            { "defaultContent": "<button type='button' class='btn btn-sm btn-default' id='ver-respuestas'><i class='fa fa-trash-o'></i>Ver respuestas</button>" }
        ],
    });
    verRespuestasAcademicas("#dt-respuestas-academicas tbody" ,table);     
}


function verRespuestasGeneral(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();

       

        table.ajax.reload();
       
        $("#table-responsive-general").fadeIn();
        //$("#table-responsive-respuestas-general").fadeOut();
        
        $("#respuestas-generales").text("Respuetas Alumno " + tr.nombre);

             $("#dt-alumnos-datos").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
                    "seccion": secciones,
                    "opcion": "Generales"
                },
                 dataSrc: 'data'
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
       
      table.ajax.reload();

        $("#table-responsive-familiar").fadeIn();
        $("#table-responsive-familiar2").fadeIn();
       $("#respuestas-familiar").text("Respuetas Alumno " + tr.nombre);

        $("#dt-alumnos-datos-familiar").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
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

    var table2 =   $("#dt-alumnos-datos-familiar2").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
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
       table2.ajax.reload();
    });
}

function verRespuestasTrayectoria(tbody, table){

    $(tbody).on("click", "button#ver-respuestas", function () {
        
        var tr = table.row($(this).parents('tr')).data();
        var secciones = $("#secciones").val();
        
        table.ajax.reload();

         $("#table-responsive-trayectoria").fadeIn();
        $("#respuestas-trayectoria").text("Respuetas Alumno " + tr.nombre);

        $("#dt-alumnos-datos-trayecotria").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
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
            url: "php/pro_estado.php",
            data:{
                "cve_aspi": tr.cve_aspirante,
                "opcion": "estado"
            
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
        console.log(tr);
        table.ajax.reload();
        $("#table-responsive-caracteristicas").fadeIn();
       
        $("#respuestas-caracteristicas").text("Respuetas Alumno " + tr.nombre);

        $("#dt-alumnos-datos-caracteristicas").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
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
    
        table.ajax.reload();

        $("#table-responsive-academicas").fadeIn();
        $("#respuestas-academicas").text("Respuestas Alumno " + tr.nombre);

        $("#dt-alumnos-datos-academicas").DataTable({
            "destroy": true,
            "language": espaniol,
            "ajax": {
                type: "POST",
                url: "php/vista-datos.php",
                data:{
                    "clave_aspi": tr.cve_aspirante,
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


function secciones(){

    $("#button-inicio").click(function (e) { 
        e.preventDefault();
        
     
        $("#alumnos").text("Datos de Alumnos");

        location.reload();
    });

    $("#button-general").click(function (e) { 
        e.preventDefault();
       
     
        
        $("#secciones").val("1");
        $("#alumnos").text("Datos de Alumnos");

        cargarTablaRespuestasGeneral();
        $("#table-responsive-respuestas-general").fadeIn();

        $("#button-general").addClass("activar");

        $("#button-inicio").removeClass("activar");
        $("#button-familiar").removeClass("activar");
        $("#button-trayectoria").removeClass("activar");
        $("#button-personales").removeClass("activar");
        $("#button-academicas").removeClass("activar");

        $("#button-familiar").removeAttr("disabled");
        $("#button-trayectoria").removeAttr("disabled");
        $("#button-personales").removeAttr("disabled");
        $("#button-academicas").removeAttr("disabled");
        
        $(this).attr("disabled", "disabled");

        $("#table-responsive-alumnos").fadeOut();

        $("#table-responsive-respuestas-familiar").fadeOut();
        $("#table-responsive-familiar").fadeOut();
        $("#table-responsive-familiar2").fadeOut();  
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-respuestas-trayectoria").fadeOut();
        $("#table-responsive-trayectoria").fadeOut();
        $("#table-responsive-respuestas-academicas").fadeOut();
        $("#table-responsive-academicas").fadeOut();
        $("#table-responsive-caracteristicas").fadeOut();
        $("#table-responsive-respuestas-caracteristicas").fadeOut();
        
     
    });
    $("#button-familiar").click(function (e) { 
        e.preventDefault();

        $("#table-responsive-respuestas-familiar").fadeIn();

        $("#table-responsive-alumnos").fadeOut();
      
        $("#table-responsive-familiar").fadeOut();
        $("#table-responsive-familiar2").fadeOut();  
        $("#table-responsive-respuestas-general").fadeOut(); 
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-respuestas-trayectoria").fadeOut();
        $("#table-responsive-trayectoria").fadeOut();
        $("#table-responsive-respuestas-academicas").fadeOut();
        $("#table-responsive-academicas").fadeOut();
        $("#table-responsive-caracteristicas").fadeOut();
        $("#table-responsive-respuestas-caracteristicas").fadeOut();
        $("#table-responsive-lenguas").fadeOut();
     

        $("#secciones").val("4");
    
        $("#alumnos").text("Datos de Alumnos");
        $("#button-familiar").addClass("activar");

        $("#button-inicio").removeClass("activar");
        
        $("#button-trayectoria").removeClass("activar");
        $("#button-personales").removeClass("activar");
        $("#button-academicas").removeClass("activar");
        $("#button-general").removeClass("activar");

        $("#button-trayectoria").removeAttr("disabled");
        $("#button-personales").removeAttr("disabled");
        $("#button-academicas").removeAttr("disabled");
        $("#button-general").removeAttr("disabled");
       
        $(this).attr("disabled", "disabled");

        cargarTablaRespuestasFamiliar();      
       
    })
    
    $("#button-trayectoria").click(function (e) { 
        e.preventDefault();

        $("#secciones").val("2");
        
        $("#table-responsive-respuestas-trayectoria").fadeIn();
        $("#alumnos").text("Datos de Alumnos");
        $("#button-trayectoria").addClass("activar");
     
        $(this).attr("disabled", true);

        $("#table-responsive-alumnos").fadeOut();
        
        $("#table-responsive-respuestas-familiar").fadeOut();
        $("#table-responsive-familiar").fadeOut();
        $("#table-responsive-familiar2").fadeOut();  
        $("#table-responsive-respuestas-general").fadeOut(); 
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-trayectoria").fadeOut();
        $("#table-responsive-respuestas-academicas").fadeOut();
        $("#table-responsive-academicas").fadeOut();
        $("#table-responsive-caracteristicas").fadeOut();
        $("#table-responsive-respuestas-caracteristicas").fadeOut();
        $("#table-responsive-lenguas").fadeOut();
     


        $("#button-familiar").removeClass("activar");
        $("#button-personales").removeClass("activar");
        $("#button-academicas").removeClass("activar");
        $("#button-general").removeClass("activar");

        $("#button-personales").removeAttr("disabled");
        $("#button-academicas").removeAttr("disabled");
        $("#button-general").removeAttr("disabled");
        $("#button-familiar").removeAttr("disabled");

        cargarTablaRespuestasTrayecotria();
    });

    $("#button-personales").click(function (e) { 
        e.preventDefault();
        
     
        $("#secciones").val("3");
        
        $("#table-responsive-respuestas-caracteristicas").fadeIn();
        $(this).attr("disabled", true);
        $(this).addClass("activar");

        
        $("#table-responsive-alumnos").fadeOut();
        
        $("#table-responsive-respuestas-familiar").fadeOut();
        $("#table-responsive-familiar").fadeOut();
        $("#table-responsive-familiar2").fadeOut();  
        $("#table-responsive-respuestas-general").fadeOut(); 
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-respuestas-trayectoria").fadeOut();
        $("#table-responsive-trayectoria").fadeOut();
        $("#table-responsive-respuestas-academicas").fadeOut();
        $("#table-responsive-academicas").fadeOut();
        $("#table-responsive-caracteristicas").fadeOut();
        $("#table-responsive-lenguas").fadeOut();
     

        

        cargarTablaRespuestasCaracteristicas();

        $("#button-inicio").removeClass("activar");
        $("#button-familiar").removeClass("activar");
        $("#button-academicas").removeClass("activar");
        $("#button-general").removeClass("activar");
        $("#button-trayectoria").removeClass("activar");
    
        $("#button-academicas").removeAttr("disabled");
        $("#button-general").removeAttr("disabled");
        $("#button-familiar").removeAttr("disabled");
        $("#button-trayectoria").removeAttr("disabled");
    });

    $("#button-academicas").click(function (e) { 
        e.preventDefault();
        
  
        $("#secciones").val("5");

        $("#table-responsive-respuestas-academicas").fadeIn();

        $("#table-responsive-alumnos").fadeOut();

        $("#table-responsive-respuestas-familiar").fadeOut();
        $("#table-responsive-familiar").fadeOut();
        $("#table-responsive-familiar2").fadeOut();  
        $("#table-responsive-respuestas-general").fadeOut(); 
        $("#table-responsive-general").fadeOut();
        $("#table-responsive-respuestas-trayectoria").fadeOut();
        $("#table-responsive-trayectoria").fadeOut();
        $("#table-responsive-academicas").fadeOut();
        $("#table-responsive-caracteristicas").fadeOut();
        $("#table-responsive-respuestas-caracteristicas").fadeOut();
        $("#table-responsive-lenguas").fadeOut();

       
        $(this).addClass('activar');
        $(this).attr("disabled", true);

       cargarTablaRespuestasAcademicas();

       $("#button-inicio").removeClass("activar");
       $("#button-familiar").removeClass("activar");
       $("#button-general").removeClass("activar");
       $("#button-trayectoria").removeClass("activar");
       $("#button-personales").removeClass("activar");
   
       $("#button-general").removeAttr("disabled");
       $("#button-familiar").removeAttr("disabled");
       $("#button-trayectoria").removeAttr("disabled");
       $("#button-personales").removeAttr("disabled");
    });
}

function salir(){

    $("#salir-psicologia").click(function (e) { 
        e.preventDefault();

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Salir</h5>");

        $.confirm.show({

            "message": "<h4>¿Desea continuar?</h4>",
            "type":"warning",
            "yesText":"Si",
            "noText":"No",

            "yes": function (){
                window.location.href = "php/cierre-session.php";
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

