var cve_seccion = $("#seccion-caracteristicas-personales").val();
var cve_persona = $("#cve_aspirante").val();

var frecuencia_nunca = $("#casi-nunca-fre"),
    frecuencia_algunas = $("#algunas-veces-fre"),
    frecuencia_frecuen = $("#frecuentemente-fre"),
    frecuencia_siempre = $("#casi-siempre-fre"),
    tratar_nunca = $("#casi-nunca-tratar"),
    tratar_algunas = $("#algunas-veces-tratar"),
    tratar_frecuen = $("#frecuentemente-tratar"),
    tratar_siempre = $("#casi-siempre-tratar"),
    tareas_nunca = $("#casi-nunca-tareas"),
    tareas_algunas = $("#algunas-veces-tareas"),
    tareas_frecuen = $("#frecuentemente-tareas"),
    tareas_siempre = $("#casi-siempre-tareas"),
    metas_nunca = $("#casi-nunca-metas"),
    metas_algunas = $("#algunas-veces-metas"),
    metas_frecuen = $("#frecuentemente-metas"),
    metas_siempre = $("#casi-siempre-metas"),
    sugerir_nunca = $("#casi-nunca-suge"),
    sugerir_algunas = $("#algunas-veces-suge"),
    sugerir_frecuen = $("#frecuentemente-suge"),
    sugerir_siempre = $("#casi-siempre-suge"),
    nose_trabajo = $("#nose-trabajo"),
    poco_trabajo = $("#poco-habil-trabajo"),
    habil_trabajo = $("#habil-trabajo"),
    muy_habil_trabajo = $("#muy-habil-trabajo"),
    nose_participar = $("#nose-participar"),
    poco_participar = $("#poco-habil-participar"),
    habil_participar = $("#habil-participar"),
    muy_habil_participar = $("#muy-habil-participar"),
    nose_conversar = $("#nose-conversar"),
    poco_conversar = $("#poco-habil-conversar"),
    habil_conversar = $("#habil-conversar"),
    muy_habil_conversar = $("#muy-habil-conversar"),
    nose_dudas = $("#nose-dudas"),
    poco_dudas = $("#poco-habil-dudas"),
    habil_dudas = $("#habil-dudas"),
    muy_habil_dudas = $("#muy-habil-dudas"),
    clases_nunca = $("#nunca-clases"),
    clases_algunas = $("#algunas-clases"),
    clases_frecuen = $("#frecuente-clases"),
    clases_siempre = $("#siempre-clases"),
    materiales_nunca = $("#nunca-materiales"),
    materiales_algunas = $("#algunas-materiales"),
    materiales_frecuen = $("#frecuente-materiales"),
    materiales_siempre = $("#siempre-materiales"),
    estudiar_nunca = $("#nunca-estudiar"),
    estudiar_algunas = $("#algunas-estudiar"),
    estudiar_frecuen = $("#frecuente-estudiar"),
    estudiar_siempre = $("#siempre-estudiar"),
    ejercicios_nunca = $("#nunca-ejercicios"),
    ejercicios_algunas = $("#algunas-ejercicios"),
    ejercicios_frecuen = $("#frecuente-ejercicios"),
    ejercicios_siempre = $("#siempre-ejercicios"),
    extracurricular_nunca = $("#nunca-extracurricular"),
    extracurricular_algunas = $("#algunas-extracurricular"),
    extracurricular_frecuen = $("#frecuente-extracurricular"),
    extracurricular_siempre = $("#siempre-extracurricular"),
    clase_nunca = $("#nunca-clase"),
    clase_algunas = $("#algunas-clase"),
    clase_frecuen = $("#frecuente-clase"),
    clase_siempre = $("#siempre-clase"),
    participar_nunca = $("#nunca-participar"),
    participar_algunas = $("#algunas-participar"),
    participar_frecuen = $("#frecuente-participar"),
    participar_siempre = $("#siempre-participar"),
    tarea_nunca = $("#nunca-tareas"),
    tarea_algunas = $("#algunas-tareas"),
    tarea_frecuen = $("#frecuente-tareas"),
    tarea_siempre = $("#siempre-tareas"),
    atencion_nunca = $("#nunca-atencion"),
    atencion_algunas = $("#algunas-atencion"),
    atencion_frecuen = $("#frecuente-atencion"),
    atencion_siempre = $("#siempre-atencion");
    exito_no_identifico = $("#no-identifico-exito");
    exito_poco_identifico = $("#identifico-poco-exito");
    exito_identifico = $("#identifico-exito");
    exito_total_identifico = $("#identifico-total-exito");
    captar_total_desacu = $("#total-deac-captar");
    captar_desacu = $("#desacuerdo-captar");
    captar_deacuerdo = $("#deacuerdo-captar");
    captar_total_deacuerdo = $("#tatal-deacuedo-captar");

$(document).ready(function () {
    

    insertarCaracteristicas();
    insertarCaracteristicasPart2();
    insertarCaracteristicasPart3();
    insertarCaracteristicasPart4();
    salir();


});




