var cve_persona = $("#cve_aspirante").val();
var cve_seccion = $("#seccion-trayectoria").val();
var cve_pregunta3 = $("#cve_pregunta-3").val();
var cve_pregunta4 = $("#cve_pregunta-4").val();
var cve_pregunta5 = $("#cve_pregunta-5").val();
var cve_pregunta6 = $("#cve_pregunta-6").val();
var cve_pregunta7 = $("#cve_pregunta-7").val();
var cve_pregunta8 = $("#cve_pregunta-8").val();
var cve_pregunta9 = $("#cve_pregunta-9").val();
var cve_pregunta10 = $("#cve_pregunta-10").val();

var concluir = $("#respuesta-concluir"),
    concluir_no = $("#respuesta-no-concluir"),
    publico = $("#respuesta-publico"),
    privado = $("#respuesta-privado"),
    general = $("#general"),
    tecnologico = $("#tecnologico"),
    tecnico = $("#tecnico"),
    intercultural = $("#intercultural"),
    internacional = $("#internacional"),
    telebachiller = $("#telebachiller"),
    escolarizado = $("#escolarizado"),
    abierto = $("#abierto"),
    distancia = $("#distancia"),
    matutino = $("#matutino"),
    vespertino = $("#vespertino"),
    nocturno = $("#nocturno"),
    mixto = $("#mixto"),
    no_aplica = $("#no-aplica"),
    beca_si = $("#becas-si"),
    beca_no = $("#becas-no");
    

$(document).ready(function(){

    
    $("input[name='medio-superior']").change(function (e) { 
        e.preventDefault();
        
        $("#months").attr('readonly', true);
       
    });
    
    $("#months").change (function (e) { 
        e.preventDefault();
        
        $("input[name='medio-superior']").attr("disabled", true);
       // $(this).css("background-color", "#afe2dd");
        $(this).removeClass('error');
    });
    
    $("#select-estados").change(function (e) { 
        e.preventDefault();
    
       // $(this).css("background-color", "#afe2dd");
        $(this).removeClass('error');
    });
    
    $("#promedio").focus(function (e) { 
        e.preventDefault();
        
        $(this).removeClass('error');
    });

  /*  $("select[name=estados]").change(function(){
        $("#estado").val($(this).val());
    });*/

    validarForm();
    //revisarForm();

    salir();
});



function insertarTrayectoria(){

    
    var inputs_medio_superior =  $("input[name='medio-superior']:checked").val();
    var select_input_concluir = $("#respuesta-concluir");
    var select_input_concluir_no = $("#respuesta-no-concluir");
    var superior = "superior";
    var meses = "meses";

    var cve_estado = $("select[name=estados]").val();


    if(select_input_concluir.is(':checked')){

        $("#months").attr('disabled', true);
        $.ajax({
            type: "POST",
            url: "../php/preguntas-trayectoria.php",
            data:{
                "opcion": superior,
                "clave_aspi": cve_persona,
                "seccion-trayectoria": cve_seccion,
                "pregunta-4": cve_pregunta4,
                "medio-superior": inputs_medio_superior,
                "meses": "",
                "pregunta-3": "",
                "estados": "",
                "pregunta-5": "",
                "regimen": "",
                "pregunta-6": "",
                "pregunta-7": "",
                "pregunta-8": "",
                "pregunta-9": "",
                "pregunta-10": "",
                "ultimo-anio": "",
                "programa-estudia": "",
                "turno": "",
                "promedio-final": "",
                "beca": ""
            },
       
            success: function (response) {
                
            }
        });
    }

    else if(select_input_concluir_no.is(':checked')){

      
        $.ajax({
            type: "POST",
            url: "../php/preguntas-trayectoria.php",
            data:{
                "opcion": superior,
                "clave_aspi": cve_persona,
                "seccion-trayectoria": cve_seccion,
                "pregunta-4": cve_pregunta4,
                "medio-superior": inputs_medio_superior,
                "meses": "",
                "pregunta-3": "",
                "estados": "",
                "pregunta-5": "",
                "regimen": "",
                "pregunta-6": "",
                "pregunta-7": "",
                "pregunta-8": "",
                "pregunta-9": "",
                "pregunta-10": "",
                "ultimo-anio": "",
                "programa-estudia": "",
                "turno": "",
                "promedio-final": "",
                "beca": ""
            },
       
            success: function (response) {
                

            }
        });
    }

    
    if(meses == "meses" ){

        
        var mes_anio = $("#months").val();
        $.ajax({
            type: "POST",
            url: "../php/preguntas-trayectoria.php",
            data:{
                "opcion": meses,
                "clave_aspi": cve_persona,
                "seccion-trayectoria": cve_seccion,
                "pregunta-4": cve_pregunta4,
                "meses": mes_anio,
                "medio-superior": "",
                "pregunta-3": "",
                "estados": "",
                "pregunta-5": "",
                "regimen": "",
                "pregunta-6": "",
                "pregunta-7": "",
                "pregunta-8": "",
                "pregunta-9": "",
                "pregunta-10": "",
                "ultimo-anio": "",
                "programa-estudia": "",
                "turno": "",
                "promedio-final": "",
                "beca": ""
            },
       
            success: function (response) {
                
            
                
            }
        });
        
    }

    var inputs_regimen =  $("input[name='regimen']:checked").val();
    var inputs_ultimo_anio =  $("input[name='ultimo-anio']:checked").val();
    var inputs_programa =  $("input[name='programa-estudia']:checked").val();
    var inputs_turno =  $("input[name='turno']:checked").val();
    var inputs_promedio =  $("#promedio").val();
    var inputs_beca =  $("input[name='beca']:checked").val();


    $.ajax({
        type: "POST",
        url: "../php/preguntas-trayectoria.php",
        data: {

                "opcion": "",
                "clave_aspi": cve_persona,
                "seccion-trayectoria": cve_seccion,
                "pregunta-4": "",
                "meses": "",
                "medio-superior": "",
                "pregunta-3": cve_pregunta3,
                "estados": cve_estado,
                "pregunta-5": cve_pregunta5,
                "regimen": inputs_regimen,
                "pregunta-6": cve_pregunta6,
                "pregunta-7": cve_pregunta7,
                "pregunta-8": cve_pregunta8,
                "pregunta-9": cve_pregunta9,
                "pregunta-10": cve_pregunta10,
                "ultimo-anio": inputs_ultimo_anio,
                "programa-estudia": inputs_programa,
                "turno": inputs_turno,
                "promedio-final": inputs_promedio,
                "beca": inputs_beca
        },
    
        success: function (response) {
         
            
            
        }
    });
  

}

