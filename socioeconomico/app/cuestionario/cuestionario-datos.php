<?php

include("../php/preguntas.php");
include("../php/reactivos.php");
include("../php/respuestas.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   


    <title>Datos Generales:::UTEC</title>

    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../plugins/css/confirm-alert.css">
    <link rel="stylesheet" href="../plugins/css/lobibox.css">
    <link rel="stylesheet" href="../icons.css"/>
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



<!--<input type="text" id="sexo_user" value="<?php /*echo $_SESSION['sexo']*/?>">-->
<input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
<input type="hidden" id="aceptado" value="<?php echo $_SESSION['aceptar']?>">
<input type="hidden" id="seccion-datos-generales" value="1">

<div class="row justify-content-center ml-2 ">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo" class="img-fluid">
    </div>
</div>


<div class="" id="contenedor">    

      <!--Contenedor del formulario-->
<div id="page-content-wrapper" class="container-fluid">
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4 card-general">
                        <div class="card-header h5-responsive badge-default text-center">DATOS GENERALES</div>
                        <div class="card-body" id="formulario-datos">
                        <p id="msj-validar"><p>
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" id="form-datos-generales">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <!--Pregunta 1-->
                                                    <h5>1. <?php echo(utf8_encode($result_array_pre[0]["pregunta"]))?></h5>
                                                    <input id="cve_pregunta-1" name="pregunta-1" type="hidden" value="<?php echo $result_array_pre[0]['cve_pregunta']?>" />
                                                        <label for="" class=" grey-ic"><?php echo($result_array_re[0]["reactivo"])?></label><!--Recativo 1 de pregunta 1-->
                                                        <input name="rea-caminar" id="reac-caminar" type="hidden" value="<?php echo $result_array_re[0]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" name="caminar" id="reac-caminar-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-caminar-si"><?php echo($result_array_res[0]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" name="caminar" id="reac-caminar-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-caminar-no"><?php echo($result_array_res[1]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[3]["reactivo"])?></label><!--Reactivo 4 de pregunta 1-->
                                                        <input name="rea-conducta" id="reac-conducta" type="hidden" value="<?php echo $result_array_re[3]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="conducta" id="reac-conducta-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-conducta-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="conducta" id="reac-conducta-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-conducta-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo utf8_encode(($result_array_re[6]["reactivo"]))?></label><!--Reactivo 7 de pregunta 1-->
                                                        <input name="rea-depresion" id="reac-depre" type="hidden" value="<?php echo $result_array_re[6]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="depresion" id="reac-depresion-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-depresion-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="depresion" id="reac-depresion-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-depresion-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[9]["reactivo"])?></label><!--Reactivo 10 de pregunta 1-->
                                                        <input name="rea-bulimia" id="reac-bulimia" type="hidden" value="<?php echo $result_array_re[9]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="bulimia" id="reac-bulimia-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-bulimia-si"><?php echo($result_array_res[0]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="bulimia" id="reac-bulimia-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-bulimia-no"><?php echo($result_array_res[1]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                   
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[1]["reactivo"])?></label><!--Reactivo 2 de pregunta 1-->
                                                        <input name="rea-escuchar" id="reac-escuchar" type="hidden" value="<?php echo $result_array_re[1]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="escuchar" id="reac-escuchar-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-escuchar-si"><?php echo($result_array_res[0]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="escuchar" id="reac-escuchar-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-escuchar-no"><?php echo($result_array_res[1]["respuesta"]) ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo utf8_encode(($result_array_re[4]["reactivo"]))?></label><!--Reactivo 5 de pregunta 1-->
                                                        <input name="rea-estres" id="reac-estres" type="hidden" value="<?php echo $result_array_re[4]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" name="estres" id="reac-estres-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-estres-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="estres" id="reac-estres-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-estres-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <label for="" class="grey-ic"><?php echo utf8_encode(($result_array_re[7]["reactivo"]))?></label><!--Reactivo 8 de pregunta 1-->
                                                        <input name="rea-atencion" id="reac-atencion" type="hidden" value="<?php echo $result_array_re[7]['cve_reactivo']?>"/>           
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="atencion" id="reac-atencion-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-atencion-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="atencion" id="reac-atencion-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-atencion-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                </div>
                                                <div class="col-md-4 mt-4">
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[2]["reactivo"])?></label><!--Reactivo 3 de pregunta 1-->
                                                        <input name="rea-ver" id="reac-ver" type="hidden" value="<?php echo $result_array_re[2]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="ver" id="reac-ver-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-ver-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="ver" id="reac-ver-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-ver-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[5]["reactivo"])?></label><!--Reactivo 6 de pregunta 1-->
                                                        <input name="rea-agresividad" id="reac-agredir" type="hidden" value="<?php echo $result_array_re[5]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="agresividad" id="reac-agresividad-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-agresividad-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="agresividad" id="reac-agresividad-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-agresividad-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[8]["reactivo"])?></label><!--Reactivo 9 de pregunta 1-->
                                                        <input name="rea-obesidad" id="reac-obesidad" type="hidden" value="<?php echo $result_array_re[8]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="obesidad" id="reac-obesidad-si" type="radio" value="1" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-obesidad-si"><?php echo($result_array_res[0]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="obesidad" id="reac-obesidad-no" type="radio" value="2" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-obesidad-no"><?php echo($result_array_res[1]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 mt-5">
                                                    <!--Pregunta 2-->
                                                    <h5>2. <?php echo(utf8_encode($result_array_pre[1]["pregunta"]))?></h5>
                                                    <input name="pregunta-2" id="cve_pregunta-2" type="hidden" value="<?php echo $result_array_pre[1]['cve_pregunta']?>"/>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                        <label for="" class="grey-ic"><?php echo($result_array_re[10]["reactivo"])?></label><!--Reactivo 1 de pregunta 2-->
                                                        <input name="rea-madre" id="reac-madre" type="hidden" value="<?php echo $result_array_re[10]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="madre" id="reac-madre-si" type="radio" value="3" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-madre-si"><?php echo($result_array_res[2]["respuesta"])?></label>
                                                                </div>
                                                                <select class="form-control" name="lenguas-madre" id="select-lenguas-madre">
                                                                    <option disabled selected value="">¿Cuál?</option>
                                                                        <?php
                                                                            while ($row = odbc_fetch_array($result_lenguas)){
                                                                        ?>
                                                                    <option value="<?php echo($row["cve_lengua"])?>"><?php echo utf8_encode(($row["nombre"]))?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="madre" id="reac-madre-no" type="radio" value="4" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-madre-no"><?php echo($result_array_res[3]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="madre" id="reac-madre-nose" type="radio" value="5" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-madre-nose"><?php echo($result_array_res[4]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                   
                                                    <label for="" class="grey-ic"><?php echo($result_array_re[11]["reactivo"])?></label><!--Reactivo 2 de pregunta 2-->
                                                        <input name="rea-padre" id="reac-padre" type="hidden" value="<?php echo $result_array_re[11]['cve_reactivo']?>"/>
                                                        <div class="form-row">
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="padre" id="reac-padre-si" type="radio" value="3" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-padre-si"><?php echo($result_array_res[2]["respuesta"])?></label>
                                                                </div>
                                                                <select class="form-control" name="lenguas-padre" id="select-lenguas-padre">
                                                                    <option disabled selected value="">¿Cuál?</option>
                                                                        <?php
                                                                            while ($row = odbc_fetch_array($result_lenguas2)){
                                                                        ?>
                                                                    <option value="<?php echo($row["cve_lengua"])?>"><?php echo utf8_encode(($row["nombre"]))?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input " name="padre" id="reac-padre-no" type="radio" value="4" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-padre-no"><?php echo($result_array_res[3]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input" name="padre" id="reac-padre-nose" type="radio" value="5" required/>
                                                                    <label class="custom-control-label grey-text" for="reac-padre-nose"><?php echo($result_array_res[4]["respuesta"])?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <footer>
                                        <div class="">
                                            <div class="row justify-content-center ">
                                                <div class="col-lg-6 mt-4">
                                                    <button type="submit" class="btn btn-block w-75 bg-default" id="guardar-datos-general"><i class="icon-checkmark1"> GUARDAR</i></button>
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
<script type="text/javascript" src="../plugins/js/confirm-alert.js"></script>
<script type="text/javascript" src="../plugins/js/lobibox.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/preguntas-generales.js"></script>
<script type="text/javascript" src="../js/back.js"></script>



    
</body>
</html>