var cve_persona = $("#cve_aspirante").val();

$(document).ready(function () {
    
    buttons();
    forms();
    actualizarTabla();

    $("#terminar-cues").hide();
    $("#nota").hide();

});



function buttons(){
    $.ajax({
        type: "POST",
        url: "../php/verificar-contestacion.php",
        data: {
            "datos": "1",
            "opcion": "Generales",
            "clave_aspi": cve_persona
        },
    
        success: function (response) {
           
            if(response == "Verificado generales"){
                $("#datos-generales").hide();
                $("#texto-general").html("<h4><i class='icon-address-card'></i>GRACIAS POR TUS RESPUESTAS</h4>");
             
            }
        }
    });
       
    $.ajax({
        type: "POST",
        url: "../php/verificar-contestacion.php",
        data: {
            "datos": "2",
            "opcion": "Trayectoria",
            "clave_aspi": cve_persona

        },
    
        success: function (response) {
            
            if(response == "Verificado trayectoria"){
                $("#texto-trayectoria").html("<h4><i class='icon-mortar-board'></i>GRACIAS POR TUS RESPUESTAS</h4>");
                $("#trayectoria-academica").hide();
            }
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/verificar-contestacion.php",
        data: {
            "datos": "3",
            "opcion": "Caracteristicas",
            "clave_aspi": cve_persona
        },
        success: function (response) {
           
            if(response == "Verificado caracteristicas"){

                $("#texto-caracteristicas").html("<h4><i class='icon-man'></i>GRACIAS POR TUS RESPUESTAS</h4>");
                $("#caracte-personales").hide();
            }
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/verificar-contestacion.php",
        data: {
            "datos": "4",
            "opcion": "Familiar",
            "clave_aspi": cve_persona
        },
        success: function (response) {
           
            if(response == "Verificado familiar"){

                $("#texto-familiar").html("<h4><i class='icon-man-woman'></i>GRACIAS POR TUS RESPUESTAS</h4>");
                $("#entorno-familiar").hide();
                
            }
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/verificar-contestacion.php",
        data: {
            "datos": "5",
            "opcion": "Academicas",
            "clave_aspi": cve_persona
        },
        success: function (response) {
           
            if(response == "Verificado academicas"){

                $("#texto-academicas").html("<h4><i class='icon-book1'></i>GRACIAS POR TUS RESPUESTAS</h4>");
                $("#deciciones-acedemicas").hide();
            
            }
        }
    });

}

function forms(){

    $("#datos-generales").click(function (e) { 
        e.preventDefault();

        window.location.href = "../cuestionario/cuestionario-datos.php";
     
    });

    $("#trayectoria-academica").click(function (e) { 
        e.preventDefault();
        
        window.location.href = "../cuestionario/cuestionario-traye-acade.php";
    });

    $("#caracte-personales").click(function (e) { 
        e.preventDefault();
        
        window.location.href = "../cuestionario/cuestionario-caracteristicas.php";
    });

    $("#entorno-familiar").click(function (e) { 
        e.preventDefault();
        
        window.location.href = "../cuestionario/cuestionario-familiar.php";
    });

    $("#deciciones-acedemicas").click(function (e) { 
        e.preventDefault();
        
        window.location.href = "../cuestionario/cuestionario-academicas.php";
    });
}


var terminarCuestionario = function (){

    var button_general = $("#datos-generales");
    var button_trayectoria = $("#trayectoria-academica");
    var button_personales = $("#caracte-personales");
    var button_familiar = $("#entorno-familiar");
    var button_academicas = $("#deciciones-acedemicas");

    if(!button_general.is(':visible') && !button_trayectoria.is(':visible') && !button_personales.is(':visible')
        && !button_familiar.is(':visible')  && !button_academicas.is(':visible')){
        
        $(".quitar").remove();
        $("#finalizar").append("<h2>GRACIAS POR RESPONDER LOS CUESTIONARIOS</h2>");
        $("#terminar-cues").show();
        $("#nota").show ();
        
    }
 
   
}

setTimeout(terminarCuestionario, 1000);


function actualizarTabla(){

    $("#terminar-cues").click(function (e) { 
        e.preventDefault();
       // alert("hia");

        var finish = $("#terminar-cuestionario").val();

        $.ajax({
            type: "POST",
            url: "../php/terminar_cuestionario.php",
            data: {
                "terminar": finish
            },
            success: function (response) {
                
                if(response == "actualizado"){

                    window.location.href = "http://200.79.176.151/antes/escolares/index.php?pg=x7rHvcTC";
                }
            }
        });
        
    });
}
