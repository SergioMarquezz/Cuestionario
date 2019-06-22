var cve_persona = $("#cve_aspirante").val();
var cve_seccion = $("#seccion-acedemicas").val();

$(document).ready(function () {
    

    insertarDecisiones();
    salir();
});



function insertarDecisiones(){

    $("#form-academicas").submit(function (e) { 
        e.preventDefault();

        var pregunta33 = $("#cve_pregunta-33").val();
        var res_reac_folletos = $("input[name='folletos']:checked").val();
        var cve_reac_folletos = $("#cve_react-folletos").val();
        var res_reac_paginas = $("input[name='paginas']:checked").val();
        var cve_reac_paginas = $("#cve_react-paginas").val();
        var res_reac_guias = $("input[name='guias']:checked").val();
        var cve_reac_guias = $("#cve_react-guias").val();
        var res_reac_test = $("input[name='test']:checked").val();
        var cve_reac_test = $("#cve_react-test").val();

        var pregunta34 = $("#cve_pregunta-34").val();
        var res_reac_padres = $("input[name='padres']:checked").val();
        var cve_reac_padres = $("#cve_react-padres").val();
        var res_reac_amigos = $("input[name='amigos']:checked").val();
        var cve_reac_amigos = $("#cve_react-amigos").val();
        var res_reac_psicologos = $("input[name='psicologos']:checked").val();
        var cve_reac_psicologos = $("#cve_react-psicologos").val();
        var res_reac_hermanos = $("input[name='hermanos']:checked").val();
        var cve_reac_hermanos = $("#cve_react-hermanos").val();
        var res_reac_profesores = $("input[name='profesores']:checked").val();
        var cve_reac_profesores = $("#cve_react-profesores").val();

        var pregunta35 = $("#cve_pregunta-35").val();
        var res_reac_exanni = $("input[name='exanii']:checked").val();

        var pregunta36 = $("#cve_pregunta-36").val();
        var res_reac_escuela = $("input[name='curso-escuela']:checked").val();
        var cve_reac_escuela = $("#cve_react-curso-escuela").val();
        var res_reac_particular = $("input[name='curso-particular']:checked").val();
        var cve_reac_particular = $("#cve_react-curso-particular").val();
        var res_reac_maestro = $("input[name='curso-maestro']:checked").val();
        var cve_reac_maestro = $("#cve_react-curso-maestro").val();
        
        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>");

        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function(){
                $("#guardar-academicas").hide();
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-academicas.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "seccion-academicas": cve_seccion,
                        "pregunta-33": pregunta33,
                        "rea-folletos": cve_reac_folletos,
                        "rea-paginas": cve_reac_paginas,
                        "rea-guias": cve_reac_guias,
                        "rea-test": cve_reac_test,
                        "folletos": res_reac_folletos,
                        "paginas": res_reac_paginas,
                        "guias": res_reac_guias,
                        "test": res_reac_test,
                        "pregunta-34": pregunta34,
                        "rea-padres": cve_reac_padres,
                        "rea-amigos": cve_reac_amigos,
                        "rea-psicologos": cve_reac_psicologos,
                        "rea-hermanos": cve_reac_hermanos,
                        "rea-profesores": cve_reac_profesores,
                        "padres": res_reac_padres,
                        "amigos": res_reac_amigos,
                        "psicologos": res_reac_psicologos,
                        "hermanos": res_reac_hermanos,
                        "profesores": res_reac_profesores,
                        "pregunta-35": pregunta35,
                        "exanii": res_reac_exanni,
                        "pregunta-36": pregunta36,
                        "rea-curso-escuela": cve_reac_escuela,
                        "rea-curso-particular": cve_reac_particular,
                        "rea-curso-maestro": cve_reac_maestro,
                        "curso-escuela": res_reac_escuela,
                        "curso-particular": res_reac_particular,
                        "curso-maestro": res_reac_maestro
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
