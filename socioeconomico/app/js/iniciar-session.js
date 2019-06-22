$(document).ready(function(){

    validarInputs();
    logear();
    privilegios();    
});

function validarInputs(){

    $("#iniciar-sesion").click(function (e) { 
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



function logear(){

    aceptar = $("#aceptado").val();

    $("#iniciar-sesion").click(function (event) { 
        event.preventDefault();
        
        var user_correo = $("#user-correo").val(),
        user_pass = $("#user-pass").val();
        $.ajax({
            type: "POST",
            url: "../php/iniciar-sesion.php",
            data: {
                "correo": user_correo,
                "contrasenia": user_pass
            },
            success: function (response) {
                

              if(response == 'Aceptado'){
                  window.location.href = "../cuestionario/principal.php";
                  
              }

              else if(response == 'Medico'){
                //window.location.href = "../cuestionario/vistas/vista-psicologia-principal.html";
              }

              else if(response == "Alumno"){

                window.location.href = "cuestionario-datos.php";
              }
              
              else{
                $('#user-msj').html("El usuario no exite,verifique los datos");
              }
            }
        });
    });
    if(aceptar == 'Aceptado'){

      $("#clinica").remove();
    }
}

function privilegios(){

  var tipo_persona = $("#cve_tipo_persona").val();
  var sexo_user = $("#sexo_user").val();



  if(sexo_user == "M"){

    $("#antece-gineco").remove();
  }

  if(tipo_persona == "2"){

    $("#tratamiento").remove();
    $("#seguimiento").remove();
  }

  else{
    $("#informe-general").remove();
    $("#adicciones").remove();
    $("#ante-personales").remove();
    $("#heredofamilia").remove();
    $("#enfermedad").remove();
    $("#antece-gineco").remove();

  }

}







