<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia Clinica|UTEC</title>

    <link rel="icon" href="img/logoHalcon.jpg">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/mdb.css" />
   <!-- <link rel="stylesheet" href="css/materialize.css">-->
    <link rel="stylesheet" href="icons.css"/>
    <link rel="stylesheet" href="css/styles.css" />

</head>
<body background="img/logo-utec-nuevo.png">

    <!--Nav-->
<header>
    <nav class="navbar navbar-dark cyan darken-3 ">
        <span class="white-text titulo">SISTEMA DE GESTIÓN ESCOLAR</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"  aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>                  
        </button>          	
    </nav>
    <div class="pos-f-t ">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="cyan darken-4 p-4">
            
                
            </div>
        </div>
    </div>
</header>

<!--Contenedor de los formularios-->
<div class="d-flex" id="contenedor">

    <?php
        include("includes/barra-lateral-clinica.php");
    ?>


    <div id="page-content-wrapper">
        <div class="container-fluid">
            <!--Formulario antecendentes patologicos-->
            <div class="row pt-4" id="no-patologicos">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES PERSONALES NO PATOLÓGICOS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form class="">
                                    <div class="form-row ">
                                        <div class="col-lg-4">
                                            <label for="">Tu casa es:</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="casa-propia" name="casa">
                                                <label class="custom-control-label grey-text" for="casa-propia">Propia</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="casa-rentada" name="casa">
                                                <label class="custom-control-label grey-text" for="casa-rentada">Rentada</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="casa-prestada" name="casa">
                                                <label class="custom-control-label grey-text" for="casa-prestada">Prestada</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Servicios con los que cuentas en tu casa:</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="agua" name="servicios">
                                                <label class="custom-control-label grey-text" for="agua">Agua</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="luz" name="servicios">
                                                <label class="custom-control-label grey-text" for="luz">Luz</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="drenaje" name="servicios">
                                                <label class="custom-control-label grey-text" for="drenaje">Drenaje</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="drenaje" name="servicios">
                                                <label class="custom-control-label grey-text" for="drenaje">Otros servicios</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="otro-servicio" type="text" name="otros-servicios" class="validate form-control">
                                                <label for="otro-servicio">Especifica</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">El techo de tu casa esta construido de:</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="losa" name="techo">
                                                <label class="custom-control-label grey-text" for="losa">Losa</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="cemento" name="techo">
                                                <label class="custom-control-label grey-text" for="cemento">Cemento</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="lamina" name="techo">
                                                <label class="custom-control-label grey-text" for="lamina">Lámina</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="teja" name="techo">
                                                <label class="custom-control-label grey-text" for="teja">Teja</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3">
                                        <div class="col-lg-4">
                                            <label for="">Las paredes de tu casa estan construidas de:</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="losa" name="techo">
                                                <label class="custom-control-label grey-text" for="losa">Piedra</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="cemento" name="techo">
                                                <label class="custom-control-label grey-text" for="cemento">Block</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="lamina" name="techo">
                                                <label class="custom-control-label grey-text" for="lamina">Adobe</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="madera" name="techo">
                                                <label class="custom-control-label grey-text" for="madera">Tabla roca</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">El piso de tu casa esta construido de:</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="losa-piso" name="piso">
                                                <label class="custom-control-label grey-text" for="losa-piso">Losa</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="laminado" name="piso">
                                                <label class="custom-control-label grey-text" for="laminado">Laminado</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="cemento-piso" name="piso">
                                                <label class="custom-control-label grey-text" for="cemento-piso">Cemento</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="Tierra" name="piso">
                                                <label class="custom-control-label grey-text" for="Tierra">Tierra</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-row">
                                                <div class="col-lg-12">
                                                    <label for="">¿En tu casa habitan aniamales?</label>
                                                </div>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="animales-si" name="animales">
                                                <label class="custom-control-label grey-text" for="animales-si">Si</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="animales-no" name="animales">
                                                <label class="custom-control-label grey-text" for="animales-no">No</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="especifica-animal" type="text" name="especifica-animal" class="validate form-control">
                                                <label for="especifica-animal">Especifica</label>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container mt-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default" id="guardar-no-patologicos"><i class="fa fa-check"> Guardar</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!--Formulario antecendentes quirurgicos-->
            <div class="row" id="patologicos-quirurgicos">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES PERSONALES PATOLÓGICOS<br>QUIRÚRGICOS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form class="" id="form-quirurgicos">
                                    <div class="form-row ">
                                        <div class="col-lg-4">
                                            <label for="">¿Te han operado alguna vez?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="operacion-si" name="operacion">
                                                        <label class="custom-control-label grey-text" for="operacion-si">Si</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                <input id="cirugia" type="text" name="tipo-cirugia" class="validate form-control">
                                                <label for="cirugia">Tipo de cirugía realizada</label>
                                            </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="operacion-no" name="operacion">
                                                        <label class="custom-control-label grey-text" for="operacion-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Fecha en la que te realizaron la cirugía</label>
                                            <div class="md-form form-group">
                                                <input id="fecha-cirugia" type="date" name="date-cirugia" class="validate form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Institución en que se realizo la cirugía</label>
                                            <select class="browser-default custom-select mt-4">
                                                <option selected disabled>Selecciona</option>
                                                <option value="#">IMSS</option>
                                                <option value="#">ISSTE</option>
                                                <option value="#">SEGURO POPULAR</option>
                                                <option value="#">OTROS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container mt-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default" id="guardar-quirurgicos"><i class="fa fa-check"> Guardar</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Formulario antecendentes alergicos-->
            <div class="row container" id="patologicos-alergicos">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES PERSONALES PATOLÓGICOS<br>ALÉRGICOS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form class="">
                                    <div class="form-row justify-content-center">
                                        <div class="col-lg-6">
                                            <label for="">¿Eres alérgico a algún medicamento?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="alergico-si" name="alergico">
                                                        <label class="custom-control-label grey-text" for="alergico-si">Si</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                        <input id="nombre-medicamento" type="text" name="name-medicamento" class="validate form-control">
                                                        <label for="nombre-medicamento">Nombre del medicamento</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="alergico-no" name="alergico">
                                                        <label class="custom-control-label grey-text" for="alergico-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container mt-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default" id="guardar-alergicos"><i class="fa fa-check"> Guardar</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
                 <!--Formulario antecendentes traumaticos-->
                 <div class="row" id="patologicos-traumaticos">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES PERSONALES PATOLÓGICOS<br>TRAUMÁTICOS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form class="">
                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <label for="">¿Has sufrido algún accidente que ameritó hospitalización?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="hospitalizar-si" name="hospitalizar">
                                                        <label class="custom-control-label grey-text" for="hospitalizar-si">Si</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="hospitalizar-no" name="hospitalizar">
                                                        <label class="custom-control-label grey-text" for="hospitalizar-no">No</label>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="form-row mt-3">
                                                <label for="">¿Tienes fracturas o luxaciones previas?</label>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="fracturas-si" name="fracturas">
                                                        <label class="custom-control-label grey-text" for="fracturas-si">Si</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="fracturas-no" name="fracturas">
                                                        <label class="custom-control-label grey-text" for="fracturas-no">No</label>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">¿Tienes algúna secuela por ese accidente?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="secuela-si" name="secuela">
                                                        <label class="custom-control-label grey-text" for="secuela-si">Si</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <textarea type="text" id="secuelas-describe" name="secuela-describe" class="md-textarea form-control" rows="2"></textarea>
                                                        <label for="secuelas-describe">Describela</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="secuela-no" name="secuela">
                                                        <label class="custom-control-label grey-text" for="secuela-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                             <label for="">¿Hubo algúna complicación?</label>
                                             <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="complicacion-si" name="complicacion">
                                                        <label class="custom-control-label grey-text" for="complicacion-si">Si</label>
                                                    </div>
                                                    <div class="md-form">
                                                        <textarea type="text" id="complicacion-describe" name="complicacion-describe" class="md-textarea form-control mt-2" rows="2"></textarea>
                                                        <label for="complicacion-describe">Describela</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="complicacion-no" name="complicacion">
                                                        <label class="custom-control-label grey-text" for="complicacion-no">No</label>
                                                    </div>
                                                </div>

                                             </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container mt-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default" id="guardar-traumaticos"><i class="fa fa-check"> Guardar</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
                 <!--Formulario antecendentes transfuncionales-->
            <div class="row" id="patologicos-transfuncionales">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES PERSONALES PATOLÓGICOS<br>TRANSFUNCIONALES</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form class="">
                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <label for="">¿Te han realizado alguna transfusión sanguínea?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="sanguinea-si" name="sanguinea">
                                                        <label class="custom-control-label grey-text" for="sanguinea-si">Si</label>
                                                    </div> 
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="sanguinea-no" name="sanguinea">
                                                        <label class="custom-control-label grey-text" for="sanguinea-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">Fecha en la que te hicieron la transfusión</label>
                                            <div class="form-row">
                                                <div class="col-lg-12">
                                                    <div class="md-form form-group">
                                                        <input id="fecha-cirugia" type="date" name="date-cirugia" class="validate form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                             <label for="" class="mr-4">Motivo de la transfusión</label>
                                             <div class="md-form form-group">
                                                <input id="motivo-transfunsion" type="text" name="motivo-transfusion" class="validate form-control">
                                                <label for="motivo-transfunsion">Describelo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container mt-4">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default" id="guardar-traumaticos"><i class="fa fa-check"> Guardar</i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
