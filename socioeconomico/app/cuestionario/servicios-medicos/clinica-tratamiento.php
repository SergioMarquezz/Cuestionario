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
                      
                        <div class="card-header h5-responsive badge-default text-center">TRATAMIENTO DEL ALUMNO</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                               <form action="">
                                    <div class="form-row">
                                        <div class="col-lg-12">
                                            <div class="md-form">
                                                <textarea type="text" id="otra-enfer" name="otras-enfer" class="md-textarea form-control" rows="2"></textarea>
                                                <label for="otra-enfer">Describa el tratamiento del alumno</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="alumno-peso" type="number" name="peso-alumno" class="validate form-control" placeholder="Kg">
                                                <label for="alumno-peso">Peso del alumno</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="alumno-fc" type="number" name="fc" class="validate form-control" placeholder="FC">
                                                <label for="alumno-fc">Frecuencia cardiaca</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="alumno-temp" type="number" name="temp" class="validate form-control" placeholder="FC">
                                                <label for="alumno-temp">Temperatura</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="alumno-estatura" type="number" name="estatura-alumno" class="validate form-control" placeholder="Mtrs">
                                                <label for="alumno-estatura">Estatura del alumno</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="alumno-fr" type="number" name="fr" class="validate form-control" placeholder="FC">
                                                <label for="alumno-fr">Factor reumatoideo</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="md-form form-group">
                                                <input id="alumno-imc" type="number" name="imc" class="validate form-control" placeholder="IMC">
                                                <label for="alumno-imc">Indice de masa corporal</label>
                                            </div>
                                            <div class="md-form form-group">
                                                <input id="alumno-ta" type="number" name="ta" class="validate form-control" placeholder="TA">
                                                <label for="alumno-ta">Taquicardia auricular</label>
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