function insertarCaracteristicas(){
    
    $("#form-caracteristicas").submit(function (e) { 
        e.preventDefault();

       
        var cve_pregunta11 = $("#cve-pregunta-11").val();
        var cve_rea_paticipo = $("#reac-participo").val();
        var res_participo =  $("input[name='participo']:checked").val(); 
        var cve_rea_colaboro = $("#reac-colaboro").val();
        var res_colaboro =  $("input[name='colaboro']:checked").val(); 
        var cve_rea_intervengo = $("#reac-intervengo").val();
        var res_intervengo =  $("input[name='intervengo']:checked").val(); 
        var cve_rea_cumplo = $("#reac-cumplo").val();
        var res_cumplo =  $("input[name='cumplo']:checked").val();
        var cve_rea_sugerencias = $("#reac-sugerencias").val();
        var res_sugerencias =  $("input[name='sugerencias']:checked").val();
        
        var cve_pregunta12 = $("#cve-pregunta-12").val();
        var cve_rea_presentar = $("#reac-presentar").val();
        var res_presentar =  $("input[name='presentar']:checked").val();
        var cve_rea_participar = $("#reac-participar").val()
        var res_participar =  $("input[name='participar']:checked").val();
        var cve_rea_conversar = $("#reac-conversar").val();
        var res_conversar =  $("input[name='conversar']:checked").val();
        var cve_rea_dudas = $("#reac-dudas").val();
        var res_dudas =  $("input[name='dudas']:checked").val();

        var cve_pregunta13 = $("#cve-pregunta-13").val();
        var cve_rea_falto = $("#reac-falto").val();
        var res_falto =  $("input[name='falto']:checked").val();
        var cve_rea_materiales = $("#reac-materiales").val();
        var res_materiales =  $("input[name='materiales']:checked").val();
        var cve_rea_tiempo_estudiar = $("#reac-tiempo-estudiar").val();
        var res_estudiar =  $("input[name='estudiar']:checked").val();
        var cve_rea_ejercicios = $("#reac-ejercicios").val();
        var res_ejercicios =  $("input[name='ejercicios']:checked").val();
        var cve_rea_extracurricular = $("#reac-extracurricular").val();
        var res_extracurricular =  $("input[name='extracurricular']:checked").val();
        var cve_rea_clase = $("#reac-clase").val();
        var res_clase =  $("input[name='clase']:checked").val();
        var cve_rea_participar_clases = $("#reac-participar-clases").val();
        var res_participar_clases =  $("input[name='participar-clases']:checked").val();
        var cve_rea_tareas = $("#reac-tareas").val();
        var res_tareas =  $("input[name='tareas']:checked").val();
        var cve_rea_atencion = $("#reac-atencion").val();
        var res_atencion =  $("input[name='atencion']:checked").val();
        
        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function(){
                $("#siguiente").hide();
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-caracteristicas.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "seccion-caracteristicas": cve_seccion,
                        "pregunta-11" : cve_pregunta11,
                        "rea-participo": cve_rea_paticipo,
                        "participo": res_participo,
                        "rea-colaboro": cve_rea_colaboro,
                        "colaboro": res_colaboro,
                        "rea-intervengo": cve_rea_intervengo,
                        "intervengo": res_intervengo,
                        "rea-cumplo": cve_rea_cumplo,
                        "cumplo": res_cumplo,
                        "rea-sugerencias": cve_rea_sugerencias,
                        "sugerencias": res_sugerencias,
                        "pregunta-12": cve_pregunta12,
                        "rea-presentar": cve_rea_presentar,
                        "presentar": res_presentar,
                        "rea-participar": cve_rea_participar,
                        "participar": res_participar,
                        "rea-conversar": cve_rea_conversar,
                        "conversar": res_conversar,
                        "rea-dudas": cve_rea_dudas,
                        "dudas": res_dudas,
                        "pregunta-13": cve_pregunta13,
                        "rea-falto": cve_rea_falto,
                        "falto": res_falto,
                        "rea-materiales": cve_rea_materiales,
                        "materiales": res_materiales,
                        "rea-tiempo-estudiar": cve_rea_tiempo_estudiar,
                        "estudiar": res_estudiar,
                        "rea-ejercicios": cve_rea_ejercicios,
                        "ejercicios": res_ejercicios,
                        "rea-extracurricular": cve_rea_extracurricular,
                        "extracurricular": res_extracurricular,
                        "rea-clase": cve_rea_clase,
                        "clase": res_clase,
                        "rea-participar-clases": cve_rea_participar_clases,
                        "participar-clases": res_participar_clases,
                        "rea-tareas": cve_rea_tareas,
                        "tareas": res_tareas,
                        "rea-atencion": cve_rea_atencion,
                        "atencion": res_atencion
                    },
                    
                    success: function (response) {
                        
                        console.log(response);
        
                        if(response == "Guardado" ){
                            
                          /*  $("#siguiente").hide();
                            $("#form-caracteristicas").find('input').attr('disabled',true);*/

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
                                    window.location.href = "caracteristicas-part2.php";
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

    if(response[0].res == "Nunca o casi nunca"){

        frecuencia_nunca.attr('checked','checked');
    }
    else if(response[0].res == "Algunas veces"){

        frecuencia_algunas.attr('checked','checked');
    }
    else if(response[0].res == "Frecuentemente"){

        frecuencia_frecuen.attr('checked','checked');
    }
    else if(response[0].res == "Siempre o casi siempre"){

        frecuencia_siempre.attr('checked','checked');
    }

    if(response[1].res == "Nunca o casi nunca"){

        metas_nunca.attr('checked','checked');
    }
    else if(response[1].res == "Algunas veces"){

        metas_algunas.attr('checked','checked');
    }
    else if(response[1].res == "Frecuentemente"){

        metas_frecuen.attr('checked','checked');
    }
    else if(response[1].res == "Siempre o casi siempre"){

        metas_siempre.attr('checked','checked');
    }

    if(response[2].res == "Nunca o casi nunca"){

        tratar_nunca.attr('checked','checked');
    }
    else if(response[2].res == "Algunas veces"){

        tratar_algunas.attr('checked','checked');
    }
    else if(response[2].res == "Frecuentemente"){

        tratar_frecuen.attr('checked','checked');
    }
    else if(response[2].res == "Siempre o casi siempre"){

        tratar_siempre.attr('checked','checked');
    }

    if(response[3].res == "Nunca o casi nunca"){

        sugerir_nunca.attr('checked','checked');
    }
    else if(response[3].res == "Algunas veces"){

        sugerir_algunas.attr('checked','checked');
    }
    else if(response[3].res == "Frecuentemente"){

        sugerir_frecuen.attr('checked','checked');
    }
    else if(response[3].res == "Siempre o casi siempre"){

        sugerir_siempre.attr('checked','checked');
    }

    if(response[4].res == "Nunca o casi nunca"){

        tareas_nunca.attr('checked','checked');
    }
    else if(response[4].res == "Algunas veces"){

        tareas_algunas.attr('checked','checked');
    }
    else if(response[4].res == "Frecuentemente"){

        tareas_frecuen.attr('checked','checked');
    }
    else if(response[4].res == "Siempre o casi siempre"){

        tareas_siempre.attr('checked','checked');
    }

    if(response[5].res == "No lo sé hacer"){

        nose_trabajo.attr('checked','checked');
    }
    else if(response[5].res == "Poco hábil"){

        poco_trabajo.attr('checked','checked');
    }
    else if(response[5].res == "Hábil"){

        habil_trabajo.attr('checked','checked');
    }
    else if(response[5].res == "Muy hábil"){

        muy_habil_trabajo.attr('checked','checked');
    }

    if(response[6].res == "No lo sé hacer"){

        nose_conversar.attr('checked','checked');
    }
    else if(response[6].res == "Poco hábil"){

        poco_conversar.attr('checked','checked');
    }
    else if(response[6].res == "Hábil"){

        habil_conversar.attr('checked','checked');
    }
    else if(response[6].res == "Muy hábil"){

        muy_habil_conversar.attr('checked','checked');
    }

    if(response[7].res == "No lo sé hacer"){

        nose_participar.attr('checked','checked');
    }
    else if(response[7].res == "Poco hábil"){

        poco_participar.attr('checked','checked');
    }
    else if(response[7].res == "Hábil"){

        habil_participar.attr('checked','checked');
    }
    else if(response[7].res == "Muy hábil"){

        muy_habil_participar.attr('checked','checked');
    }

    if(response[8].res == "No lo sé hacer"){

        nose_dudas.attr('checked','checked');
    }
    else if(response[8].res == "Poco hábil"){

        poco_dudas.attr('checked','checked');
    }
    else if(response[8].res == "Hábil"){

        habil_dudas.attr('checked','checked');
    }
    else if(response[8].res == "Muy hábil"){

        muy_habil_dudas.attr('checked','checked');
    }

    if(response[9].res == "Nunca o casi nunca"){

        clases_nunca.attr('checked','checked');
    }
    else if(response[9].res == "Algunas veces"){

        clases_algunas.attr('checked','checked');
    }
    else if(response[9].res == "Frecuentemente"){

        clases_frecuen.attr('checked','checked');
    }
    else if(response[9].res == "Siempre o casi siempre"){

        clases_siempre.attr('checked','checked');
    }

    if(response[10].res == "Nunca o casi nunca"){

        materiales_nunca.attr('checked','checked');
    }
    else if(response[10].res == "Algunas veces"){

        materiales_algunas.attr('checked','checked');
    }
    else if(response[10].res == "Frecuentemente"){

        materiales_frecuen.attr('checked','checked');
    }
    else if(response[10].res == "Siempre o casi siempre"){

        materiales_siempre.attr('checked','checked');
    }

    if(response[11].res == "Nunca o casi nunca"){

        estudiar_nunca.attr('checked','checked');
    }
    else if(response[11].res == "Algunas veces"){

        estudiar_algunas.attr('checked','checked');
    }
    else if(response[11].res == "Frecuentemente"){

        estudiar_frecuen.attr('checked','checked');
    }
    else if(response[11].res == "Siempre o casi siempre"){

        estudiar_siempre.attr('checked','checked');
    }

    if(response[12].res == "Nunca o casi nunca"){

        ejercicios_nunca.attr('checked','checked');
    }
    else if(response[12].res == "Algunas veces"){

        ejercicios_algunas.attr('checked','checked');
    }
    else if(response[12].res == "Frecuentemente"){

        ejercicios_frecuen.attr('checked','checked');
    }
    else if(response[12].res == "Siempre o casi siempre"){

        ejercicios_siempre.attr('checked','checked');
    }

    if(response[13].res == "Nunca o casi nunca"){

        extracurricular_nunca.attr('checked','checked');
    }
    else if(response[13].res == "Algunas veces"){

        extracurricular_algunas.attr('checked','checked');
    }
    else if(response[13].res == "Frecuentemente"){

        extracurricular_frecuen.attr('checked','checked');
    }
    else if(response[13].res == "Siempre o casi siempre"){

        extracurricular_siempre.attr('checked','checked');
    }

    if(response[14].res == "Nunca o casi nunca"){

        clase_nunca.attr('checked','checked');
    }
    else if(response[14].res == "Algunas veces"){

        clase_algunas.attr('checked','checked');
    }
    else if(response[14].res == "Frecuentemente"){

        clase_frecuen.attr('checked','checked');
    }
    else if(response[14].res == "Siempre o casi siempre"){

        clase_siempre.attr('checked','checked');
    }

    if(response[15].res == "Nunca o casi nunca"){

        participar_nunca.attr('checked','checked');
    }
    else if(response[15].res == "Algunas veces"){

        participar_algunas.attr('checked','checked');
    }
    else if(response[15].res == "Frecuentemente"){

        participar_frecuen.attr('checked','checked');
    }
    else if(response[15].res == "Siempre o casi siempre"){

        participar_siempre.attr('checked','checked');
    }

    if(response[16].res == "Nunca o casi nunca"){

        tarea_nunca.attr('checked','checked');
    }
    else if(response[16].res == "Algunas veces"){

        tarea_algunas.attr('checked','checked');
    }
    else if(response[16].res == "Frecuentemente"){

        tarea_frecuen.attr('checked','checked');
    }
    else if(response[16].res == "Siempre o casi siempre"){

        tarea_siempre.attr('checked','checked');
    }

    if(response[17].res == "Nunca o casi nunca"){

        atencion_nunca.attr('checked','checked');
    }
    else if(response[17].res == "Algunas veces"){

        atencion_algunas.attr('checked','checked');
    }
    else if(response[17].res == "Frecuentemente"){

        atencion_frecuen.attr('checked','checked');
    }
    else if(response[17].res == "Siempre o casi siempre"){

        atencion_siempre.attr('checked','checked');
    }

    if(response[18].res == "No me identifico"){

        exito_no_identifico.attr('checked','checked');
        $("#form-caracte-part2").find("input").attr("disabled" ,true);
    }
    else if(response[18].res == "Me identifico poco"){

        exito_poco_identifico.attr('checked','checked');
        $("#form-caracte-part2").find("input").attr("disabled" ,true);
    }
    else if(response[18].res == "Me identifico"){

        exito_identifico.attr('checked','checked');
        $("#form-caracte-part2").find("input").attr("disabled" ,true);
    }
    else if(response[18].res == "Me identifico totalmente"){

        exito_total_identifico.attr('checked','checked');
        $("#form-caracte-part2").find("input").attr("disabled" ,true);
    }

    if(response[42].res == "Totalmente en desacuerdo"){

        captar_total_desacu.attr('checked','checked');
        $("#form-caracteri-part3").find("input").attr("disabled" ,true);
    }
    else if(response[42].res == "En desacuerdo"){

        captar_desacu.attr('checked','checked');
        $("#form-caracteri-part3").find("input").attr("disabled" ,true);
    }

    else if(response[42].res == "De acuerdo"){

        captar_deacuerdo.attr('checked','checked');
        $("#form-caracteri-part3").find("input").attr("disabled" ,true);
    }
    else if(response[42].res == "Totalmente de acuerdo"){

        captar_total_deacuerdo.attr('checked','checked');
        $("#form-caracteri-part3").find("input").attr("disabled" ,true);
    }

    return true;
}

function getDatosCaracteristicas(response){

    $("#form-caracteristicas").find("input").attr("disabled" ,true);
    

    if(revisarForm(response) && $("#form-caracteristicas").find("input").is(':disabled')){

       // $("#siguiente").hide();
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
                window.location.href = "caracteristicas-part2.php";
               // $("#form-caracteristicas").find("input").removeAttr("disabled");
        
            }
        });
    }
    else if(revisarForm(response) &&  $("#form-caracte-part2").find("input").is(':disabled')){
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
                window.location.href = "caracteristicas-part3.php";
               
        
            }
        });
    }

    else if(revisarForm(response) &&  $("#form-caracteri-part3").find("input").is(':disabled')){
        
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
                window.location.href = "caracteristicas-part4.php";
            
            }
        });
    }
}

