var cve_persona = $("#cve_aspirante").val();
var cve_seccion = $("#seccion-familiar").val();

var padre_no_estudio = $("#no-estudio-padre");
var padre_primaria = $("#primaria-padre");
var padre_secu = $("#secu-padre");
var padre_bachiller = $("#bachiller-padre");
var padre_tecnica = $("#tecnica-padre");
var padre_uni = $("#uni-padre");
var padre_lic = $("#lic-padre");
var padre_pos = $("#posgrado-padre");

$(document).ready(function () {
    

    insertarFamiliar();
    insertFamiliarPart2();
    salir();


});


function insertarFamiliar(){

    $("#form-familiar").submit(function (e) { 
        e.preventDefault();
        
        var pregunta23 = $("#cve_pregunta-23").val();
        var res_padre = $("input[name='estudio-padre']:checked").val();
        var pregunta24 = $("#cve_pregunta-24").val();
        var res_madre = $("input[name='estudio-madre']:checked").val();
        var pregunta25 = $("#cve_pregunta-25").val();
        var res_libros = $("input[name='libros']:checked").val();
        var pregunta26 = $("#cve_pregunta-26").val();
        var res_educativo = $("input[name='educativo']:checked").val();
        var pregunta27 = $("#cve_pregunta-27").val();
        var res_trabajar = $("input[name='trabajar']:checked").val();

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function(){
                $("#guardar-familiar").hide();
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-familiar.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "seccion-familiar": cve_seccion,
                        "pregunta-23": pregunta23,
                        "pregunta-24": pregunta24,
                        "pregunta-25": pregunta25,
                        "pregunta-26": pregunta26,
                        "pregunta-27": pregunta27,
                        "estudio-padre": res_padre,
                        "estudio-madre": res_madre,
                        "libros": res_libros,
                        "educativo": res_educativo,
                        "trabajar": res_trabajar
                    },
                    success: function (response) {
                     
                        if(response == "Guardando"){
                            
                            Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                            {   
                                buttons:{
                                    ok:{
                                        'class': 'btn btn-info',
                                        text: 'Aceptar',
                                    }
                                },
                                title: 'INFORMACIÓN',
                                width: 700,
                                msg: "<h4>Respuestas guardadas, contesta el siguiente rubro</h4>",
                                closeButton: false,
                                callback: function(){
                                    window.location.href = "familiar-part2.php";
                                }
                            });
                        }
                    }
                });
            }
        })

    });
}

function salir(){

    $("a#salir").click(function (e) { 
        e.preventDefault();

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Salir</h5>");

        $.confirm.show({

            "message": "No se han enviado sus respustas, los cambios no se  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guardarán.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;¿Desea continuar?",
            "type":"warning",
            "yesText":"Si",
            "noText":"No",


            "yes": function (){
                window.location.href = "../php/cerrar-sesion.php";
            }
        })
    });

}

