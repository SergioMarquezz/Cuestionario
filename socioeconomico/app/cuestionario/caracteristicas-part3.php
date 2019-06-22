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
                <div class="col-lg-12">
                    <div class="card border-default mt-4 card-part3">
                        <div class="card-header h5-responsive badge-default text-center">CARACTERÍSTICAS PERSONALES</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" id="form-caracteri-part3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <!--Pregunta 17-->
                                                    <h5>17. <?php echo(utf8_encode($result_array_pre[16]["pregunta"]))?></h5>
                                                    <input type="hidden" name="pregunta-17" id="cve-pregunta-17" value="<?php echo $result_array_pre[16]["cve_pregunta"]?>">
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[54]["reactivo"]))?></label><!--Reactivo 1 de pregunta 17-->
                                                        <input type="hidden" name="rea-captar" id="cve_react-captar" value="<?php echo $result_array_re[54]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="captar" id="total-deac-captar" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    "  for="total-deac-captar"><?php echo($result_array_res[47]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="captar" id="desacuerdo-captar" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    " for="desacuerdo-captar"><?php echo($result_array_res[48]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  for="deacuerdo-captar">
                                                                        <input class="custom-control-input " name="captar" id="deacuerdo-captar" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    " for="deacuerdo-captar"><?php echo($result_array_res[49]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="captar" id="tatal-deacuedo-captar" type="radio" value="51" required/>
                                                                        <label class="custom-control-label grey-text    " for="tatal-deacuedo-captar"><?php echo($result_array_res[50]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[56]["reactivo"]))?></label><!--Reactivo 3 de pregunta 14-->
                                                        <input type="hidden" name="rea-predecir" id="cve_react-predecir" value="<?php echo $result_array_re[56]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="predecir" id="total-deac-predecir" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deac-predecir"><?php echo($result_array_res[47]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="predecir" id="desacuerdo-predecir" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    " for="desacuerdo-predecir"><?php echo($result_array_res[48]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="predecir" id="deacuerdo-predecir" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    " for="deacuerdo-predecir"><?php echo($result_array_res[49]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="predecir" id="total-deacuerdo-predecir" type="radio" value="51" required/>
                                                                        <label  class="custom-control-label grey-text   " for="total-deacuerdo-predecir"><?php echo($result_array_res[50]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[58]["reactivo"]))?></label><!--Reactivo 5 de pregunta 17-->
                                                        <input type="hidden" name="rea-emociones" id="cve_react-emociones" value="<?php echo $result_array_re[58]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="emociones" id="total-deac-emocion" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deac-emocion"><?php echo($result_array_res[47]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="emociones" id="desacuerdo-emocion" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    " for="desacuerdo-emocion"><?php echo($result_array_res[48]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="emociones" id="deacuerdo-emocion" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    "   for="deacuerdo-emocion"><?php echo($result_array_res[49]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="emociones" id="total-deacuerdo-emocion" type="radio" value="51" required/>
                                                                        <label class="custom-control-label grey-text    "  for="total-deacuerdo-emocion"><?php echo($result_array_res[50]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[60]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                        <input type="hidden" name="rea-ponerme" id="cve_react-ponerme" value="<?php echo $result_array_re[60]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ponerme" id="total-deac-ponerme" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deac-ponerme"><?php echo($result_array_res[47]["respuesta"])?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="ponerme" id="desacuerdo-ponerme" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    "  for="desacuerdo-ponerme"><?php echo($result_array_res[48]["respuesta"])?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ponerme" id="deacuerdo-ponerme" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    " for="deacuerdo-ponerme"><?php echo($result_array_res[49]["respuesta"])?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ponerme" id="total-deacuerdo-ponerme" type="radio" value="51" required/>
                                                                        <label  class="custom-control-label grey-text   " for="total-deacuerdo-ponerme"><?php echo($result_array_res[50]["respuesta"])?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <label for="" class="mt-4 grey-ic"><?php echo(utf8_encode($result_array_re[55]["reactivo"]))?></label><!--Reactivo 2 de pregunta 14-->
                                                        <input type="hidden" name="rea-identificar" id="cve_react-identificar" value="<?php echo $result_array_re[55]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="identificar" id="total-deac-indetificar" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    "  for="total-deac-indetificar"><?php echo($result_array_res[47]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="identificar" id="desacuerdo-identificar" type="radio" value="49" required/>
                                                                        <label  class="custom-control-label grey-text   " for="desacuerdo-identificar"><?php echo($result_array_res[48]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="identificar" id="deacuerdo-identificar" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    " for="deacuerdo-identificar"><?php echo($result_array_res[49]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="identificar" id="total-deacuerdo-identificar" type="radio" value="51" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deacuerdo-identificar"><?php echo($result_array_res[50]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[57]["reactivo"]))?></label><!--Reactivo 4 de pregunta 17-->
                                                        <input type="hidden" name="rea-entrometido" id="cve_react-entrometido" value="<?php echo $result_array_re[57]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="entrometido" id="total-deac-entrometido" type="radio" value="48" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deac-entrometido"><?php echo($result_array_res[47]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="entrometido" id="desacuerdo-entrometido" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    " for="desacuerdo-entrometido"><?php echo($result_array_res[48]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="entrometido" id="deacuerdo-entrometido" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    " for="deacuerdo-entrometido"><?php echo($result_array_res[49]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="entrometido" id="total-deacuerdo-entrometido" type="radio" value="51" required/>
                                                                        <label class="custom-control-label grey-text    " for="total-deacuerdo-entrometido"><?php echo($result_array_res[50]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[59]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                        <input type="hidden" name="rea-entiendan" id="cve_react-entiendan" value="<?php echo $result_array_re[59]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="entiendan" id="total-deac-entiendan" type="radio" value="48" required/>
                                                                        <label  class="custom-control-label grey-text   " for="total-deac-entiendan"><?php echo($result_array_res[47]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="entiendan" id="deacuerdo-entiendan" type="radio" value="49" required/>
                                                                        <label class="custom-control-label grey-text    "  for="deacuerdo-entiendan"><?php echo($result_array_res[48]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="entiendan" id="deacuerdo-entiendan" type="radio" value="50" required/>
                                                                        <label class="custom-control-label grey-text    "  for="deacuerdo-entiendan"><?php echo($result_array_res[49]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input" name="entiendan" id="total-deacuerdo-entiendan" type="radio" value="51" required/>
                                                                        <label class="custom-control-label grey-text    "  for="total-deacuerdo-entiendan"><?php echo($result_array_res[50]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6 mt-4">
                                                <!--Pregunta 18-->
                                                    <h5 class="">18. <?php echo(utf8_encode($result_array_pre[17]["pregunta"]))?></h5>
                                                    <input type="hidden" name="pregunta-18" id="cve-pregunta-18" value="<?php echo $result_array_pre[17]["cve_pregunta"]?>">
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[61]["reactivo"]))?></label><!--Reactivo 1 de pregunta 18-->
                                                        <input type="hidden" name="rea-atenciones" id="cve_react-atenciones" value="<?php echo $result_array_re[61]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="atenciones" id="algunas-atenciones" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-atenciones"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="atenciones" id="frecuente-atenciones" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-atenciones"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="atenciones" id="siempre-atenciones" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-atenciones"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="atenciones" id="nunca-atenciones" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-atenciones"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[63]["reactivo"]))?></label><!--Reactivo 3 de pregunta 15-->
                                                        <input type="hidden" name="rea-dibujos" id="cve_react-dibujos" value="<?php echo $result_array_re[63]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dibujos" id="algunas-dibujos" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-dibujos"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dibujos" id="frecuente-dibujos" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-dibujos"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dibujos" id="siempre-dibujos" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-dibujos"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="dibujos" id="nunca-dibujos" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-dibujos"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[65]["reactivo"]))?></label><!--Reactivo 5 de pregunta 15-->
                                                        <input type="hidden" name="rea-estructura" id="cve_react-estructura" value="<?php echo $result_array_re[65]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="estructura" id="algunas-estructura" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    "   for="algunas-estructura"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="estructura" id="frecuente-estructura" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-estructura"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="estructura" id="siempre-estructura" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-estructura"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="estructura" id="nunca-estructura" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-estructura"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[67]["reactivo"]))?></label><!--Reactivo 7 de pregunta 15-->
                                                        <input type="hidden" name="rea-momento" id="cve_react-momento" value="<?php echo $result_array_re[67]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="momento" id="algunas-momento" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    "   for="algunas-momento"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="momento" id="frecuente-momento" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-momento"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input"  name="momento" id="siempre-momento" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text     " for="siempre-momento"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="momento" id="nunca-momento" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-momento"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[69]["reactivo"]))?></label><!--Reactivo 7 de pregunta 15-->
                                                        <input type="hidden" name="rea-ideas" id="cve_react-ideas" value="<?php echo $result_array_re[69]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ideas" id="algunas-ideas" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-ideas"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ideas" id="frecuente-ideas" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-ideas"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ideas" id="siempre-ideas" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-ideas"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input" name="ideas" id="nunca-ideas" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    "  for="nunca-ideas"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 7-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-6 mt-5">
                                                        <label for="" class="grey-ic mt-3"><?php echo(utf8_encode($result_array_re[62]["reactivo"]))?></label><!--Reactivo 2 de pregunta 15-->
                                                        <input type="hidden" name="rea-ejemplos" id="cve_react-ejemplos" value="<?php echo $result_array_re[62]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ejemplos" id="algunas-ejemplos" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-ejemplos"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ejemplos" id="frecuente-ejemplos" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-ejemplos"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label>
                                                                        <input class="custom-control-input " name="ejemplos" id="siempre-ejmeplos" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-ejmeplos"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input" name="ejemplos" id="nunca-ejemplos" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    "  for="nunca-ejemplos"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[64]["reactivo"]))?></label><!--Reactivo 4 de pregunta 15-->
                                                        <input type="hidden" name="rea-palabras" id="cve_react-palabras" value="<?php echo $result_array_re[64]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="palabras" id="algunas-palabras" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-palabras"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="palabras" id="frecuente-palabras" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-palabras"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="palabras" id="siempre-palabras" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-palabras"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input" name="palabras" id="nunca-palabras" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    "   for="nunca-palabras"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[66]["reactivo"]))?></label><!--Reactivo 6 de pregunta 15-->
                                                        <input type="hidden" name="rea-conozco" id="cve_react-conozco" value="<?php echo $result_array_re[66]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="conozco" id="algunas-conozco" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-conozco"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="conozco" id="frecuente-conozco" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    " for="frecuente-conozco"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="conozco" id="siempre-conozco" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-conozco"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="conozco" id="nunca-conozco" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-conozco"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[68]["reactivo"]))?></label><!--Reactivo 6 de pregunta 15-->
                                                        <input type="hidden" name="rea-disponible" id="cve_react-disponible" value="<?php echo $result_array_re[68]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="disponible" id="algunas-disponible" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    " for="algunas-disponible"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="disponible" id="frecuente-disponible" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    "  for="frecuente-disponible"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="disponible" id="siempre-disponible" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-disponible"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="disponible" id="nunca-disponible" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-disponible"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[70]["reactivo"]))?></label><!--Reactivo 6 de pregunta 15-->
                                                        <input type="hidden" name="rea-especificas" id="cve_react-especificas" value="<?php echo $result_array_re[70]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="especificas" id="algunas-especificas" type="radio" value="52" required/>
                                                                        <label class="custom-control-label grey-text    "  for="algunas-especificas"><?php echo($result_array_res[51]["respuesta"])?></label><!--Respuesta 1 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="especificas" id="frecuente-especificas" type="radio" value="53" required/>
                                                                        <label class="custom-control-label grey-text    "  for="frecuente-especificas"><?php echo($result_array_res[52]["respuesta"])?></label><!--Respuesta 2 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="especificas" id="siempre-especificas" type="radio" value="54" required/>
                                                                        <label class="custom-control-label grey-text    " for="siempre-especificas"><?php echo($result_array_res[53]["respuesta"])?></label><!--Respuesta 3 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="especificas" id="nunca-especificas" type="radio" value="55" required/>
                                                                        <label class="custom-control-label grey-text    " for="nunca-especificas"><?php echo($result_array_res[54]["respuesta"])?></label><!--Respuesta 4 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-lg-6 mt-5">
                                                    <!--Pregunta 19-->
                                                    <h5>19. <?php echo(utf8_encode($result_array_pre[18]["pregunta"]))?></h5>
                                                    <input type="hidden" name="pregunta-19" id="cve-pregunta-19" value="<?php echo $result_array_pre[18]["cve_pregunta"]?>"> 
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[71]["reactivo"]))?></label><!--Reactivo 1 de pregunta 19-->
                                                        <input type="hidden" name="rea-disculpa" id="cve_react-disculpa" value="<?php echo $result_array_re[71]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label>
                                                                        <input class="custom-control-input " name="disculpa" id="nose-disculpa" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    "  for="nose-disculpa"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="disculpa" id="poco-habil-disculpa" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    " for="poco-habil-disculpa"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="disculpa" id="habil-disculpa" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    "  for="habil-disculpa"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="disculpa" id="muy-habil-disculpa" type="radio" value="59" required/>
                                                                        <label class="custom-control-label grey-text    " for="muy-habil-disculpa"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[73]["reactivo"]))?></label><!--Reactivo 3 de pregunta 19-->
                                                        <input type="hidden" name="rea-ayuda" id="cve_react-ayuda" value="<?php echo $result_array_re[73]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="ayuda" id="nose-ayuda" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    "  for="nose-ayuda"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="ayuda" id="poco-habil-ayuda" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    "  for="poco-habil-ayuda"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="ayuda" id="habil-ayuda" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    "  for="habil-ayuda"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="ayuda" id="muy-habil-ayuda" type="radio" value="59" required/>
                                                                        <label class="custom-control-label grey-text      " for="muy-habil-ayuda"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[75]["reactivo"]))?></label><!--Reactivo 5 de pregunta 19-->
                                                        <input type="hidden" name="rea-tema" id="cve_react-tema" value="<?php echo $result_array_re[75]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="tema" id="nose-tema" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    " for="nose-tema"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="tema" id="poco-habil-tema" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    "  for="poco-habil-tema"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="tema" id="habil-tema" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    "  for="habil-tema"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="tema" id="muy-habil-tema" type="radio" value="59" required/>
                                                                        <label class="custom-control-label grey-text    " for="muy-habil-tema"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 5-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-6 mt-4">
                                                        <label for="" class="grey-ic mt-5"><?php echo(utf8_encode($result_array_re[72]["reactivo"]))?></label><!--Reactivo 2 de pregunta 19-->
                                                        <input type="hidden" name="rea-dificultades" id="cve_react-dificultades" value="<?php echo $result_array_re[72]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dificultades" id="nose-dificultades" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    " for="nose-dificultades"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dificultades" id="poco-habil-dificultades" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    " for="poco-habil-dificultades"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="dificultades" id="habil-dificultades" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    " for="habil-dificultades"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="dificultades" id="muy-habil-dificultades" type="radio" value="59" required/>
                                                                        <label class="custom-control-label grey-text    " for="muy-habil-dificultades"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[74]["reactivo"]))?></label><!--Reactivo 4 de pregunta 19-->
                                                        <input type="hidden" name="rea-miedo" id="cve_react-miedo" value="<?php echo $result_array_re[74]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="miedo" id="nose-miedo" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    " for="nose-miedo"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="miedo" id="poco-habil-miedo" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    "   for="poco-habil-miedo"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="miedo" id="habil-miedo" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    "  for="habil-miedo"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="miedo" id="muy-habil-miedo" type="radio" value="59" required/>
                                                                        <label class="custom-control-label grey-text    " for="muy-habil-miedo"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 4-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[76]["reactivo"]))?></label><!--Reactivo 6 de pregunta 19-->
                                                        <input type="hidden" name="rea-critica" id="cve_react-critica" value="<?php echo $result_array_re[76]["cve_reactivo"]?>">
                                                        <div class="form-row">
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="critica" id="nose-critica" type="radio" value="56" required/>
                                                                        <label class="custom-control-label grey-text    " for="nose-critica"><?php echo(utf8_encode($result_array_res[55]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="critica" id="poco-habil-critica" type="radio" value="57" required/>
                                                                        <label class="custom-control-label grey-text    " for="poco-habil-critica"><?php echo(utf8_encode($result_array_res[56]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="critica" id="habil-critica" type="radio" value="58" required/>
                                                                        <label class="custom-control-label grey-text    "  for="habil-critica"><?php echo(utf8_encode($result_array_res[57]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input" name="critica" id="muy-habil-critica" type="radio" value="59" required/>
                                                                        <label  class="custom-control-label grey-text   "  for="muy-habil-critica"><?php echo(utf8_encode($result_array_res[58]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
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
                                                    <button type="submit" class="btn btn-block w-75 bg-default mb-4" id="siguiente-4"><i class="icon-checkmark1"> GUARDAR</i></button>
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