function insertarCaracteristicasPart2(){

    $("#form-caracte-part2").submit(function (e) { 
        e.preventDefault();

        
            var pregunta14 = $("#cve_pregunta-14").val();
            var cve_rea_exito = $("#cve_react-exito").val();
            var res_exito =  $("input[name='exito']:checked").val();
            var cve_rea_maestros = $("#cve_react-maestros").val();
            var res_maestros =  $("input[name='maestros']:checked").val();
            var cve_rea_familia = $("#cve_react-familia").val();
            var res_familia =  $("input[name='familia']:checked").val();
            var cve_rea_cambiar = $("#cve_react-cambiar").val();
            var res_cambiar =  $("input[name='cambiar']:checked").val();
            var cve_rea_depende = $("#cve_react-depende-mi").val();
            var res_depende =  $("input[name='depende-mi']:checked").val();
            var cve_rea_propongo = $("#cve_react-propongo").val();
            var res_propongo =  $("input[name='propongo']:checked").val();
            var cve_rea_calificaciones = $("#cve_react-calificaciones").val();
            var res_calificaciones =  $("input[name='calificaciones']:checked").val();

            var pregunta15 = $("#cve_pregunta-15").val();
            var cve_rea_desaniman = $("#cve_react-desaniman").val();
            var res_desaniman =  $("input[name='desaniman']:checked").val();
            var cve_rea_empiezo = $("#cve_react-empiezo").val();
            var res_empiezo =  $("input[name='empiezo']:checked").val();
            var cve_rea_esfuerza = $("#cve_react-esfuerza").val();
            var res_esfuerza =  $("input[name='esfuerza']:checked").val();
            var cve_rea_metas = $("#cve_react-metas").val();
            var res_metas =  $("input[name='metas']:checked").val();
            var cve_rea_esmera = $("#cve_react-esmera").val();
            var res_esmera =  $("input[name='esmera']:checked").val();
            var cve_rea_trabaja = $("#cve_react-trabaja").val();
            var res_trabaja =  $("input[name='trabaja']:checked").val();
            var cve_rea_obstaculos = $("#cve_react-obstaculos").val();
            var res_obstaculos =  $("input[name='obstaculos']:checked").val();

            var pregunta16 = $("#cve_pregunta-16").val();
            var cve_rea_digna = $("#cve_react-digna").val();
            var res_digna =  $("input[name='digna']:checked").val();
            var cve_rea_fracasado = $("#cve_react-fracasado").val();
            var res_fracasado =  $("input[name='fracasado']:checked").val();
            var cve_rea_orgulloso = $("#cve_react-orgulloso").val();
            var res_orgulloso =  $("input[name='orgulloso']:checked").val();
            var cve_rea_satisfecho = $("#cve_react-satisfecho").val();
            var res_satisfecho =  $("input[name='satisfecho']:checked").val();
            var cve_rea_inutil = $("#cve_react-inutil").val();
            var res_inutil =  $("input[name='inutil']:checked").val();
            var cve_rea_cualidades = $("#cve_react-cualidades").val();
            var res_cualidades =  $("input[name='cualidades']:checked").val();
            var cve_rea_capaz = $("#cve_react-capaz").val();
            var res_capaz =  $("input[name='capaz']:checked").val();
            var cve_rea_actitud = $("#cve_react-actitud").val();
            var res_actitud =  $("input[name='actitud']:checked").val();
            var cve_rea_valorarme = $("#cve_react-valorarme").val();
            var res_valorarme =  $("input[name='valorarme']:checked").val();
            var cve_rea_bueno = $("#cve_react-bueno").val();
            var res_bueno =  $("input[name='bueno']:checked").val();

            $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

            $.confirm.show({

                "message": "Después de enviar no podrá contestar de nuevo",
                "type":"warning",
                "yesText":"Enviar",
                "noText":"Cancelar",

                "yes": function(){
                    $("#siguiente-3").hide();
                    $.ajax({
                        type: "POST",
                        url: "../php/preguntas-caracteristicas-part2.php",
                        data: {
                            "clave_aspi": cve_persona,
                            "seccion-caracteristicas": cve_seccion,
                            "pregunta-14": pregunta14,
                            "rea-exito": cve_rea_exito,
                            "exito": res_exito,
                            "rea-maestros": cve_rea_maestros,
                            "maestros": res_maestros,
                            "rea-familia": cve_rea_familia,
                            "familia": res_familia,
                            "rea-cambiar": cve_rea_cambiar,
                            "cambiar": res_cambiar,
                            "rea-depende-mi": cve_rea_depende,
                            "depende-mi": res_depende,
                            "rea-propongo": cve_rea_propongo,
                            "propongo": res_propongo,
                            "rea-calificaciones": cve_rea_calificaciones,
                            "calificaciones": res_calificaciones,
                            "pregunta-15": pregunta15,
                            "rea-desaniman": cve_rea_desaniman,
                            "desaniman": res_desaniman,
                            "rea-empiezo": cve_rea_empiezo,
                            "empiezo": res_empiezo,
                            "rea-esfuerza": cve_rea_esfuerza,
                            "esfuerza": res_esfuerza,
                            "rea-metas": cve_rea_metas,
                            "metas": res_metas,
                            "rea-esmera": cve_rea_esmera,
                            "esmera": res_esmera,
                            "rea-trabaja": cve_rea_trabaja,
                            "trabaja": res_trabaja,
                            "rea-obstaculos": cve_rea_obstaculos,
                            "obstaculos": res_obstaculos,
                            "pregunta-16" : pregunta16,
                            "rea-digna": cve_rea_digna,
                            "digna": res_digna,
                            "rea-fracasado": cve_rea_fracasado,
                            "fracasado": res_fracasado,
                            "rea-orgulloso": cve_rea_orgulloso,
                            "orgulloso": res_orgulloso,
                            "rea-satisfecho": cve_rea_satisfecho,
                            "satisfecho": res_satisfecho,
                            "rea-inutil": cve_rea_inutil,
                            "inutil": res_inutil,
                            "rea-cualidades": cve_rea_cualidades,
                            "cualidades": res_cualidades,
                            "rea-capaz": cve_rea_capaz,
                            "capaz": res_capaz,
                            "rea-actitud": cve_rea_actitud,
                            "actitud": res_actitud,
                            "rea-valorarme": cve_rea_valorarme,
                            "valorarme": res_valorarme,
                            "rea-bueno": cve_rea_bueno,
                            "bueno": res_bueno
                        },
                        success: function (response) {
        
                           if(response == "Guardado"){

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
                                msg: "<h4>Respuestas guardadas contesta el siguiente rubro</h4>",
                                closeButton: false,
                                callback: function(){
                                    window.location.href = "caracteristicas-part3.php";
                                }
                            });
                           }
                        }   
                    });
                }
            })

    });

}

