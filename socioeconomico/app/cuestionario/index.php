<?php


  if(isset($_POST['cve'])){
    $consecutivo =  $_POST['cve'];
    require_once("../conexion/conexion.php");
    $sql_aspirante = "SELECT * FROM saiiut.saiiut.registro_inicial
    INNER JOIN saiiut.saiiut.procesos ON saiiut.saiiut.registro_inicial.cve_proceso = saiiut.saiiut.procesos.cve_proceso
    WHERE saiiut.saiiut.registro_inicial.cve_proceso = saiiut.saiiut.procesos.cve_proceso
    AND saiiut.saiiut.registro_inicial.consecutivo_aspirante = '$consecutivo'";

    $result_aspirante = odbc_exec($connection,$sql_aspirante) or die (odbc_errormsg());

    $count_aspirante = odbc_num_rows($result_aspirante); //Retorna el numero de columnas econtradas
    $cve_aspirante = odbc_result($result_aspirante,"cve_aspirante");
    $consecutivo_aspirante = odbc_result($result_aspirante,"consecutivo_aspirante");

    if($count_aspirante == 1){
          session_start();
          $_SESSION['clave_aspirante'] = $cve_aspirante;
          $_SESSION['user'] = utf8_encode(odbc_result($result_aspirante, "nombre"));
          $_SESSION['pa'] = utf8_encode(odbc_result($result_aspirante, "apellido_pat"));
          $_SESSION['ma'] = utf8_encode(odbc_result($result_aspirante, "apellido_mat"));
          $_SESSION['consecutivo'] = $consecutivo_aspirante;
          $_SESSION['aceptar'] = 'Aceptado';
          header('Location: /socioeconomico/app/cuestionario/principal.php');
      }


  }

?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistema de Gestión Escolar</title>

    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../icons.css"/>


  </head>

<body background="../img/logo-utec-nuevo.png">

<header>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="cyan darken-3 p-4">
      <h4 class="text-white">SISTEMA DE GESTIÓN ESCOLAR</h4>
      <span class="text-white">Universidad Tecnológica de Tulancingo</span>
    <div class="mt-4">

    </div>

    </div>
  </div>
  <nav class="navbar navbar-dark cyan darken-3">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
</header>



    <!--JUMBOTRON-->
    <div class="container">
        <div class="jumbotron mt-4">
          <h2 class="text-center mb-5">Sistema Escolar</h2>
          <h6>Inicia Sesión</h6>
          <hr class="border-success">
          <form action="" method="" class="form-validate validar-form" novalidate>
            <div class="form-row">
              <div class="col-lg-6">
                  <img src="../img/Log0.png" alt="" class="img-fluid mt-4">
              </div>
              <div class="col-lg-6">
                  <p id="user-msj" class="text-danger"></p>
                  <div class="md-form">
                      <i class="fa fa-user prefix text-default"></i>
                      <input type="email" class="form-control validate" maxlength="50" id="user-correo" name="correo" autocomplete="off" required/>
                      <label for="nombre">Correo</label>
                      <div class="invalid-tooltip ml-5">Campo Faltante</div>
                  </div>
                  <div class="md-form">
                      <i class="fa fa-lock prefix text-default"></i>
                      <input type="password" class="form-control validate" id="user-pass"  maxlength="15" name="contrasenia" autocomplete="off" required/>
                      <label for="nombre">Contraseña</label>
                      <div class="invalid-tooltip ml-5">Campo Faltante</div>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <button type="submit" class="btn bg-default" id="iniciar-sesion">
                            <i class="icon-user1">  INGRESAR</i>
                        </button>
                      </div>
                  </div>
              </div>
            </div>
          </form>
        </div>
    </div>
    <!--JUMBOTRON-->
  </body>


    <!--FOOTER-->
  <footer class="page-footer blue-grey darken-1">
    <div class="container">
        <div class="row">
          <div class="col-lg-6 mt-4">
            <h4 class="white-text">Departamento de Sistemas y Soporte Técnico</h4>
              <p class=" text-white">Sistema de Gestion Escolar, Utec 2019</p>
                  <p class=" text-white">Email: sergiomarquez@utectulancingo.edu.mx</p>
          </div>
          <div class="col-md-6 mt-4">
              <b>Para un mejor funcionamiento del sitio <br>utiliza alguno de los siguientes navegadores.</b>
              <div class="row">
                  <div class="browsers container">
                      <a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank"><img src="../img/chrom.ico" alt="chrom" class="icon" title="Google Chrom"></a>
                      <a href="https://www.mozilla.org/es-MX/firefox/new/" target="_blank"><img src="../img/mozilla.ico" alt="mozilla" class="icon" title="Firefox Mozilla"></a>
                      <a href="https://www.microsoft.com/es-mx/windows/microsoft-edge" target="_blank"><img src="../img/edge.png" alt="edge" class="icon" title="Edge"></a>
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
                    <span class="right">Realizado por: <b class="text-white">Sergio Alberto Márquez Moreno</b></span>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <script type="text/javascript" src="../bootstrap/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bootstrap/mdb.min.js"></script>
  <script type="text/javascript" src="../js/iniciar-session.js"></script>

</html>
