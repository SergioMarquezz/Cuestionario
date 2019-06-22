<?php

    include("../php/preguntas.php");
    include("../php/respuestas.php");
    include("../php/reactivos.php");
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entorno Familiar:::UTEC</title>

    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../plugins/css/confirm-alert.css">
    <link rel="stylesheet" href="../plugins/css/lobibox.css">
    <link rel="stylesheet" href="../icons.css">
    <link rel="stylesheet" href="../css/styles.css" />

</head>


<body background="../img/logo-utec-nuevo.png" onload="noRegresar()">

    <script type="text/javascript" src="../bootstrap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/verificar-sesion.js"></script>

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

<div class="row justify-content-center">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo" class="img-fluid">
    </div>
</div>
<input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
<input type="hidden" id="aceptado" value="<?php echo $_SESSION['aceptar']?>">
<input type="hidden" id="seccion-familiar" value="4">


<div class="d-flex" id="contenedor">
        <!--Contenedor del formulario-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">ENTORNO FAMILIAR</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" id="form-familiar">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-row">
                                                <div class="col-lg-12">
                                                <!--Pregunta 23-->
                                                    <input type="hidden" name="pregunta-23" id="cve_pregunta-23" value="<?php echo $result_array_pre[22]["cve_pregunta"] ?>">
                                                    <h5>23. <?php echo(utf8_encode($result_array_pre[22]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="estudio-padre" id="no-estudio-padre" type="radio" value="72" required/>
                                                                    <label class="custom-control-label grey-text"  for="no-estudio-padre"><?php echo(utf8_encode($result_array_res[71]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="estudio-padre" id="primaria-padre" type="radio" value="73" required/>
                                                                    <label class="custom-control-label grey-text"  for="primaria-padre"><?php echo($result_array_res[72]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="estudio-padre" id="secu-padre" type="radio" value="74" required/>
                                                                    <label class="custom-control-label grey-text" for="secu-padre"><?php echo($result_array_res[73]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="estudio-padre" id="bachiller-padre" type="radio" value="75" required/>
                                                                    <label class="custom-control-label grey-text" for="bachiller-padre"><?php echo($result_array_res[74]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-padre" id="tecnica-padre" type="radio" value="76" required/>
                                                                    <label class="custom-control-label grey-text" for="tecnica-padre"><?php echo(utf8_encode($result_array_res[75]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="estudio-padre" id="uni-padre" type="radio" value="77" required/>
                                                                    <label class="custom-control-label grey-text" for="uni-padre"><?php echo(utf8_encode($result_array_res[76]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-padre" id="lic-padre" type="radio" value="78" required/>
                                                                    <label class="custom-control-label grey-text" for="lic-padre"><?php echo($result_array_res[77]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-padre" id="posgrado-padre" type="radio" value="79" required/>
                                                                    <label class="custom-control-label grey-text" for="posgrado-padre"><?php echo(utf8_encode($result_array_res[78]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="pregunta-24" id="cve_pregunta-24" value="<?php echo $result_array_pre[23]["cve_pregunta"] ?>">
                                                    <h5 class="mt-5">24. <?php echo(utf8_encode($result_array_pre[23]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="no-estudio-madre" type="radio" value="80" required/>
                                                                    <label class="custom-control-label grey-text" for="no-estudio-madre"><?php echo(utf8_encode($result_array_res[79]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="primaria-madre" type="radio" value="81" required/>
                                                                    <label class="custom-control-label grey-text" for="primaria-madre"><?php echo($result_array_res[80]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="secu-madre" type="radio" value="82" required/>
                                                                    <label class="custom-control-label grey-text" for="secu-madre"><?php echo($result_array_res[81]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="bachiller-madre" type="radio" value="83" required/>
                                                                    <label class="custom-control-label grey-text" for="bachiller-madre"><?php echo($result_array_res[82]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="tecnica-madre" type="radio" value="84" required/>
                                                                    <label class="custom-control-label grey-text" for="tecnica-madre"><?php echo(utf8_encode($result_array_res[83]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="uni-madre" type="radio" value="85" required/>
                                                                    <label class="custom-control-label grey-text" for="uni-madre"><?php echo(utf8_encode($result_array_res[84]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="lic-madre" type="radio" value="86" required/>
                                                                    <label class="custom-control-label grey-text" for="lic-madre"><?php echo($result_array_res[85]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudio-madre" id="posgrado-madre" type="radio" value="87" required/>
                                                                    <label class="custom-control-label grey-text"  for="posgrado-madre"><?php echo(utf8_encode($result_array_res[86]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="pregunta-25" id="cve_pregunta-25" value="<?php echo $result_array_pre[24]["cve_pregunta"] ?>">
                                                    <h5 class="mt-5">25. <?php echo(utf8_encode($result_array_pre[24]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="libros" id="ninguno-libros" type="radio" value="88" required/>
                                                                    <label class="custom-control-label grey-text" for="ninguno-libros"><?php echo(utf8_encode($result_array_res[87]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="10-libros" type="radio" value="89" required/>
                                                                    <label class="custom-control-label grey-text" for="10-libros"><?php echo($result_array_res[88]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="25-libros" type="radio" value="90" required/>
                                                                    <label class="custom-control-label grey-text" for="25-libros"><?php echo($result_array_res[89]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="50-libros" type="radio" value="91" required/>
                                                                    <label class="custom-control-label grey-text" for="50-libros"><?php echo($result_array_res[90]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="100-libros" type="radio" value="92" required/>
                                                                    <label class="custom-control-label grey-text" for="100-libros"><?php echo(utf8_encode($result_array_res[91]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="200-libros" type="radio" value="93" required/>
                                                                    <label class="custom-control-label grey-text" for="200-libros"><?php echo(utf8_encode($result_array_res[92]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="500-libros" type="radio" value="94" required/>
                                                                    <label class="custom-control-label grey-text" for="500-libros"><?php echo($result_array_res[93]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="libros" id="mas-500-libros" type="radio" value="95" required/>
                                                                    <label class="custom-control-label grey-text" for="mas-500-libros"><?php echo(utf8_encode($result_array_res[94]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="pregunta-26" id="cve_pregunta-26" value="<?php echo $result_array_pre[25]["cve_pregunta"] ?>">
                                                    <h5 class="mt-5">26. <?php echo(utf8_encode($result_array_pre[25]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="educativo" id="superior" type="radio" value="96" required/>
                                                                    <label class="custom-control-label grey-text"  for="superior"><?php echo($result_array_res[95]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="educativo" id="tecnica" type="radio" value="97" required/>
                                                                    <label class="custom-control-label grey-text" for="tecnica"><?php echo(utf8_encode($result_array_res[96]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="educativo" id="lic" type="radio" value="98" required/>
                                                                    <label class="custom-control-label grey-text" for="lic"><?php echo($result_array_res[97]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="educativo" id="posgrado" type="radio" value="99" required/>
                                                                    <label class="custom-control-label grey-text" for="posgrado"><?php echo( utf8_encode($result_array_res[98]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                                <div class="col-lg-6">
                                                <input type="hidden" name="pregunta-27" id="cve_pregunta-27" value="<?php echo $result_array_pre[26]["cve_pregunta"] ?>">
                                                    <h5 class="mt-5">27. <?php echo(utf8_encode($result_array_pre[26]["pregunta"]))?></h5>
                                                    <div class="form-row">
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabajar" id="no-trabaja" type="radio" value="100" required/>
                                                                    <label class="custom-control-label grey-text" for="no-trabaja"><?php echo(utf8_encode($result_array_res[99]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabajar" id="5-trabaja" type="radio" value="101" required/>
                                                                    <label class="custom-control-label grey-text" for="5-trabaja"><?php echo(utf8_encode($result_array_res[100]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabajar" id="10-trabaja" type="radio" value="102" required/>
                                                                    <label class="custom-control-label grey-text" for="10-trabaja"><?php echo($result_array_res[101]["respuesta"])?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="trabajar" id="15-trabaja" type="radio" value="103" required/>
                                                                    <label class="custom-control-label grey-text"  for="15-trabaja"><?php echo(utf8_encode($result_array_res[102]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabajar" id="20-trabaja" type="radio" value="104" required/>
                                                                    <label class="custom-control-label grey-text" for="20-trabaja"><?php echo(utf8_encode($result_array_res[103]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabajar" id="mas-20-trabaja" type="radio" value="105" required/>
                                                                    <label class="custom-control-label grey-text" for="mas-20-trabaja"><?php echo(utf8_encode($result_array_res[104]["respuesta"]))?></label>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div> 
                                        </div>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-around">
                                                <div class="col-lg-6 mt-4">
                                                    <button type="submit" class="btn btn-block w-75 bg-default mb-4" id="guardar-familiar">
                                                        <i class="icon-checkmark1">  GUARDAR</i>
                                                    </button>
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
    
</body>

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
<script type="text/javascript" src="../plugins/js/confirm-alert.js"></script>
<script type="text/javascript" src="../plugins/js/lobibox.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/preguntas-familiar.js"></script>
<script type="text/javascript" src="../js/back.js"></script>
</html>