function insertFamiliarPart2(){

    $("#form-familiar-2").submit(function (e) { 
        e.preventDefault();
        
        var pregunta28 = $("#cve_pregunta-28").val();
        var res_personas = $("input[name='personas']:checked").val();

        var pregunta29 = $("#cve_pregunta-29").val();
        var cve_reac_telefonia = $("#cve-react-telefonia").val();
        var cve_reac_lavadora = $("#cve-react-lavadora").val();
        var cve_reac_refri = $("#cve-react-refri").val();
        var cve_reac_horno = $("#cve-react-horno").val();
        var cve_reac_internet = $("#cve-react-internet").val();
        var cve_reac_television = $("#cve-react-television").val();
        var cve_reac_tablet = $("#cve-react-tablet").val();
        var res_telefonia = $("input[name='telefonia']:checked").val();
        var res_lavadora = $("input[name='lavadora']:checked").val();
        var res_refri = $("input[name='refri']:checked").val();
        var res_horno = $("input[name='horno']:checked").val();
        var res_internet = $("input[name='internet']:checked").val();
        var res_television = $("input[name='television']:checked").val();
        var res_tablet = $("input[name='tablet']:checked").val();

        var pregunta30 = $("#cve_pregunta-30").val();
        var res_cuartos = $("input[name='cuartos']:checked").val();

        var pregunta31 = $("#cve_pregunta-31").val();
        var cve_reac_computadora = $("#cve-react-computadora").val();
        var cve_reac_tele = $("#cve-react-tele").val();
        var cve_reac_auto = $("#cve-react-auto").val();
        var cve_reac_banos = $("#cve-react-banos").val();
        var res_computadora = $("input[name='computadora']:checked").val();
        var res_tele = $("input[name='tele']:checked").val();
        var res_auto = $("input[name='auto']:checked").val();
        var res_banos = $("input[name='banos']:checked").val();

        var pregunta32 = $("#cve_pregunta-32").val();
        var res_vacaciones = $("input[name='vacaciones']:checked").val();


        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function(){
                $("#guardar-familiar2").hide();
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-familiar-part2.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "seccion-familiar": cve_seccion,
                        "pregunta-28": pregunta28,
                        "pregunta-29": pregunta29,
                        "rea-telefonia": cve_reac_telefonia,
                        "rea-lavadora": cve_reac_lavadora,
                        "rea-refri": cve_reac_refri,
                        "rea-horno": cve_reac_horno,
                        "rea-internet": cve_reac_internet,
                        "rea-television": cve_reac_television,
                        "rea-tablet": cve_reac_tablet,
                        "personas": res_personas,
                        "telefonia": res_telefonia,
                        "lavadora": res_lavadora,
                        "refri": res_refri,
                        "horno": res_horno,
                        "internet": res_internet,
                        "television": res_television,
                        "tablet": res_tablet,
                        "pregunta-30": pregunta30,
                        "cuartos": res_cuartos,
                        "pregunta-31": pregunta31,
                        "rea-computadora": cve_reac_computadora,
                        "rea-tele": cve_reac_tele,
                        "rea-auto": cve_reac_auto,
                        "rea-banos": cve_reac_banos,
                        "computadora": res_computadora,
                        "tele": res_tele,
                        "auto": res_auto,
                        "banos": res_banos,
                        "pregunta-32": pregunta32,
                        "vacaciones": res_vacaciones
                    },
                    success: function (response) {

                        if(response == "Guardando"){
                                
                            Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                            {   
                                buttons:{
                                    ok:{
                                        'class': 'btn btn-info',
                                        text: 'Aceptar',
                                    }
                                },
                                title: 'INFORMACIÓN',
                                width: 700,
                                msg: "<h4>Respuestas guardadas contesta, el siguiente rubro</h4>",
                                closeButton: false,
                                callback: function(){
                                    window.location.href = "principal.php";
                                }
                            });

                        }
        
                       
                    }
                });
            }
        })

    });
}

function revisarForm(response){



    if(response[0].respuesta == "No estudió"){

        padre_no_estudio.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    else if(response[0].respuesta == "Primaria"){

        padre_primaria.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    else if(response[0].respuesta == "Secundaria"){

        padre_secu.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    else if(response[0].respuesta == "Bachillerato"){

        padre_bachiller.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    else if(response[0].respuesta == "Carrera técnica"){

        padre_tecnica.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    else if(response[0].respuesta == "Técnico superior universitario (después del bachillerato)"){

        padre_uni.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }
    
    else if(response[0].respuesta == "Licenciatura"){

        padre_lic.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }
    else if(response[0].respuesta == "Posgrado (especialidad, maestría, doctorado)"){

        padre_pos.attr('checked','checked');
         $("#form-familiar").find("input").attr("disabled" ,true);
    }

    return true;

}

function getDatosFamiliar(response){

    if(revisarForm(response) && $("#form-familiar").find("input").is(':disabled')){

        Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
        {   
            buttons:{
                ok:{
                    class: 'btn btn-info',
                    text: 'Aceptar',
                }
            },
            title: 'INFORMACIÓN',
            width: 700,
            msg: "<h4>Ya has terminado este rubro por favor contesta el siguiente</h4>",
            closeButton: false,
            callback: function(){
                window.location.href = "familiar-part2.php";
               
        
            }
        });
    }
}