function revisarForm(){

    $.ajax({
        type: "POST",
        url: "../php/vista-datos-trayectoria.php",
        data: {
            "opcion" : "trayectoria",
            "pregunta-9": "",
            "clave_aspi": cve_persona,
            "seccion-trayectoria": cve_seccion,
            "pregunta-4" : ""
        },
        dataType: "json",
        success: function (response) {
            getDatosTrayectoria(response);
         
         
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/vista-datos-trayectoria.php",
        data: {
            "opcion" : "meses-consulta",
            "pregunta-9": "",
            "clave_aspi": cve_persona,
            "seccion-trayectoria": cve_seccion,
            "pregunta-4": cve_pregunta4
        },
        dataType: "json",
        success: function (response) {
            
            $("#months").val(response[0].meses);
       
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/vista-datos-trayectoria.php",
        data: {
            "opcion" : "estados",
            "pregunta-9": "",
            "clave_aspi": cve_persona,
            "seccion-trayectoria": cve_seccion,
            "pregunta-4": ""
        },
        dataType: "json",
        success: function (response) {
           

            $("#select-estados option:selected").text(response[0].estados);
        }
    });

    $.ajax({
        type: "POST",
        url: "../php/vista-datos-trayectoria.php",
        data: {
            "opcion" : "promedio",
            "pregunta-9": cve_pregunta9,
            "clave_aspi": cve_persona,
            "seccion-trayectoria": cve_seccion,
            "pregunta-4": ""
        },
        dataType: "json",
        success: function (response) {
            
            $("#promedio").val(response[0].promedio);
           
        }
    });

   

}

function revisarFormRadios(response){

    if(concluir.is(':checked') || concluir_no.is(':checked')){

        if(response[0].respuesta == "He concuido el nivel medio superior"){

            concluir.attr('checked','checked');
        }
        else if(response[0].respuesta == "No he concluido el nivel medio superior"){
            concluir_no.attr('checked','checked');
        }
    
        if(response[1].respuesta == "Privado"){
    
            privado.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Público"){
            publico.attr('checked','checked');
        }
    
        if(response[2].respuesta == "Bachillerato general"){
    
            general.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Bachillerato tecnológico"){
    
            tecnologico.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Profesional técnico"){
    
            tecnico.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Bachillerato intercultural (bilingüe indígena)"){
    
            intercultural.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Bachillerato internacional"){
    
            internacional.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Telebachillerato"){
    
            telebachiller.attr('checked','checked');
        }
    
        if(response[3].respuesta == "Escolarizado"){
    
            escolarizado.attr('checked','checked');
        }
    
        else if(response[3].respuesta == "Abierto"){
    
            abierto.attr('checked','checked');
        }
    
        else if(response[3].respuesta == "A distancia"){
    
            distancia.attr('checked','checked');
        }
    
        if(response[4].respuesta == "Matutino"){
    
            matutino.attr('checked','checked');
        }
    
        else if(response[4].respuesta == "Vespertino"){
    
            vespertino.attr('checked','checked');
        }
    
        else if(response[4].respuesta == "Nocturno"){
    
            nocturno.attr('checked','checked');
        }
    
        else if(response[4].respuesta == "Mixto"){
    
            mixto.attr('checked','checked');
        }
        
        else if(response[4].respuesta == "No aplica (Acuerdo 286, para adultos o INEA, bachillerato abierto)"){
    
            no_aplica.attr('checked','checked');
        }
    
        if(response[5].respuesta == "Si"){
    
            beca_si.attr('checked','checked');
        }
        else if(response[5].respuesta == "No"){
            beca_no.attr('checked','checked');
        }
    
        return true;

    }else{

        if(response[0].respuesta == "Privado"){

            privado.attr('checked','checked');
        }
    
        else if(response[0].respuesta == "Público"){
            publico.attr('checked','checked');
        }
    
        if(response[1].respuesta == "Bachillerato general"){
    
            general.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Bachillerato tecnológico"){
    
            tecnologico.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Profesional técnico"){
    
            tecnico.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Bachillerato intercultural (bilingüe indígena)"){
    
            intercultural.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Bachillerato internacional"){
    
            internacional.attr('checked','checked');
        }
    
        else if(response[1].respuesta == "Telebachillerato"){
    
            telebachiller.attr('checked','checked');
        }
    
        if(response[2].respuesta == "Escolarizado"){
    
            escolarizado.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "Abierto"){
    
            abierto.attr('checked','checked');
        }
    
        else if(response[2].respuesta == "A distancia"){
    
            distancia.attr('checked','checked');
        }
    
        if(response[3].respuesta == "Matutino"){
    
            matutino.attr('checked','checked');
        }
    
        else if(response[3].respuesta == "Vespertino"){
    
            vespertino.attr('checked','checked');
        }
    
        else if(response[3].respuesta == "Nocturno"){
    
            nocturno.attr('checked','checked');
        }
    
        else if(response[3].respuesta == "Mixto"){
    
            mixto.attr('checked','checked');
        }
        
        else if(response[3].respuesta == "No aplica (Acuerdo 286, para adultos o INEA, bachillerato abierto)"){
    
            no_aplica.attr('checked','checked');
        }
    
        if(response[4].respuesta == "Si"){
    
            beca_si.attr('checked','checked');
        }
        else if(response[4].respuesta == "No"){
            beca_no.attr('checked','checked');
        }
    
        return true;
    }

    
}


function getDatosTrayectoria(response){

    if(revisarFormRadios(response)){

        $("#form-trayectoria").find("input,select").attr("disabled" ,true);
        $("#guardar-trayectoria").hide();

        Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
        {   
            buttons:{
                ok:{
                    class: 'btn btn-info',
                    text: 'Aceptar',
                }
            },
            title: 'Información',
            width: 700,
            msg: "<h4>Ya has terminado este rubro por favor contesta el siguiente</h4>"
        });

    }
}

function validarForm(){

    
var select_regimen = $("input[name='regimen']"),
select_ultimo_anio = $("input[name='ultimo-anio']"),
select_programa = $("input[name='programa-estudia']"),
select_turno = $("input[name='turno']"),
select_beca = $("input[name='beca']");


$("#form-trayectoria").submit(function (e) { 
   var estados = $("#select-estados").prop('selectedIndex');
    e.preventDefault();
    if(estados != 0 && select_regimen.is(':checked') && select_ultimo_anio.is(":checked") && select_programa.is(":checked")
        && select_turno.is(":checked") && select_beca.is(":checked") && validacionInput()){
            
            $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Confirmación de guardado</h5>")


            $.confirm.show({

                "message": "Después de enviar no podrá contestar de nuevo",
                "type":"warning",
                "yesText":"Enviar",
                "noText":"Cancelar",

                "yes":function(){

                    insertarTrayectoria();
                    $("#form-trayectoria").find("input,select").attr("disabled" ,true);
                    $("#guardar-trayectoria").hide();

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
            })
            
    }
    else{

        $("#msj-error").html("<span class='text-center text-danger'>Faltan preguntas por contestar</span>");

        if($("#msj-error").is(':visible')){
               
            setTimeout(function() {
                $("#msj-error").slideUp(1500);
            },10000);
           }
           
    }
    
});
}

function validacionInput(){

    var promedio = $("#promedio").val();
    var monts = $("#months").val();
    var medio_superior = $("input[name='medio-superior']");

    
    if(monts == "" && promedio == ""){

        $("#months").addClass('error');
        $("#promedio").addClass('error');

        return false;
    }
    else if(monts == "" && medio_superior.is(":checked")){

        return true;
    }
    
    else if(promedio == ""){
        
        $("#promedio").addClass('error');
        return false;
    }

    else if(medio_superior.is(':checked')){
        
        return true;

    }

    else if(monts != "" && promedio != ""){

        return true;
    }

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