</div>

 
  <!-- Modal Heredofamiliares-->
<div class="modal fade" id="modal-heredofamilia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <div class="modal-dialog modal-notify modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Antecedentes Heredofamilares</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <small class="grey-text text-light-4">Selecciona todas las enfermedades que padezcan o hayan padecido tus familiares directos</small>
        <form action="">
            <div class="form-row mt-3">
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="enf-cardiacas" name="heredofamilar">
                        <label class="custom-control-label" for="enf-cardiacas">Enfermedades Cardiacas</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="mentales" name="heredofamiliar">
                        <label class="custom-control-label" for="mentales">Enfermedades Mentales</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="alergicas" name="heredofamilar">
                        <label class="custom-control-label" for="alergicas">Enfermedades Alérgicas</label>
                    </div>
                </div>  
            </div>
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input" id="cancer" name="heredofamilar">
                        <label class="custom-control-label" for="cancer">Cáncer</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="hipertencion" name="heredofamiliar">
                        <label class="custom-control-label" for="hipertencion">Hipertención</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="diabetes" name="heredofamiliar">
                        <label class="custom-control-label" for="diabetes">Diabetes</label>
                    </div>
                </div>  
            </div>
            <div class="form-row">
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="convulsiones" name="heredofamiliar">
                        <label class="custom-control-label" for="convulsiones">Convulsiones</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="tuberculosis" name="heredofamiliar">
                        <label class="custom-control-label" for="tuberculosis">Tuberculosis</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="custom-control custom-checkbox custom-control-inline form-group">
                        <input type="checkbox" class="custom-control-input form-control" id="ninguna-enfer" name="heredofamiliar">
                        <label class="custom-control-label" for="ninguna-enfer">Ninguna</label>
                    </div>
                </div>  
            </div>
            <div class="form-row justify-content-center">
                <div class="col-lg-6">
                    <div class="md-form">
                        <textarea type="text" id="otra-enfer" name="otras-enfer" class="md-textarea form-control" rows="2"></textarea>
                         <label for="otra-enfer">Otras Enfermedades</label>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-primary waves-effect"><i class="fa fa-check"> Guardar</i></button>
        <button type="button" class="btn btn-outline-danger waves-effect">Cancelar</button>
      </div>
    </div>
  </div>