function insertarCaracteristicasPart3(){

    $("#form-caracteri-part3").submit(function (e) { 
        e.preventDefault();
        
            var pregunta17 = $("#cve-pregunta-17").val();
            var cve_rea_captar = $("#cve_react-captar").val();
            var res_captar =  $("input[name='captar']:checked").val();
            var cve_rea_predecir = $("#cve_react-predecir").val();
            var res_predecir =  $("input[name='predecir']:checked").val();
            var cve_rea_emociones = $("#cve_react-emociones").val();
            var res_emociones =  $("input[name='emociones']:checked").val();
            var cve_rea_ponerme = $("#cve_react-ponerme").val();
            var res_ponerme =  $("input[name='ponerme']:checked").val();
            var cve_rea_identificar = $("#cve_react-identificar").val();
            var res_identificar =  $("input[name='identificar']:checked").val();
            var cve_rea_entrometido = $("#cve_react-entrometido").val();
            var res_entrometido =  $("input[name='entrometido']:checked").val();
            var cve_rea_entiendan = $("#cve_react-entiendan").val();
            var res_entiendan =  $("input[name='entiendan']:checked").val();

            var pregunta18 = $("#cve-pregunta-18").val();
            var cve_rea_atenciones = $("#cve_react-atenciones").val();
            var res_atenciones =  $("input[name='atenciones']:checked").val();
            var cve_rea_dibujos = $("#cve_react-dibujos").val();
            var res_dibujos =  $("input[name='dibujos']:checked").val();
            var cve_rea_estructura = $("#cve_react-estructura").val();
            var res_estructura =  $("input[name='estructura']:checked").val();
            var cve_rea_momento = $("#cve_react-momento").val();
            var res_momento =  $("input[name='momento']:checked").val();
            var cve_rea_ideas = $("#cve_react-ideas").val();
            var res_ideas =  $("input[name='ideas']:checked").val();
            var cve_rea_ejemplos = $("#cve_react-ejemplos").val();
            var res_ejemplos =  $("input[name='ejemplos']:checked").val();
            var cve_rea_palabras = $("#cve_react-palabras").val();
            var res_palabras =  $("input[name='palabras']:checked").val();
            var cve_rea_conozco = $("#cve_react-conozco").val();
            var res_conozco =  $("input[name='conozco']:checked").val();
            var cve_rea_disponible = $("#cve_react-disponible").val();
            var res_disponible =  $("input[name='disponible']:checked").val();
            var cve_rea_especificas = $("#cve_react-especificas").val();
            var res_especificas =  $("input[name='especificas']:checked").val();

            var pregunta19 = $("#cve-pregunta-19").val();
            var cve_rea_disculpa = $("#cve_react-disculpa").val();
            var res_disculpa =  $("input[name='disculpa']:checked").val();
            var cve_rea_ayuda = $("#cve_react-ayuda").val();
            var res_ayuda =  $("input[name='ayuda']:checked").val();
            var cve_rea_tema = $("#cve_react-tema").val();
            var res_tema =  $("input[name='tema']:checked").val();
            var cve_rea_dificultades = $("#cve_react-dificultades").val();
            var res_dificultades =  $("input[name='dificultades']:checked").val();
            var cve_rea_miedo = $("#cve_react-miedo").val();
            var res_miedo =  $("input[name='miedo']:checked").val();
            var cve_rea_critica = $("#cve_react-critica").val();
            var res_critica =  $("input[name='critica']:checked").val();

            $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

            $.confirm.show({

                "message": "Después de enviar no podrá contestar de nuevo",
                "type":"warning",
                "yesText":"Enviar",
                "noText":"Cancelar",

                "yes": function(){
                    $("#siguiente-4").hide();
                    $.ajax({
                        type: "POST",
                        url: "../php/preguntas-caracteristicas-part3.php",
                        data: {
                            "clave_aspi": cve_persona,
                            "seccion-caracteristicas": cve_seccion,
                            "pregunta-17": pregunta17,
                            "rea-captar": cve_rea_captar,
                            "rea-predecir": cve_rea_predecir,
                            "rea-emociones": cve_rea_emociones,
                            "rea-ponerme": cve_rea_ponerme,
                            "rea-identificar": cve_rea_identificar,
                            "rea-entrometido": cve_rea_entrometido,
                            "rea-entiendan": cve_rea_entiendan,
                            "captar": res_captar,
                            "predecir": res_predecir,
                            "emociones": res_emociones,
                            "ponerme": res_ponerme,
                            "identificar": res_identificar,
                            "entrometido": res_entrometido,
                            "entiendan": res_entiendan,
                            "pregunta-18": pregunta18,
                            "rea-atenciones": cve_rea_atenciones,
                            "rea-dibujos": cve_rea_dibujos,
                            "rea-estructura": cve_rea_estructura,
                            "rea-momento": cve_rea_momento,
                            "rea-ideas": cve_rea_ideas,
                            "rea-ejemplos": cve_rea_ejemplos,
                            "rea-palabras": cve_rea_palabras,
                            "rea-conozco": cve_rea_conozco,
                            "rea-disponible": cve_rea_disponible,
                            "rea-especificas": cve_rea_especificas,
                            "atenciones": res_atenciones,
                            "dibujos": res_dibujos,
                            "estructura": res_estructura,
                            "momento": res_momento,
                            "ideas": res_ideas,
                            "ejemplos": res_ejemplos,
                            "palabras": res_palabras,
                            "conozco": res_conozco,
                            "disponible": res_disponible,
                            "especificas": res_especificas,
                            "pregunta-19": pregunta19,
                            "rea-disculpa": cve_rea_disculpa,
                            "rea-ayuda": cve_rea_ayuda,
                            "rea-tema": cve_rea_tema,
                            "rea-dificultades": cve_rea_dificultades,
                            "rea-miedo": cve_rea_miedo,
                            "rea-critica": cve_rea_critica,
                            "disculpa": res_disculpa,
                            "ayuda": res_ayuda,
                            "tema": res_tema,
                            "dificultades": res_dificultades,
                            "miedo": res_miedo,
                            "critica": res_critica
        
                        },
                        success: function (response) {
                            console.log(response);
                            
                            if(response == "Guardado"){

                                //alert("hola");
                            }
                        }
                    });
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
                        msg: "<h4>Respuestas guardadas contesta el siguiente rubro</h4>",
                        closeButton: false,
                        callback: function(){
                            window.location.href = "caracteristicas-part4.php";
                        }
                    });
                }
            })
    });
}



