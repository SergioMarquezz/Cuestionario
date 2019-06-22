var select_caminar = $("input[name='caminar']"),
select_escuchar = $("input[name='escuchar']"),
select_ver = $("input[name='ver']"),
select_conducta = $("input[name='conducta']"),
select_depre = $("input[name='depresion']"),
select_bulimia = $("input[name='bulimia']"),
select_estres = $("input[name='estres']"),
select_atencion = $("input[name='atencion']"),
select_agredir = $("input[name='agresividad']"),
select_obesidad = $("input[name='obesidad']"),
select_madre = $("input[name='madre']"),
select_padre = $("input[name='padre']"),
cve_persona = $("#cve_aspirante").val();
cve_seccion = $("#seccion-datos-generales").val();

var caminar_si = $("#reac-caminar-si"),
      caminar_no = $("#reac-caminar-no"),
      conducta_si = $("#reac-conducta-si"),
      conducta_no = $("#reac-conducta-no"),
      depresion_si = $("#reac-depresion-si"),
      depresion_no = $("#reac-depresion-no"),
      bulimia_si = $("#reac-bulimia-si"),
      bulimia_no = $("#reac-bulimia-no"),
      escuchar_si = $("#reac-escuchar-si"),
      escuchar_no = $("#reac-escuchar-no"),
      estres_si = $("#reac-estres-si"),
      estres_no = $("#reac-estres-no"),
      atencion_si = $("#reac-atencion-si"),
      atencion_no = $("#reac-atencion-no"),
      ver_si = $("#reac-ver-si"),
      ver_no = $("#reac-ver-no"),
      agredir_si = $("#reac-agresividad-si"),
      agredir_no = $("#reac-agresividad-no"),
      obesidad_si =$("#reac-obesidad-si"),
      obesidad_no =$("#reac-obesidad-no"),
      madre_si = $("#reac-madre-si"),
      madre_no = $("#reac-madre-no"),
      madre_nose = $("#reac-madre-nose"),
      padre_si = $("#reac-padre-si"),
      padre_no = $("#reac-padre-no"),
      padre_nose = $("#reac-padre-nose");

$(document).ready(function(){

  
   insertarDatosGenerales();
   salir();
   verLenguas();
      
    $("#select-lenguas-madre").hide();
    $("#select-lenguas-padre").hide();
   
});




