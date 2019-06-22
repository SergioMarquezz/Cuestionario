$(document).ready(function(){
  
  formNoPatologicos();
  formsPatologicos();
  modal();
  windows();

  //Esconder el fomulario de patologicos
  $("#patologicos-quirurgicos").slideUp();
  $("#patologicos-alergicos").slideUp();
  $("#patologicos-traumaticos").slideUp();
  $("#patologicos-transfuncionales").slideUp();

  $('#guardar-datos').on('click', function(){ 
    
    
}); 

 
  //$("#guardar").attr("disabled" ,true);
});

//Funcion para aparecer el formulario de patologicos
function formNoPatologicos(){

  $("#guardar-no-patologicos").click(function (e) { 
    e.preventDefault();
    $("#no-patologicos").slideUp();
    $("#patologicos-quirurgicos").slideDown();
    
  });
}

function formsPatologicos(){

  $("#guardar-quirurgicos").click(function (e) { 
    e.preventDefault();
      $("#patologicos-alergicos").slideDown();
      $(this).remove();
      $("#patologicos-quirurgicos").find("input,select").attr("disabled" ,true);
  });

  $("#guardar-alergicos").click(function (e) { 
    e.preventDefault();
      $("#patologicos-traumaticos").slideDown();
      $(this).remove();
  });

  $("#guardar-traumaticos").click(function (e) { 
    e.preventDefault();
    $("#patologicos-transfuncionales").slideDown();
    $(this).remove();
    
  });
}

//Funcion para calcular el tamaño de la ventana
function windows(){

  var ventana_ancho = $(window).width();
  var ventana_alto = $(window).height();
  /*alert(ventana_ancho);
  alert(ventana_alto);*/
  
  if(ventana_ancho <= 750){
    
    
    $("#button-nav").attr("disabled" ,false);
  }
  else{
    $("#button-nav").attr("disabled" ,true);
  }
}



//Funcion para aparecer los modals
function modal(){

  $("#heredofamilia").click(function (event) {
    event.preventDefault(); 
    $('#modal-heredofamilia').modal();
    
  });

  $("#adicciones").click(function (e) { 
    event.preventDefault();
    $('#habitos').modal();
  });

  $("#contacto-urgencia").click(function (e) { 
    event.preventDefault();
    $("#modal-urgencia").modal();

  });
}




