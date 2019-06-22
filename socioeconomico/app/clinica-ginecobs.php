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
            <!--Formulario enfermedades-->
            <div class="row pt-4" id="enfermedades">
                <div class="col-lg-12">
              
                    <div class="card border-default mt-3">
                      
                        <div class="card-header h5-responsive badge-default text-center">ANTECEDENTES GINECOBSTÉTRICOS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                               <form action="">
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="mestruacion" class="">Edad de la primera mestruación</label>
                                                <select name="mestruacion" id="" class="form-control custom-select validate">
                                                    <option value="" selected disabled="disabled">Selecciona</option>
                                                    <option value="">8</option>
                                                    <option value="">9</option>
                                                    <option value="">10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="">¿Tu periodo es regular?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="mestruacion-si" name="mestruaccion">
                                                        <label class="custom-control-label" for="mestruacion-si">Si</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="mestruacion-no" name="mestruaccion">
                                                        <label class="custom-control-label" for="mestruacion-no">No</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                        <input id="dia-mestruacion" type="text" name="dias-mestruacion" class="validate form-control">
                                                        <label for="dia-mestruacion">Cada cuántos dias</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mt-4">
                                                    <div class="md-form form-group">
                                                        <input id="dias-duracion-mestru" type="text" name="dias-duracion-mestru" class="validate form-control">
                                                        <label for="dias-duracion-mestru">Días de duración</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <label for="">¿Te has embarazado alguna vez?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="embarazo-si" name="embarazo">
                                                        <label class="custom-control-label" for="embarazo-si">Si</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="embarazo-no" name="embarazo">
                                                        <label class="custom-control-label" for="embarazo-no">No</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                        <input id="veces-embarazo" type="text" name="veces-embarazo" class="validate form-control">
                                                        <label for="veces-embarazo">¿Cuántas veces?</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                 
                                                </div>
                                            </div>
                                            <label for="">¿Te has realizado el papanicolaou?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="papanico-si" name="papanico">
                                                        <label class="custom-control-label" for="papanico-si">Si</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="papanico-no" name="papanico">
                                                        <label class="custom-control-label" for="papanico-no">No</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                        <input id="veces-papanico" type="text" name="veces-papanico" class="validate form-control">
                                                        <label for="veces-papanico">¿Cuántas veces?</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                        <label for="">Tipo de cirugia</label>
                                            <div class="form-row">
                                                <div class="col-lg-12">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="parto-normal" name="parto">
                                                        <label class="custom-control-label" for="parto-normal">Parto normal</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="parto-cesarea" name="parto">
                                                        <label class="custom-control-label" for="parto-cesarea">Cesárea</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="parto-aborto" name="parto">
                                                        <label class="custom-control-label" for="parto-aborto">Aborto</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="parto-legrado" name="parto">
                                                        <label class="custom-control-label" for="parto-legrado">Legrado</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="">¿Utilizas algún método de planificación familiar?</label>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="metodo-si" name="metodo-familiar">
                                                        <label class="custom-control-label" for="metodo-si">Si</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" class="custom-control-input" id="metodo-no" name="metodo-familiar">
                                                        <label class="custom-control-label" for="metodo-no">No</label>
                                                    </div>
                                                    <div class="md-form form-group">
                                                        <input id="cual-metodo" type="text" name="cual-metodo" class="validate form-control">
                                                        <label for="cual-metodo">¿Cuál?</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <button class="btn btn-block w-75 ml-5 bg-default"><i class="fa fa-check"> Guardar</i></button>
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

</html>