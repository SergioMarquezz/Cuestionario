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

<div class="d-flex" id="contenedor">

    <?php
        include("includes/barra-lateral-clinica.php");
    ?>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">INFORMACIÓN GENERAL DEL ALUMNO</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="md-form">
                                                <input type="date" value="2019-02-18" name="fecha" disabled class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="md-form form-group">
                                                <input id="nombres" type="text" name="nombre" class="validate form-control">
                                                <label for="nombres">Nombre(s)</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="md-form form-group">
                                                <input id="apellidos" type="text" name="apellido" class="validate form-control">
                                                <label for="apellidos">Apellido(s)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="edades" type="text" name="edad" class="validate form-control">
                                                <label for="edades">Edad</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="fecha-nacimiento" type="date" class="validate form-control" placeholder>
                                                <label for="fecha-nacimietno" class="mr-4">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row mt-2">
                                                <label for="" class="grey-text text-light-4 label">Sexo</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="sexo-masculino" name="sexo">
                                                <label class="custom-control-label grey-text text-light-4 label" for="sexo-masculino">Masculino</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline ">
                                                <input type="radio" class="custom-control-input" id="sexo-femenino" name="sexo">
                                                <label class="custom-control-label grey-text text-light-4 label" for="sexo-femenino">Femenino</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lugar-nacimiento" class="grey-text text-light-4 label">Lugar de nacimiento</label>
                                                <select name="lugar-nacimiento" id="" class="form-control custom-select validate">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">Guerrero</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="lugar-residencia"  class="grey-text text-light-4 label">Lugar de residencia</label>
                                                <select name="lugar-residencia" id="" class="form-control custom-select validate">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">Hidalgo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="estado-civil"  class="grey-text text-light-4 label">Estado Civil</label>
                                                <select name="estado-civil" id="" class="form-control custom-select validate">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">Soltero</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="carrera" class="grey-text text-light-4 label">Carrera</label>
                                                <select name="carrera" id="" class="form-control validate custom-select">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">Tic</option>
                                                </select>  
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 mt-3">
                                            <label for="derecho-ambiente" class="grey-text text-light-4 label">¿Eres derechohambiente a alguna institición?</label>
                                            <div class="row ml-5">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="derechoambiente-si" name="drechohambiente">
                                                    <label class="custom-control-label grey-text text-light-4 label" for="derechoambiente-si">Si</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline ">
                                                    <input type="radio" class="custom-control-input" id="derechoambiente-no" name="drechohambiente">
                                                    <label class="custom-control-label grey-text text-light-4 label" for="derechoambiente-no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="name-afiliacion" type="text" name="name-afiliacion" class="validate form-control">
                                                <label for="name-afiliacion">Nombre de la institución</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="num-afiliacion" type="text" name="num-afiliacion" class="validate form-control">
                                                <label for="num-afiliacion">No. de afiliación</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row justify-content-center">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="tipo-sangre" class="grey-text text-light-4 label">Tipo de sangre</label>
                                                <select name="tipo-sangre" id="" class="form-control custom-select validate">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">O+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="md-form form-group">
                                                <input id="vacunas" type="text" name="vacunas" class="validate form-control">
                                                <label for="vacunas">Vacunas</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="md-form form-group">
                                                <input id="ingreso-familiar" type="text" name="ingreso-familiar" class="validate form-control">
                                                <label for="ingreso-familiar">Ingreso mensual familiar</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="md-form form-group">
                                                <input id="matriculas" type="text" name="matricula" class="validate form-control">
                                                <label for="matriculas">Matricula</label>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button type="button" class="btn btn-block w-75 ml-5 bg-default" id="guardar-general-clinica"><i class="fa fa-check"> Guardar</i></button>
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
        <small class="grey-text text-light-4 text-uppercase">Selecciona todas las enfermedades que padezcan o hayan padecido tus familiares directos</small>
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

<div class="modal fade bd-example-modal-lg" id="habitos"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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


<!--Modal contacto urgencia-->

<div class="modal fade" id="modal-urgencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-notify modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Contacto de urgencia médica del alumno</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <small class="grey-text text-light-4 text-uppercase text-warning">En caso de urgencia médica avisar a: </small>
        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="md-form form-group">
                    <input id="nombre-contacto" type="text" name="nombre-contacto" class="validate form-control" placeholder="">
                    <label for="nombre-contacto">Nombre</label>
                </div>
                <div class="md-form form-group">
                    <input id="direccion-contacto" type="text" name="direccion-contacto" class="validate form-control" placeholder="">
                    <label for="direccion-contacto">Dirección</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="md-form form-group">
                    <input id="parentesco" type="text" name="parentesco" class="validate form-control" palceholder="">
                    <label for="parentesco">Parentesco</label>
                </div>
                <div class="md-form form-group">
                    <input id="telefono-contacto" type="tel" name="telefono-contacto" class="validate form-control" palceholder="">
                    <label for="telefono-contacto">Telefono</label>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <a href="https://api.whatsapp.com/send?phone=527711782685&text=Estimado padre de familia nos comunicamos de parte de la Universidad Tecnológica de Tulancingo para informarle 
                que su hij@ tiene un problema de salud favor de comunicarse con nosotros" target="_blank">
            <button type="button" class="btn btn-outline-success" href=""><i class="icon-whatsapp text-uppercase">  Enviar mensaje</i></button> 
        </a>
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
<script type="text/javascript" src="js/materialize.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/cuestionario-datos.js"></script>
<script type="text/javascript" src="js/iniciar-session.js"></script>  

</html>