function insertarDatosGenerales(){


    $("#form-datos-generales").submit(function (event) { 
       event.preventDefault();


    var cve_pregunta = $("#cve_pregunta-1").val(),
       cve_pregunta2 = $("#cve_pregunta-2").val(),
       cve_seccion = $("#seccion-datos-generales").val(),

       res_reac_caminar = $("input[name='caminar']:checked").val(),
       cve_reac_caminar = $("#reac-caminar").val(),

       cve_reac_escuchar = $("#reac-escuchar").val(),
       res_reac_escuchar = $("input[name='escuchar']:checked").val(),

       cve_reac_ver = $("#reac-ver").val(),
       res_reac_ver = $("input[name='ver']:checked").val(),

       cve_reac_conducta = $("#reac-conducta").val(),
       res_reac_conducta = $("input[name='conducta']:checked").val(),

       cve_reac_estres = $("#reac-estres").val(),
       res_reac_estres = $("input[name='estres']:checked").val(),

       cve_reac_agredir = $("#reac-agredir").val(),
       res_reac_agredir = $("input[name='agresividad']:checked").val(),

       cve_reac_depresion = $("#reac-depre").val(),
       res_reac_depresion = $("input[name='depresion']:checked").val(),

       cve_reac_atencion = $("#reac-atencion").val(),
       res_reac_atencion = $("input[name='atencion']:checked").val(),

       cve_reac_obesidad = $("#reac-obesidad").val(),
       res_reac_obesidad = $("input[name='obesidad']:checked").val(),

       cve_reac_bulimia = $("#reac-bulimia").val(),
       res_reac_bulimia = $("input[name='bulimia']:checked").val(),

       cve_reac_madre = $("#reac-madre").val(),
       res_reac_madre = $("input[name='madre']:checked").val(),

       cve_reac_padre = $("#reac-padre").val(),
       res_reac_padre = $("input[name='padre']:checked").val();

       

       if($("#select-lenguas-madre option:selected").val() == 0 && $("#select-lenguas-madre").is(':visible') && 
       $("#select-lenguas-padre option:selected").val() == 0 && $("#select-lenguas-padre").is(':visible')){

        $("#select-lenguas-padre").prop('required',true);
        $("#select-lenguas-madre").prop('required',true);
        $("#select-lenguas-madre").addClass('error');
        $("#select-lenguas-padre").addClass('error');
       }

       else if($("#select-lenguas-madre option:selected").val() != 0 && $("#select-lenguas-madre").is(':visible') &&
       $("#select-lenguas-padre option:selected").val() != 0 && $("#select-lenguas-padre").is(':visible')){

            var lengua_madre = $("#select-lenguas-madre").val();
            var lengua_padre = $("#select-lenguas-padre").val();

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>")
        
        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function (){
                $("#form-datos-generales").find("input").attr("disabled" ,true);
                $("#guardar-datos-general").hide();

             {
                    
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-generales.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "pregunta-1": cve_pregunta,
                        "seccion-datos": cve_seccion,
                        "caminar": res_reac_caminar,
                        "rea-caminar": cve_reac_caminar,
                        "rea-escuchar": cve_reac_escuchar,
                        "escuchar": res_reac_escuchar,
                        "rea-ver": cve_reac_ver,
                        "ver" : res_reac_ver,
                        "rea-conducta": cve_reac_conducta,
                        "conducta": res_reac_conducta,
                        "rea-estres": cve_reac_estres,
                        "estres": res_reac_estres,
                        "rea-agresividad": cve_reac_agredir,
                        "agresividad": res_reac_agredir,
                        "rea-depresion":cve_reac_depresion,
                        "depresion": res_reac_depresion,
                        "rea-atencion": cve_reac_atencion,
                        "atencion": res_reac_atencion,
                        "rea-obesidad": cve_reac_obesidad,
                        "obesidad": res_reac_obesidad,
                        "rea-bulimia": cve_reac_bulimia,
                        "bulimia": res_reac_bulimia,
                        "pregunta-2": cve_pregunta2,
                        "rea-madre": cve_reac_madre,
                        "madre": "",
                        "rea-padre": cve_reac_padre,
                        "padre": "",
                        "opcion": "lenguas",
                        "lenguas-madre": lengua_madre,
                        "lenguas-padre": lengua_padre
                        },
                        
                        success: function (response) {

                            console.log(response);
                         
                            if(response == "Guardado"){

                                
                                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                                {   
                                    buttons:{
                                        ok:{
                                            'class': 'btn btn-info',
                                            text: 'Aceptar',
                                        }
                                    },
                                    title: 'Información',
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
                    
                },
        })

       }

      else if($("#select-lenguas-madre option:selected").val() == 0 && $("#select-lenguas-madre").is(':visible')){

        $("#select-lenguas-madre").addClass('error');
        $("#select-lenguas-madre").prop('required',true);
       }

       else if($("#select-lenguas-madre option:selected").val() != 0 && $("#select-lenguas-madre").is(':visible')){
           
        var lengua_madre = $("#select-lenguas-madre").val();
    

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>")
        
        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function (){
                $("#form-datos-generales").find("input").attr("disabled" ,true);
                $("#guardar-datos-general").hide();

             {
                    
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-generales.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "pregunta-1": cve_pregunta,
                        "seccion-datos": cve_seccion,
                        "caminar": res_reac_caminar,
                        "rea-caminar": cve_reac_caminar,
                        "rea-escuchar": cve_reac_escuchar,
                        "escuchar": res_reac_escuchar,
                        "rea-ver": cve_reac_ver,
                        "ver" : res_reac_ver,
                        "rea-conducta": cve_reac_conducta,
                        "conducta": res_reac_conducta,
                        "rea-estres": cve_reac_estres,
                        "estres": res_reac_estres,
                        "rea-agresividad": cve_reac_agredir,
                        "agresividad": res_reac_agredir,
                        "rea-depresion":cve_reac_depresion,
                        "depresion": res_reac_depresion,
                        "rea-atencion": cve_reac_atencion,
                        "atencion": res_reac_atencion,
                        "rea-obesidad": cve_reac_obesidad,
                        "obesidad": res_reac_obesidad,
                        "rea-bulimia": cve_reac_bulimia,
                        "bulimia": res_reac_bulimia,
                        "pregunta-2": cve_pregunta2,
                        "rea-madre": cve_reac_madre,
                        "madre": "",
                        "rea-padre": cve_reac_padre,
                        "padre": res_reac_padre,
                        "opcion": "lengua madre",
                        "lenguas-madre": lengua_madre,
                        "lenguas-padre": ""
                        },
                        
                        success: function (response) {

                            console.log(response);
                         
                            if(response == "Guardado"){

                                
                                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                                {   
                                    buttons:{
                                        ok:{
                                            'class': 'btn btn-info',
                                            text: 'Aceptar',
                                        }
                                    },
                                    title: 'Información',
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
                    
                },
        })
            
       }
       else if($("#select-lenguas-padre option:selected").val() == 0 && $("#select-lenguas-padre").is(':visible')){

        $("#select-lenguas-padre").addClass('error');
        $("#select-lenguas-padre").prop('required',true);
       }
       else if($("#select-lenguas-padre option:selected").val() != 0 && $("#select-lenguas-padre").is(':visible')){

            var lengua_padre = $("#select-lenguas-padre").val();

            $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>")
        
            $.confirm.show({
    
                "message": "Después de enviar no podrá contestar de nuevo",
                "type":"warning",
                "yesText":"Enviar",
                "noText":"Cancelar",
    
                "yes": function (){
                    $("#form-datos-generales").find("input").attr("disabled" ,true);
                    $("#guardar-datos-general").hide();
    
                 {
                        
                    $.ajax({
                        type: "POST",
                        url: "../php/preguntas-generales.php",
                        data: {
                            "clave_aspi": cve_persona,
                            "pregunta-1": cve_pregunta,
                            "seccion-datos": cve_seccion,
                            "caminar": res_reac_caminar,
                            "rea-caminar": cve_reac_caminar,
                            "rea-escuchar": cve_reac_escuchar,
                            "escuchar": res_reac_escuchar,
                            "rea-ver": cve_reac_ver,
                            "ver" : res_reac_ver,
                            "rea-conducta": cve_reac_conducta,
                            "conducta": res_reac_conducta,
                            "rea-estres": cve_reac_estres,
                            "estres": res_reac_estres,
                            "rea-agresividad": cve_reac_agredir,
                            "agresividad": res_reac_agredir,
                            "rea-depresion":cve_reac_depresion,
                            "depresion": res_reac_depresion,
                            "rea-atencion": cve_reac_atencion,
                            "atencion": res_reac_atencion,
                            "rea-obesidad": cve_reac_obesidad,
                            "obesidad": res_reac_obesidad,
                            "rea-bulimia": cve_reac_bulimia,
                            "bulimia": res_reac_bulimia,
                            "pregunta-2": cve_pregunta2,
                            "rea-madre": cve_reac_madre,
                            "madre": res_reac_madre,
                            "rea-padre": cve_reac_padre,
                            "padre": "",
                            "opcion": "lengua padre",
                            "lenguas-madre": "",
                            "lenguas-padre": lengua_padre
                            },
                            
                            success: function (response) {
    
                                console.log(response);
                             
                                if(response == "Guardado"){
    
                                    
                                    Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                                    {   
                                        buttons:{
                                            ok:{
                                                'class': 'btn btn-info',
                                                text: 'Aceptar',
                                            }
                                        },
                                        title: 'Información',
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
                        
                    },
            })
            
       }

       else{

        $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Enviar respuestas</h5>")
        
        $.confirm.show({

            "message": "Después de enviar no podrá contestar de nuevo",
            "type":"warning",
            "yesText":"Enviar",
            "noText":"Cancelar",

            "yes": function (){
                $("#form-datos-generales").find("input").attr("disabled" ,true);
                $("#guardar-datos-general").hide();

             {
                    
                $.ajax({
                    type: "POST",
                    url: "../php/preguntas-generales.php",
                    data: {
                        "clave_aspi": cve_persona,
                        "pregunta-1": cve_pregunta,
                        "seccion-datos": cve_seccion,
                        "caminar": res_reac_caminar,
                        "rea-caminar": cve_reac_caminar,
                        "rea-escuchar": cve_reac_escuchar,
                        "escuchar": res_reac_escuchar,
                        "rea-ver": cve_reac_ver,
                        "ver" : res_reac_ver,
                        "rea-conducta": cve_reac_conducta,
                        "conducta": res_reac_conducta,
                        "rea-estres": cve_reac_estres,
                        "estres": res_reac_estres,
                        "rea-agresividad": cve_reac_agredir,
                        "agresividad": res_reac_agredir,
                        "rea-depresion":cve_reac_depresion,
                        "depresion": res_reac_depresion,
                        "rea-atencion": cve_reac_atencion,
                        "atencion": res_reac_atencion,
                        "rea-obesidad": cve_reac_obesidad,
                        "obesidad": res_reac_obesidad,
                        "rea-bulimia": cve_reac_bulimia,
                        "bulimia": res_reac_bulimia,
                        "pregunta-2": cve_pregunta2,
                        "rea-madre": cve_reac_madre,
                        "madre": res_reac_madre,
                        "rea-padre": cve_reac_padre,
                        "padre": res_reac_padre,
                        "opcion": "sin lengua",
                        "lenguas-madre": "",
                        "lenguas-padre": ""
                        },
                        
                        success: function (response) {

                            console.log(response);
                         
                            if(response == "Guardado"){

                                
                                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                                {   
                                    buttons:{
                                        ok:{
                                            'class': 'btn btn-info',
                                            text: 'Aceptar',
                                        }
                                    },
                                    title: 'Información',
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
                    
                },
        })

       }
                    
    });
}


function verLenguas(){


    $("#select-lenguas-madre").change(function (e) { 
        e.preventDefault();
        
        $(this).removeClass('error');
    });

    
    $("#select-lenguas-padre").change(function (e) { 
        e.preventDefault();
        
        $(this).removeClass('error');
    });

    $("#reac-madre-si").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-madre").show();
            
        }
  });

    $("#reac-madre-no").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-madre").hide();
            $("#select-lenguas-madre").prop('required',false);
            $("#select-lenguas-madre").prop('selectedIndex', 0);
        }
  });

     $("#reac-madre-nose").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-madre").hide();
            $("#select-lenguas-madre").prop('required',false);
            $("#select-lenguas-madre").prop('selectedIndex', 0);
        }
  });

      $("#reac-padre-si").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-padre").show();
        }
  });

    $("#reac-padre-no").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-padre").hide();
            $("#select-lenguas-padre").prop('required',false);
            $("#select-lenguas-padre").prop('selectedIndex', 0);
        }
  });

     $("#reac-padre-nose").change(function() {
    
        if($(this).is(":checked")) {
            $("#select-lenguas-padre").hide();
            $("#select-lenguas-padre").prop('required',false);
            $("#select-lenguas-padre").prop('selectedIndex', 0);
        }
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



