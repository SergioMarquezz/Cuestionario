<?php
session_start();
if(isset($_SESSION['clave_aspirante'])){
}else{
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Principal:::UTEC</title>

    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../icons.css"/>
    <link rel="stylesheet" href="../css/styles.css" />
</head>

<body background="../img/logo-utec-nuevo.png" onload="noRegresar()">

<script type="text/javascript" src="../bootstrap/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/verificar-sesion.js"></script>
    <!--Nav-->
<header>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="cyan darken-3 p-4">
            <h4 class="text-white">SISTEMA DE GESTIÓN ESCOLAR</h4>
            <span class="text-white">Universidad Tecnológica de Tulancingo</span>
            <div class="mt-4">
            <a class="text-white " href="#"><?php echo $_SESSION['user'] . " ". $_SESSION['pa']?></a>
            <a class="text-white ml-5" href="../php/cerrar-sesion.php" id="salir">SALIR</a>
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



<div class="container-fluid">
<input type="hidden" value="<?php echo $_SESSION['consecutivo']?>" name="terminar" id="terminar-cuestionario">
    <div class="jumbotron principal">
        <img src="../img/Log0.png" alt="" class=" img-fluid">
        <h4 class="ml-5 text-uppercase mt-5">Bienvenido(a) <?php echo $_SESSION['user'] ." ". $_SESSION['pa'] ." ". $_SESSION['ma']?></h4>
        <p class="lead ml-5">Estimado usuario para nuestra Universidad Tecnológica de Tulancingo es de gran importancia el que realices estos cuestionarios
            de manera honesta.
        </p>
        <input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
        <div class="ml-5 p-1 row quitar">
            <div class="col-lg-6 mt-3 border-bottom border-dark">
                <strong id="texto-general"><i class="icon-address-card"></i>DATOS GENERALES</strong>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-large bg-default ml-5" id="datos-generales">Realizar cuestionario</button>
            </div>
        </div>
        <div class="ml-5 p-1 row quitar">
            <div class="col-lg-6 mt-3 border-bottom border-dark">
            <strong id="texto-trayectoria"><i class="icon-mortar-board"></i>TRAYECTORIA ACADÉMICA</strong>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-large bg-default ml-5" id="trayectoria-academica">Realizar cuestionario</button>
            </div>
        </div>
        <div class="ml-5 p-1 row quitar">
            <div class="col-lg-6 mt-3 border-bottom border-dark">
            <strong id="texto-caracteristicas"><i class="icon-man"></i>CARACTERÍSTICAS PERSONALES</strong>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-large bg-default ml-5" id="caracte-personales">Realizar cuestionario</button>
            </div>
        </div>
        <div class="ml-5 p-1 row quitar">
            <div class="col-lg-6 mt-3 border-bottom border-dark">
            <strong id="texto-familiar"><i class="icon-man-woman"></i>ENTORNO FAMILIAR</strong>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-large bg-default ml-5" id="entorno-familiar">Realizar cuestionario</button>
            </div>
        </div>
        <div class="ml-5 p-1 row quitar">
            <div class="col-lg-6 mt-3 border-bottom border-dark">
            <strong id="texto-academicas"><i class="icon-book1"></i>DECISIONES ACADÉMICAS</strong>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-large bg-default ml-5" id="deciciones-acedemicas">Realizar cuestionario</button>
            </div>
        </div>
        <center>
            <div id="finalizar"></div>
            <button type="button" class="btn btn-lg bg-default mt-5" id="terminar-cues">Finalizar Encuestas</button>
            <div>
                <p id="nota" class="mt-4 error2">Nota: Presiona el botón para continuar con tu proceso</p>
            </div>

        </center>

    </div>
</div>

</body>

    <!--FOOTER-->
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


<script type="text/javascript" src="../bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap/mdb.min.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/principal.js"></script>
<script type="text/javascript" src="../js/back.js"></script>




</body>
</html>
