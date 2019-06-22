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
    <title>Trayectoria Académica:::UTEC</title>

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

<input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
<input type="hidden" id="aceptado" value="<?php echo $_SESSION['aceptar']?>">
<input type="hidden" id="seccion-trayectoria" value="2">

<div class="row justify-content-center">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo" class="img-fluid">
    </div>
</div>


<div class="" id="contenedor">

      <!--Contenedor del formulario-->
    <div id="page-content-wrapper" class="container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">TRAYECTORIA ACADÉMICA</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" action="#" id="form-trayectoria">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    
                                        <div class="form-row justify-content-center">
                                            <div class="col-md-4">
                                                <!--Pregunta 3-->
                                                <h5>3. <?php echo(utf8_encode($result_array_pre[2]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-3" name="pregunta-3" type="hidden" value="<?php echo $result_array_pre[2]['cve_pregunta']?>" />
                                                <!--Combobox Estados-->
                                                <select class="form-control" name="estados" id="select-estados" required>
                                                    
                                                    <option disabled selected value="">Selecciona</option>
                                                    <?php
                                                        while ($row = odbc_fetch_array($result_estado)){
                                                    ?>
                                                    <option value="<?php echo($row["cve_estado"])?>"><?php echo utf8_encode(($row["nombre"]))?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                
                                                <!--Combobox Estados-->
                                            </div>
                                            <div class="col-md-4">
                                                <!--Pregunta 4-->
                                                <h5>4. <?php echo(utf8_encode($result_array_pre[3]["pregunta"]))?> </h5>
                                                <input id="cve_pregunta-4" name="pregunta-4" type="hidden" value="<?php echo $result_array_pre[3]['cve_pregunta']?>" />
                                                <!--Input para seleccionar año y mes-->
                                                <input type="month" class="form-control" id="months" name="meses" required>
                                                <!--Reactivo 1 de pregunta 4-->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" name="medio-superior" id="respuesta-no-concluir" type="radio" value="1143"/>
                                                    <label class="custom-control-label grey-text" for="respuesta-no-concluir">No he concluido el nivel medio superior</label>
                                                </div>
                                                <!--Reactivo 2 de pregunta 4-->
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" name="medio-superior" id="respuesta-concluir" type="radio" value="1150"/>
                                                    <label class="custom-control-label grey-text" for="respuesta-concluir">He concluido el nivel medio superior</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 5-->
                                                <h5 class="mt-4">5. <?php echo(utf8_encode($result_array_pre[4]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-5" name="pregunta-5" type="hidden" value="<?php echo $result_array_pre[4]['cve_pregunta']?>" />
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio"><!--Respuesta 1 de pregunta 5-->
                                                            <label>
                                                                <input class="custom-control-input" name="regimen" id="respuesta-publico" type="radio" value="6" required/>
                                                                <label class="custom-control-label grey-text" for="respuesta-publico"><?php echo(utf8_encode($result_array_res[5]["respuesta"]))?></label>
                                                            </label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 2 de pregunta 5-->
                                                            <input class="custom-control-input" name="regimen" id="respuesta-privado" type="radio" value="7" required/>
                                                            <label class="custom-control-label grey-text" for="respuesta-privado"><?php echo($result_array_res[6]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!--Pregunta 6-->
                                                <h5 class="mt-4">6. <?php echo(utf8_encode($result_array_pre[5]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-6" name="pregunta-6" type="hidden" value="<?php echo $result_array_pre[5]['cve_pregunta']?>" />
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 1 de pregunta 6-->
                                                            <input class="custom-control-input " name="ultimo-anio" id="general" type="radio" value="8" required/>
                                                            <label class="custom-control-label grey-text" for="general"><?php echo($result_array_res[7]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 2 de pregunta 6-->
                                                            <input class="custom-control-input" name="ultimo-anio" id="tecnologico" type="radio" value="9" required/>
                                                            <label class="custom-control-label grey-text" for="tecnologico"><?php echo(utf8_encode($result_array_res[8]["respuesta"]))?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 3 de pregunta 6-->
                                                            <input class="custom-control-input" name="ultimo-anio" id="tecnico" type="radio" value="10" required/>
                                                            <label class="custom-control-label grey-text" for="tecnico"><?php echo(utf8_encode($result_array_res[9]["respuesta"]))?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio "> <!--Respuesta 4 de pregunta 6-->
                                                            <input class="custom-control-input" name="ultimo-anio" id="intercultural" type="radio" value="11" required/>
                                                            <label class="custom-control-label grey-text" for="intercultural"><?php echo(utf8_encode($result_array_res[10]["respuesta"]))?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 5 de pregunta 6-->
                                                            <input class="custom-control-input" name="ultimo-anio" id="internacional" type="radio" value="12" required/>
                                                            <label class="custom-control-label grey-text" for="internacional"><?php echo($result_array_res[11]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 6 de pregunta 6-->
                                                            <input class="custom-control-input" name="ultimo-anio" id="telebachiller" type="radio" value="13" required/>
                                                            <label class="custom-control-label grey-text" for="telebachiller"><?php echo($result_array_res[12]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>       
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 7-->
                                                <h5 class="mt-4">7. <?php echo(utf8_encode($result_array_pre[6]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-7" name="pregunta-7" type="hidden" value="<?php echo $result_array_pre[6]['cve_pregunta']?>" />
                                                <div class="form-row">
                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 1 de pregunta 7-->
                                                            <input class="custom-control-input" name="programa-estudia" id="escolarizado" type="radio" value="14" required/>
                                                            <label class="custom-control-label grey-text" for="escolarizado"><?php echo($result_array_res[13]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 2 de pregunta 7-->
                                                            <input class="custom-control-input" name="programa-estudia" id="abierto" type="radio" value="15" required/>
                                                            <label class="custom-control-label grey-text" for="abierto"><?php echo($result_array_res[14]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 3 de pregunta 7-->
                                                            <input class="custom-control-input" name="programa-estudia" id="distancia" type="radio" value="16" required/>
                                                            <label class="custom-control-label grey-text" for="distancia"><?php echo($result_array_res[15]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <!--Pregunta 8-->
                                                <h5 class="mt-4">8. <?php echo(utf8_encode($result_array_pre[7]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-8" name="pregunta-8" type="hidden" value="<?php echo $result_array_pre[7]['cve_pregunta']?>" />
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 1 de pregunta 8-->
                                                            <input class="custom-control-input" name="turno" id="matutino" type="radio" value="17" required/>
                                                            <label class="custom-control-label grey-text" for="matutino"><?php echo($result_array_res[16]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 2 de pregunta 8-->
                                                            <input class="custom-control-input" name="turno" id="vespertino" type="radio" value="18" required/>
                                                            <label class="custom-control-label grey-text" for="vespertino"><?php echo($result_array_res[17]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 3 de pregunta 8-->
                                                            <input class="custom-control-input" name="turno" id="nocturno" type="radio" value="19" required/>
                                                            <label class="custom-control-label grey-text"  for="nocturno"><?php echo($result_array_res[18]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 4 de pregunta 8-->
                                                            <input class="custom-control-input" name="turno" id="mixto" type="radio" value="20" required/>
                                                            <label class="custom-control-label grey-text" for="mixto"><?php echo($result_array_res[19]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 5 de pregunta 8-->
                                                            <input class="custom-control-input" name="turno" id="no-aplica" type="radio" value="21" required/>
                                                            <label class="custom-control-label grey-text" for="no-aplica"><?php echo($result_array_res[20]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 9-->
                                                <h5 class="mt-4">9. <?php echo(utf8_encode($result_array_pre[8]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-9" name="pregunta-9" type="hidden" value="<?php echo $result_array_pre[8]['cve_pregunta']?>" />
                                                <input type="number" name="promedio-final" id="promedio" placeholder= "0.00" step="any" required>
                                            </div>
                                            <div class="col-md-6">
                                                <!--Pregunta 10-->
                                                <h5 class="mt-4">10. <?php echo(utf8_encode($result_array_pre[9]["pregunta"]))?></h5>
                                                <input id="cve_pregunta-10" name="pregunta-10" type="hidden" value="<?php echo $result_array_pre[9]['cve_pregunta']?>" />
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 1 de pregunta 10-->
                                                            <input class="custom-control-input" name="beca" id="becas-si" type="radio" value="22" required/>
                                                            <label class="custom-control-label grey-text"  for="becas-si"><?php echo($result_array_res[21]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio"> <!--Respuesta 2 de pregunta 10-->
                                                            <input class="custom-control-input" name="beca" id="becas-no" type="radio" value="23" required/>
                                                            <label class="custom-control-label grey-text" for="becas-no"><?php echo($result_array_res[22]["respuesta"])?></label>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 mt-4">
                                                    <button type="submit" class="btn btn-block w-75 ml-5 bg-default" id="guardar-trayectoria"><i class="icon-checkmark1"> GUARDAR</i></button>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </footer>
                                </form>
                                <p id="msj-error"></p>
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
<script type="text/javascript" src="../js/preguntas-trayectoria.js"></script>
<script type="text/javascript" src="../js/back.js"></script>

</html>