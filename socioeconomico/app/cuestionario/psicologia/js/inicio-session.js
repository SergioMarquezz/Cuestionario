$(document).ready(function () {
    
    mostrarModal();
    validarInputs();
    logeo();
   insertarRegistro();
});


function validarInputs(){

    $("#inicio-sesion").click(function (e) { 
        e.preventDefault();
        var forms = document.getElementsByClassName('validar-form');
    
        var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('click', function(event) {
             event.preventDefault();
    
           if (form.checkValidity() === false) {
             event.preventDefault();
             event.stopPropagation();
    
           }
      
           form.classList.add('was-validated');
         }, false);
       });
        
    });

}


function logeo(){
    $("#inicio-sesion").click(function (e) { 
        e.preventDefault();

        var correo = $("#user-correo").val();
        var pass = $("#user-pass").val();
        
        $.ajax({
            type: "POST",
            url: "php/inicio-session.php",
            data: {
                "correo-psicologa": correo,
                "contrasenia-psicologa": pass
            },
            success: function (response) {
                    console.log(response);
                if(response == "Psicologa"){
                    
                    window.location.href = "vista-psicologia-principal.html";
                }else{
                    $('#user-msj').html("El usuario no exite,verifique los datos");
                }
            }
        });

    });
}


function guardarRegistro(){

        var correo = $("#correo-registro").val();
        var cve_persona = $("#persona-clave").val();
        var pass = $("#password").val();

    $.ajax({
        type: "POST",
        url: "php/registro.php",
        data: {
            "psicologa-correo": correo,
            "psicologa-pass": pass,
            "cve_persona": cve_persona,
            "opcion": "Guardar"
        },
        success: function (response) {
            console.log(response);
            
            if(response == "Registrado"){
                Lobibox.alert("info", //AVAILABLE TYPES: "error", "info", "success", "warning"
                {   
                    buttons:{
                        ok:{
                            'class': 'btn btn-info',
                            text: 'Aceptar',
                        }
                    },
                    title: 'Información',
                    width: 400,
                    msg: "<h4>Su registro se realizo con exito</h4>",
                    closeButton: false,
                    callback: function(){
                        window.location.href = "index.html";
                    
                    }
                });
            }
        }
    });
}

function insertarRegistro(){

    $("#form-registro").submit(function (e) { 
        e.preventDefault();

        var correo = $("#correo-registro").val();

        $.ajax({
            type: "POST",
            url: "php/registro.php",
            data: {
                "psicologa-correo": correo,
                "psicologa-pass": "",
                "cve_persona": "",
                "opcion": "Consulta"
            },
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#persona-clave").val(response.data[0].cve_persona);
                
                if(response.data[0].cve_tipo_persona == 8 && response.data[0].activo == 1){     

                    $(".confirm .title").html("<h5 <i class='fa fa-warning'></i>&nbsp;Guardar Registro</h5>");

                    $.confirm.show({
            
                        "message": "<h4>¿Desea continuar?</h4>",
                        "type":"primary",
                        "yesText":"Si",
                        "noText":"No",
            
                        "yes": function (){
                           
                          guardarRegistro();
                           
                        }
                    })
                }else{
                    Lobibox.alert("error", //AVAILABLE TYPES: "error", "info", "success", "warning"
                    {   
                        buttons:{
                            ok:{
                                text: 'Aceptar',
                            }
                        },
                        title: 'Error de registro',
                        width: 700,
                        msg: "<h4>No es posible realizar el registro, verifique que los datos sean correctos</h4>",
                        closeButton: false,
                        callback: function(){
                           // window.location.href = "principal.php";
                        }
                    });
                }
            }
        });
        
    });

    $("#guardar-registro").click(function (e) { 
        e.preventDefault();

        var correo = $("#correo-registro").val();
        var pass = $("#password").val();

        if(correo == "" || pass == ""){

            $("#error").fadeIn();
            $("#error").text("Faltan campos por llenar");
            $("#error").addClass('error2');

            setTimeout(function(){

                $("#error").fadeOut();
            },5000)
        }

    });
}

function mostrarModal(){

    $("#registro").click(function (e) { 
        e.preventDefault();
        
        $("#modalRegistrar").modal();
    });
}