</div>
  
 <!-- Modal Habitos-->

<div class="modal fade bd-example-modal-lg" id="central"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-notify modal-primary">
    <div class="modal-content">
    <div class="modal-header">
        <p class="heading lead">Habitos</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <form action="">
            <div class="form-row">
                <div class="col-lg-4">
                    <label for="">¿Prácticas Deporte?</label>
                    <div class="form-row">
                        <div class="col-lg-12 form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deporte-si" name="practica-deporte">
                                <label class="custom-control-label" for="deporte-si">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="deporte-no" name="practica-deporte">
                                <label class="custom-control-label" for="deporte-no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name-deporte">Nombre del deporte</label>
                                <input id="name-deporte" name="nombre-deporte" type="text" class="validate form-control">
                            </div>
                            <div class="form-group">
                                <label for="veces-deporte" class="">¿Cuántas veces por semana?</label>
                                <input id="veces-deporte" name="veces-deportes" type="text" class="validate form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">¿Fumas?</label>
                    <div class="form-row">
                        <div class="col-lg-12 form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fumar-si" name="fumar">
                                <label class="custom-control-label" for="fumar-si">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="fumar-no" name="fumar">
                                <label class="custom-control-label" for="fumar-no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="edad-fumar">¿A que edad empezaste?</label>
                                <input id="edad-fumar" name="fumar-edad" type="text" class="validate form-control">
                            </div>
                            <div class="form-group">
                                <label for="cigarros-fumar" class="">¿Cuántos cigarros a la semana?</label>
                                <input id="cigarros-fumar" name="fumar-cigarros" type="text" class="validate form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <label for="">¿Consumes bebidas alcohólicas?</label>
                    <div class="form-row">
                        <div class="col-lg-12 form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="alcohol-si" name="alcohol">
                                <label class="custom-control-label" for="alcohol-si">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="alcohol-no" name="alcohol">
                                <label class="custom-control-label" for="alcohol-no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="edad-alcohol">¿A que edad empezaste?</label>
                                <input id="edad-alcohol" name="alcohol-edad" type="text" class="validate form-control">
                            </div>
                            <div class="form-group">
                                <label for="alcohol-lts" class="">¿Cuántos litros por semana?</label>
                                <input id="alcohol-lts" name="lts-alcohol" type="text" class="validate form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-lg-4">
                <label for="">¿Consumes drogas?</label>
                    <div class="form-row">
                        <div class="col-lg-12 form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="drogas-si" name="drogas">
                                <label class="custom-control-label" for="drogas-si">Si</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="drogas-no" name="drogas">
                                <label class="custom-control-label" for="drogas-no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="edad-drogas">¿A que edad empezaste?</label>
                                <input id="edad-drogas" name="drogas-edad" type="text" class="validate form-control">
                            </div>
                            <div class="form-group">
                                <label for="drogas-veces" class="">¿Cuántas veces por semana?</label>
                                <input id="drogas-veces" name="veces-drogas" type="text" class="validate form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-primary waves-effect"><i class="fa fa-check"> Guardar</i></button>
        <button type="button" class="btn btn-outline-danger waves-effect">Cancelar</button>
      </div>
    </div>
  </div>
