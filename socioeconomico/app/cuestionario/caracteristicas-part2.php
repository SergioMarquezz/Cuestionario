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
    <title>Características Personales:::UTEC</title>

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



<input type="hidden" id="cve_aspirante" name="clave_aspi" value="<?php echo $_SESSION['clave_aspirante']?>">
<input type="hidden" id="aceptado" value="<?php echo $_SESSION['aceptar']?>">
<input type="hidden" id="seccion-caracteristicas-personales" value="3">

<div class="row justify-content-center">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo" class="img-fluid">
    </div>
</div>


<div class="" id="contenedor">

      <!--Contenedor del formulario-->
    <div id="page-content-wrapper" class="container-fluid">
        <div >
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-12 col-sm-12">
                    <div class="card card-part2 border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">CARACTERÍSTICAS PERSONALES</div>
                        <div class="card-body mt-5">
                            <blockquote class="blockquote">
                                 <!--Formulario-->
                                 <form method="POST" class="scroller" id="form-caracte-part2">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 14-->
                                                <h5>14. <?php echo(utf8_encode($result_array_pre[13]["pregunta"]))?></h5>
                                                <input type="hidden" name="pregunta-14" id="cve_pregunta-14" value="<?php echo $result_array_pre[13]["cve_pregunta"]?>">
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[30]["reactivo"]))?></label><!--Reactivo 1 de pregunta 14-->
                                                    <input type="hidden" name="rea-exito" id="cve_react-exito" value="<?php echo $result_array_re[30]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="exito" id="no-identifico-exito" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-exito"><?php echo($result_array_res[35]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="exito" id="identifico-poco-exito" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text " for="identifico-poco-exito"><?php echo($result_array_res[36]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="exito" id="identifico-exito" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-exito"><?php echo($result_array_res[37]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="exito" id="identifico-total-exito" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-total-exito"><?php echo($result_array_res[38]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[32]["reactivo"]))?></label><!--Reactivo 3 de pregunta 14-->
                                                    <input type="hidden" name="rea-maestros" id="cve_react-maestros" value="<?php echo $result_array_re[32]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="maestros" id="no-identifico-maestros" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-maestros"><?php echo($result_array_res[35]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="maestros" id="identifico-poco-maestros" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-poco-maestros"><?php echo($result_array_res[36]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="maestros" id="identifico-maestros" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-maestros"><?php echo($result_array_res[37]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="maestros" id="identifico-total-maestros" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-total-maestros"><?php echo($result_array_res[38]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[34]["reactivo"]))?></label><!--Reactivo 5 de pregunta 14-->
                                                    <input type="hidden" name="rea-familia" id="cve_react-familia" value="<?php echo $result_array_re[34]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="familia" id="no-identifico-familia" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-familia"><?php echo($result_array_res[35]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="familia" id="identifico-poco-familia" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-poco-familia"><?php echo($result_array_res[36]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="familia" id="identifico-familia" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-familia"><?php echo($result_array_res[37]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="familia" id="identifico-total-familia" type="radio" value="39" required/>
                                                                    <label  class="custom-control-label grey-text"  for="identifico-total-familia"><?php echo($result_array_res[38]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[36]["reactivo"]))?></label><!--Reactivo 7 de pregunta 14-->
                                                    <input type="hidden" name="rea-cambiar" id="cve_react-cambiar" value="<?php echo $result_array_re[36]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cambiar" id="no-identifico-cambiar" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-cambiar"><?php echo($result_array_res[35]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cambiar" id="identifico-poco-cambiar" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text"  for="identifico-poco-cambiar"><?php echo($result_array_res[36]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cambiar" id="identifico-cambiar" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-cambiar"><?php echo($result_array_res[37]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cambiar" id="identifico-total-cambiar" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text"  for="identifico-total-cambiar"><?php echo($result_array_res[38]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                    <label for="" class="mt-4 grey-ic" id="escuela-depende"><?php echo(utf8_encode($result_array_re[31]["reactivo"]))?></label><!--Reactivo 2 de pregunta 14-->
                                                    <input type="hidden" name="rea-depende-mi" id="cve_react-depende-mi" value="<?php echo $result_array_re[31]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="depende-mi" id="no-identifico-depende" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text"  for="no-identifico-depende"><?php echo($result_array_res[35]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="depende-mi" id="identifico-poco-depende" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-poco-depende"><?php echo($result_array_res[36]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="depende-mi" id="identifico-depende" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-depende"><?php echo($result_array_res[37]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="depende-mi" id="identifico-total-depende" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-total-depende"><?php echo($result_array_res[38]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[33]["reactivo"]))?></label><!--Reactivo 4 de pregunta 14-->
                                                    <input type="hidden" name="rea-propongo" id="cve_react-propongo" value="<?php echo $result_array_re[33]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="propongo" id="no-identifico-propongo" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-propongo"><?php echo($result_array_res[35]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="propongo" id="identifico-poco-propongo" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text"  for="identifico-poco-propongo"><?php echo($result_array_res[36]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="propongo" id="identifico-propongo" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-propongo"><?php echo($result_array_res[37]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="propongo" id="identifico-total-propongo" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text"  for="identifico-total-propongo"><?php echo($result_array_res[38]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[35]["reactivo"]))?></label><!--Reactivo 6 de pregunta 14-->
                                                    <input type="hidden" name="rea-calificaciones" id="cve_react-calificaciones" value="<?php echo $result_array_re[35]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="calificaciones" id="no-identifico-calificaciones" type="radio" value="36" required/>
                                                                    <label class="custom-control-label grey-text" for="no-identifico-calificaciones"><?php echo($result_array_res[35]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="calificaciones" id="identifico-poco-calificaciones" type="radio" value="37" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-poco-calificaciones"><?php echo($result_array_res[36]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="calificaciones" id="identifico-calificaciones" type="radio" value="38" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-calificaciones"><?php echo($result_array_res[37]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="calificaciones" id="identifico-total-calificaciones" type="radio" value="39" required/>
                                                                    <label class="custom-control-label grey-text" for="identifico-total-calificaciones"><?php echo($result_array_res[38]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-6 mt-4">
                                            <!--Pregunta 15-->
                                                <h5>15. <?php echo(utf8_encode($result_array_pre[14]["pregunta"]))?></h5>
                                                <input type="hidden" name="pregunta-15" id="cve_pregunta-15" value="<?php echo $result_array_pre[14]["cve_pregunta"]?>">
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[37]["reactivo"]))?></label><!--Reactivo 1 de pregunta 15-->
                                                    <input type="hidden" name="rea-desaniman" id="cve_react-desaniman" value="<?php echo $result_array_re[37]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="desaniman" id="no-describe-desaniman" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text" for="no-describe-desaniman"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="desaniman" id="describe-poco-desaniman" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-poco-desaniman"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="desaniman" id="describe-desaniman" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-desaniman"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="desaniman" id="describen-mucho-desaniman" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text" for="describen-mucho-desaniman"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[39]["reactivo"]))?></label><!--Reactivo 3 de pregunta 15-->
                                                    <input type="hidden" name="rea-empiezo" id="cve_react-empiezo" value="<?php echo $result_array_re[39]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="empiezo" id="no-describe-empiezo" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text" for="no-describe-empiezo"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="empiezo" id="describe-poco-empiezo" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text"  for="describe-poco-empiezo"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="empiezo" id="describe-empiezo" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text"  for="describe-empiezo"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="empiezo" id="describen-mucho-empiezo" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text"  for="describen-mucho-empiezo"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[41]["reactivo"]))?></label><!--Reactivo 5 de pregunta 15-->
                                                    <input type="hidden" name="rea-esfuerza" id="cve_react-esfuerza" value="<?php echo $result_array_re[41]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="esfuerza" id="no-describe-esfuerza" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text" for="no-describe-esfuerza"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="esfuerza" id="describe-poco-esfuerza" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-poco-esfuerza"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="esfuerza" id="describe-esfuerza" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-esfuerza"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="esfuerza" id="describen-mucho-esfuerza" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text" for="describen-mucho-esfuerza"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[43]["reactivo"]))?></label><!--Reactivo 7 de pregunta 15-->
                                                    <input type="hidden" name="rea-metas" id="cve_react-metas" value="<?php echo $result_array_re[43]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="metas" id="no-describe-metas" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text"  for="no-describe-metas"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="metas" id="describe-poco-metas" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text"  for="describe-poco-metas"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="metas" id="describe-metas" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-metas"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="metas" id="describen-mucho-metas" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text"  for="describen-mucho-metas"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mt-5">
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[38]["reactivo"]))?></label><!--Reactivo 2 de pregunta 15-->
                                                    <input type="hidden" name="rea-esmera" id="cve_react-esmera" value="<?php echo $result_array_re[38]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="esmera" id="no-describe-esmera" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text"  for="no-describe-esmera"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="esmera" id="describe-poco-esmera" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text"  for="describe-poco-esmera"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="esmera" id="describe-esmera" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-esmera"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="esmera" id="describen-mucho-esmera" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text"  for="describen-mucho-esmera"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[40]["reactivo"]))?></label><!--Reactivo 4 de pregunta 15-->
                                                    <input type="hidden" name="rea-trabaja" id="cve_react-trabaja" value="<?php echo $result_array_re[40]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabaja" id="no-describe-trabaja" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text" for="no-describe-trabaja"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="trabaja" id="describe-poco-trabaja" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text"  for="describe-poco-trabaja"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="trabaja" id="describe-trabaja" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text " for="describe-trabaja"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="trabaja" id="describen-mucho-trabaja" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text" for="describen-mucho-trabaja"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[42]["reactivo"]))?></label><!--Reactivo 6 de pregunta 15-->
                                                    <input type="hidden" name="rea-obstaculos" id="cve_react-obstaculos" value="<?php echo $result_array_re[42]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="obstaculos" id="no-describe-obstaculos" type="radio" value="40" required/>
                                                                    <label class="custom-control-label grey-text" for="no-describe-obstaculos"><?php echo($result_array_res[39]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="obstaculos" id="describe-poco-obstaculos" type="radio" value="41" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-poco-obstaculos"><?php echo($result_array_res[40]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="obstaculos" id="describe-obstaculos" type="radio" value="42" required/>
                                                                    <label class="custom-control-label grey-text" for="describe-obstaculos"><?php echo($result_array_res[41]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  for="describen-mucho-obstaculos">
                                                                    <input class="custom-control-input" name="obstaculos" id="describen-mucho-obstaculos" type="radio" value="43" required/>
                                                                    <label class="custom-control-label grey-text" for="describen-mucho-obstaculos"><?php echo($result_array_res[42]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-6 mt-5">
                                                <!--Pregunta 16-->
                                                <h5>16. <?php echo(utf8_encode($result_array_pre[15]["pregunta"]))?></h5>
                                                <input type="hidden" name="pregunta-16" id="cve_pregunta-16" value="<?php echo $result_array_pre[15]["cve_pregunta"]?>">
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[44]["reactivo"]))?></label><!--Reactivo 1 de pregunta 16-->
                                                    <input type="hidden" name="rea-digna" id="cve_react-digna" value="<?php echo $result_array_re[44]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="digna" id="total-desa-digna" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-digna"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="digna" id="desacuerdo-digna" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-digna"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="digna" id="acuerdo-digna" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-digna"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="digna" id="total-deacuerdo-digna" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-digna"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[46]["reactivo"]))?></label><!--Reactivo 3 de pregunta 16-->
                                                    <input type="hidden" name="rea-fracasado" id="cve_react-fracasado" value="<?php echo $result_array_re[46]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="fracasado" id="total-desa-fracasado" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-fracasado"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="fracasado" id="desacuerdo-fracasado" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-fracasado"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="fracasado" id="acuerdo-fracasado" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text"  for="acuerdo-fracasado"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="fracasado" id="total-deacuerdo-fracasado" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text"  for="total-deacuerdo-fracasado"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[48]["reactivo"]))?></label><!--Reactivo 5 de pregunta 16-->
                                                    <input type="hidden" name="rea-orgulloso" id="cve_react-orgulloso" value="<?php echo $result_array_re[48]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="orgulloso" id="total-desa-orgulloso" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-orgulloso"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="orgulloso" id="desacuerdo-orgulloso" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-orgulloso"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="orgulloso" id="acuerdo-orgulloso" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text"  for="acuerdo-orgulloso"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="orgulloso" id="total-deacuerdo-orgulloso" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-orgulloso"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[50]["reactivo"]))?></label><!--Reactivo 7 de pregunta 16-->
                                                    <input type="hidden" name="rea-satisfecho" id="cve_react-satisfecho" value="<?php echo $result_array_re[50]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="satisfecho" id="total-desa-satisfecho" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-satisfecho"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="satisfecho" id="desacuerdo-satisfecho" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-satisfecho"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="satisfecho" id="acuerdo-satisfecho" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-satisfecho"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="satisfecho" id="total-deacuerdo-satisfecho" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-satisfecho"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[52]["reactivo"]))?></label><!--Reactivo 9 de pregunta 16-->
                                                    <input type="hidden" name="rea-inutil" id="cve_react-inutil" value="<?php echo $result_array_re[52]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="inutil" id="total-desa-inutil" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-inutil"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="inutil" id="desacuerdo-inutil" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-inutil"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="inutil" id="acuerdo-inutil" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text"  for="acuerdo-inutil"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="inutil" id="total-deacuerdo-inutil" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text"  for="total-deacuerdo-inutil"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mt-5">
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[45]["reactivo"]))?></label><!--Reactivo 2 de pregunta 16-->
                                                    <input type="hidden" name="rea-cualidades" id="cve_react-cualidades" value="<?php echo $result_array_re[45]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cualidades" id="total-desa-cualidades" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-cualidades"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="cualidades" id="desacuerdo-cualidades" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-cualidades"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cualidades" id="acuerdo-cualidades" type="radio" value="46" required/>
                                                                    <label  class="custom-control-label grey-text" for="acuerdo-cualidades"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="cualidades" id="total-deacuerdo-cualidades" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text"  for="total-deacuerdo-cualidades"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[47]["reactivo"]))?></label><!--Reactivo 4 de pregunta 16-->
                                                    <input type="hidden" name="rea-capaz" id="cve_react-capaz" value="<?php echo $result_array_re[47]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="capaz" id="total-desa-capaz" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text"  for="total-desa-capaz"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="capaz" id="desacuerdo-capaz" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-capaz"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="capaz" id="acuerdo-capaz" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-capaz"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="capaz" id="total-deacuerdo-capaz" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-capaz"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[49]["reactivo"]))?></label><!--Reactivo 6 de pregunta 16-->
                                                    <input type="hidden" name="rea-actitud" id="cve_react-actitud" value="<?php echo $result_array_re[49]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="actitud" id="total-desa-actitud" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-actitud"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="actitud" id="desacuerdo-actitud" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text"  for="desacuerdo-actitud"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="actitud" id="acuerdo-actitud" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-actitud"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="actitud" id="total-deacuerdo-actitud" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text"  for="total-deacuerdo-actitud"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[51]["reactivo"]))?></label><!--Reactivo 8 de pregunta 16-->
                                                    <input type="hidden" name="rea-valorarme" id="cve_react-valorarme" value="<?php echo $result_array_re[51]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="valorarme" id="total-desa-valorarme" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-valorarme"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="valorarme" id="desacuerdo-valorarme" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text"  for="desacuerdo-valorarme"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="valorarme" id="acuerdo-valorarme" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-valorarme"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="valorarme" id="total-deacuerdo-valorarme" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-valorarme"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[53]["reactivo"]))?></label><!--Reactivo 10 de pregunta 16-->
                                                    <input type="hidden" name="rea-bueno" id="cve_react-bueno" value="<?php echo $result_array_re[53]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="bueno" id="total-desa-bueno" type="radio" value="44" required/>
                                                                    <label class="custom-control-label grey-text" for="total-desa-bueno"><?php echo($result_array_res[43]["respuesta"])?></label><!--Respuesta 1 de Recativo 10-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="bueno" id="desacuerdo-bueno" type="radio" value="45" required/>
                                                                    <label class="custom-control-label grey-text" for="desacuerdo-bueno"><?php echo($result_array_res[44]["respuesta"])?></label><!--Respuesta 2 de Recativo 10-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="bueno" id="acuerdo-bueno" type="radio" value="46" required/>
                                                                    <label class="custom-control-label grey-text" for="acuerdo-bueno"><?php echo($result_array_res[45]["respuesta"])?></label><!--Respuesta 3 de Recativo 10-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="bueno" id="total-deacuerdo-bueno" type="radio" value="47" required/>
                                                                    <label class="custom-control-label grey-text" for="total-deacuerdo-bueno"><?php echo($result_array_res[46]["respuesta"])?></label><!--Respuesta 4 de Recativo 10-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 mt-4">
                                                    <button type="submit" class="btn btn-block w-75 mb-4 bg-default" id="siguiente-3"><i class="icon-checkmark1"> GUARDAR</i></button>
                                                </div>
                                                <div id="msj-error" class="mt-5"></div>
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
<script type="text/javascript" src="../js/preguntas-caracteristicas.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/back.js"></script>

</html>