function insertarCaracteristicasPart4(){

    $("#form-caracteristi-part4").submit(function (e) { 
        e.preventDefault();
        
        var pregunta20 = $("#cve_pregunta-20").val();
        var cve_rea_escolares = $("#cve-react-escolares").val();
        var res_escolares = $("input[name='escolares']:checked").val();
        var cve_rea_musica = $("#cve-react-musica").val();
        var res_musica = $("input[name='musica']:checked").val();
        var cve_rea_ingles = $("#cve-react-ingles").val();
        var res_ingles = $("input[name='ingles']:checked").val();
        var cve_rea_verbal = $("#cve-react-verbal").val();
        var res_verbal = $("input[name='verbal']:checked").val();
        var cve_rea_ordenar = $("#cve-react-ordenar").val();
        var res_ordenar = $("input[name='ordenar']:checked").val();
        var cve_rea_opinion = $("#cve-react-opinion").val();
        var res_opinion = $("input[name='opinion']:checked").val();
        var cve_rea_laboratorio = $("#cve-react-laboratorio").val();
        var res_laboratorio = $("input[name='laboratorio']:checked").val();
        var cve_rea_dialogo = $("#cve-react-dialogo").val();
        var res_dialogo = $("input[name='dialogo']:checked").val();
        var cve_rea_dificultad = $("#cve-react-dificultad").val();
        var res_dificultad = $("input[name='dificultad']:checked").val();
        var cve_rea_saludable = $("#cve-react-saludable").val();
        var res_saludable = $("input[name='saludable']:checked").val();
        var cve_rea_escrito = $("#cve-react-escrito").val();
        var res_escrito = $("input[name='escrito']:checked").val();
        var cve_rea_excel = $("#cve-react-excel").val();
        var res_excel = $("input[name='excel']:checked").val();
        var cve_rea_objetivo = $("#cve-react-objetivo").val();
        var res_objetivo = $("input[name='objetivo']:checked").val();
        var cve_rea_aprender = $("#cve-react-aprender").val();
        var res_aprender = $("input[name='aprender']:checked").val();
        var cve_rea_leyes = $("#cve-react-leyes").val();
        var res_leyes = $("input[name='leyes']:checked").val();
        var cve_rea_ambiente = $("#cve-react-ambiente").val();
        var res_ambiente = $("input[name='ambiente']:checked").val();

        var pregunta21 = $("#cve_pregunta-21").val();
        var res_max_estudios = $("input[name='max-estudios']:checked").val();

        var pregunta22 = $("#cve_pregunta-22").val();
        var cve_rea_golpearan = $("#cve-react-golpearan").val();
        var res_golpearan = $("input[name='golpearan']:checked").val();
        var cve_rea_ignorar = $("#cve-react-ignorar").val();
        var res_ignorar = $("input[name='ignorar']:checked").val();
        var cve_rea_facebook = $("#cve-react-facebook").val();
        var res_facebook = $("input[name='facebook']:checked").val();
        var cve_rea_groserias = $("#cve-react-groserias").val();
        var res_groserias = $("input[name='groserias']:checked").val();
        var cve_rea_robar = $("#cve-react-robar").val();
        var res_robar = $("input[name='robar']:checked").val();
        var cve_rea_forzar = $("#cve-react-forzar").val();
        var res_forzar = $("input[name='forzar']:checked").val();


        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function(){
                $("#guardar-caracteristicas").hide();
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-caracteristicas-part4.php",
                    data: {
        
                        "clave_aspi": cve_persona,
                        "seccion-caracteristicas": cve_seccion,
                        "pregunta-20": pregunta20,
                        "rea-escolares": cve_rea_escolares,
                        "escolares": res_escolares,
                        "rea-musica": cve_rea_musica,
                        "rea-ingles": cve_rea_ingles,
                        "rea-verbal": cve_rea_verbal,
                        "rea-ordenar": cve_rea_ordenar,
                        "rea-opinion": cve_rea_opinion,
                        "rea-laboratorio": cve_rea_laboratorio,
                        "rea-dialogo": cve_rea_dialogo,
                        "rea-dificultad": cve_rea_dificultad,
                        "rea-saludable": cve_rea_saludable,
                        "rea-escrito": cve_rea_escrito,
                        "rea-excel": cve_rea_excel,
                        "rea-objetivo": cve_rea_objetivo,
                        "rea-aprender": cve_rea_aprender,
                        "rea-leyes": cve_rea_leyes,
                        "rea-ambiente": cve_rea_ambiente,
                        "musica": res_musica,
                        "ingles": res_ingles,
                        "verbal": res_verbal,
                        "ordenar": res_ordenar,
                        "opinion": res_opinion,
                        "laboratorio": res_laboratorio,
                        "dialogo": res_dialogo,
                        "dificultad": res_dificultad,
                        "saludable": res_saludable,
                        "escrito": res_escrito,
                        "excel": res_excel,
                        "objetivo": res_objetivo,
                        "aprender": res_aprender,
                        "leyes": res_leyes,
                        "ambiente": res_ambiente,
                        "pregunta-21": pregunta21,
                        "max-estudios": res_max_estudios,
                        "pregunta-22" : pregunta22,
                        "rea-golpearan": cve_rea_golpearan,
                        "rea-ignorar": cve_rea_ignorar,
                        "rea-facebook": cve_rea_facebook,
                        "rea-groserias": cve_rea_groserias,
                        "rea-robar": cve_rea_robar,
                        "rea-forzar": cve_rea_forzar,
                        "golpearan": res_golpearan,
                        "ignorar": res_ignorar,
                        "facebook": res_facebook,
                        "groserias": res_groserias,
                        "robar": res_robar,
                        "forzar": res_forzar
                    },
                    success: function (response) {
                        
                        console.log(response);

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
                                msg: "<h4>Respuestas guardadas, contesta el siguiente rubro</h4  >",
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