</div>

    <!--FOOTER-->
<footer class="page-footer blue-grey darken-1">
    <div class="container">
        <div class="row">
          <div class="col-lg-6 mt-4">
            <h5 class="white-text">Departamento de Sistemas y Soporte Técnico</h5>
            <p class="grey-text text-light-4">Sistema de Gestion Escolar, Utec 2019</p>
            <p class="grey-text text-light-4">Email: sergiomarquez@utectulancingo.edu.mx</p>
          </div>
          <div class="col-md-6 mt-4">  
              <b>Para un mejor funcionamiento del sitio <br>utiliza alguno de los siguientes navegadores.</b>
              <div class="row">
                  <div class="browsers container">
                      <a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank"><img src="img/chrom.ico" alt="chrom" class="icon" title="Google Chrom"></a>
                      <a href="https://www.mozilla.org/es-MX/firefox/new/" target="_blank"><img src="img/mozilla.ico" alt="mozilla" class="icon" title="Firefox Mozilla"></a>
                      <a href="https://www.microsoft.com/es-mx/windows/microsoft-edge" target="_blank"><img src="img/edge.png" alt="edge" class="icon" title="Edge"></a>
                  </div> 
              </div>    
          </div>
        </div>
    </div>
      <div class="footer-copyright">
          <div class="container">
              <div class="row mt-4">
                  <div class="col-lg-6">
                    <p>©Copyright 2019 
                  </div>
                  <div class="col-lg-6">
                    <span class="right">Realizado por: <b class="text-white">Sergio Alberto Marquez Moreno</b></span>
                  </div>
              </div>
          </div>
      </div>
</footer>

<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!--<script type="text/javascript" src="js/materialize.min.js"></script>-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/cuestionario-datos.js"></script>
<script type="text/javascript" src="js/iniciar-session.js"></script>  

</html>