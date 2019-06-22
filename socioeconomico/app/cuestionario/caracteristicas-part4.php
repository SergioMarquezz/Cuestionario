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

<div class="d-flex" id="contenedor">
    
      <!--Contenedor del formulario-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">CARACTERÍSTICAS PERSONALES</div>
                        <div class="card-body mt-5">
                            <blockquote class="blockquote">
                                 <!--Formulario-->
                                <form method="POST" class="scroller" id="form-caracteristi-part4">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 20-->
                                                <input type="hidden" name="pregunta-20" id="cve_pregunta-20" value="<?php echo $result_array_pre[19]["cve_pregunta"] ?>">
                                                <h5>20. <?php echo(utf8_encode($result_array_pre[19]["pregunta"]))?></h5>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[77]["reactivo"]))?></label><!--Reactivo 1 de pregunta 17-->
                                                    <input type="hidden" name="rea-escolares" id="cve-react-escolares" value="<?php echo $result_array_re[77]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="escolares" id="nose-escolares" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-escolares"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="escolares" id="poco-habil-escolares" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-escolares"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="escolares" id="habil-escolares" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-escolares"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="escolares" id="muy-habil-escolares" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-escolares"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[79]["reactivo"]))?></label><!--Reactivo 3 de pregunta 14-->
                                                    <input type="hidden" name="rea-musica" id="cve-react-musica" value="<?php echo $result_array_re[79]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="musica" id="nose-musica" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text"  for="nose-musica"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="musica" id="poco-habil-musica" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-musica"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="musica" id="habil-musica" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-musica"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="musica" id="muy-habil-musica" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-musica"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[81]["reactivo"]))?></label><!--Reactivo 5 de pregunta 17-->
                                                    <input type="hidden" name="rea-ingles" id="cve-react-ingles" value="<?php echo $result_array_re[81]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ingles" id="nose-ingles" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-ingles"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ingles" id="poco-habil-ingles" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-habil-ingles"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ingles" id="habil-ingles" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-ingles"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ingles" id="my-habil-ingles" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="my-habil-ingles"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[83]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                    <input type="hidden" name="rea-verbal" id="cve-react-verbal" value="<?php echo $result_array_re[83]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="verbal" id="nose-verbal" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-verbal"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="verbal" id="poco-habil-verbal" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-habil-verbal"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="verbal" id="habil-verbal" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-verbal"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="verbal" id="muy-habil-verbal" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-verbal"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[85]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                    <input type="hidden" name="rea-ordenar" id="cve-react-ordenar" value="<?php echo $result_array_re[85]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ordenar" id="nose-ordenar" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-ordenar"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ordenar" id="poco-habil-ordenar" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-ordenar"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ordenar" id="habil-ordenar" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-ordenar"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ordenar" id="muy-habil-ordenar" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-ordenar"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[87]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                    <input type="hidden" name="rea-opinion" id="cve-react-opinion" value="<?php echo $result_array_re[87]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="opinion" id="nose-opinion" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text"  for="nose-opinion"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="opinion" id="poco-habil-opinion" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-habil-opinion"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="opinion" id="habil-opinion" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text "  for="habil-opinion"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="opinion" id="muy-habil-opinion" type="radio" value="63" required/>
                                                                    <label  class="custom-control-label grey-text"  for="muy-habil-opinion"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[89]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                    <input type="hidden" name="rea-laboratorio" id="cve-react-laboratorio" value="<?php echo $result_array_re[89]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="laboratorio" id="nose-laboratorio" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-laboratorio"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="laboratorio" id="poco-habil-laboraorio" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-laboraorio"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="laboratorio" id="habil-laboratorio" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-laboratorio"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="laboratorio" id="muy-habil-laboratorio" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-laboratorio"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[91]["reactivo"]))?></label><!--Reactivo 7 de pregunta 17-->
                                                    <input type="hidden" name="rea-dialogo" id="cve-react-dialogo" value="<?php echo $result_array_re[91]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dialogo" id="nose-dialogo" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-dialogo"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dialogo" id="poco-habil-dialogo" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-dialogo"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dialogo" id="habil-dialogo" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-dialogo"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dialogo" id="muy-habil-dialogo" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-dialogo"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="" class="mt-4 grey-ic"><?php echo(utf8_encode($result_array_re[78]["reactivo"]))?></label><!--Reactivo 2 de pregunta 14-->
                                                    <input type="hidden" name="rea-dificultad" id="cve-react-dificultad" value="<?php echo $result_array_re[78]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dificultad" id="nose-dificultad" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-dificultad"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="dificultad" id="poco-habil-dificultad" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-dificultad"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="dificultad" id="habil-dificultad" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-dificultad"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="dificultad" id="muy-habil-dificultad" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-dificultad"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[80]["reactivo"]))?></label><!--Reactivo 4 de pregunta 17-->
                                                    <input type="hidden" name="rea-saludable" id="cve-react-saludable" value="<?php echo $result_array_re[80]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="saludable" id="nose-saludable" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-saludable"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="saludable" id="dpoco-habil-saludable" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="dpoco-habil-saludable"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="saludable" id="habil-saludable" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-saludable"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="saludable" id="muy-habil-saludable" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-saludable"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[82]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-escrito" id="cve-react-escrito" value="<?php echo $result_array_re[82]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="escrito" id="nose-escrito" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-escrito"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="escrito" id="poco-habil-escrito" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-escrito"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="escrito" id="habil-escrito" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-escrito"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="escrito" id="muy-habil-escrito" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-escrito"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[84]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-excel" id="cve-react-excel" value="<?php echo $result_array_re[84]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="excel" id="nose-excel" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-excel"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="excel" id="poco-habil-excel" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-habil-excel"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="excel" id="habil-excel" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-excel"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="excel" id="muy-habil-excel" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text"  for="muy-habil-excel"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[86]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-objetivo" id="cve-react-objetivo" value="<?php echo $result_array_re[86]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="objetivo" id="nose-objetivo" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-objetivo"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="objetivo" id="poco-habil-objetivo" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-habil-objetivo"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="objetivo" id="habil-objetivo" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text"  for="habil-objetivo"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="objetivo" id="muy-habil-objetivo" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text"  for="muy-habil-objetivo"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[88]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-aprender" id="cve-react-aprender" value="<?php echo $result_array_re[88]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="aprender" id="nose-aprender" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-aprender"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="aprender" id="poco-habil-aprender" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-aprender"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="aprender" id="habil-aprender" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-aprender"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="aprender" id="muy-habil-aprender" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-aprender"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[90]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-leyes" id="cve-react-leyes" value="<?php echo $result_array_re[90]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="leyes" id="nose-leyes" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-leyes"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="leyes" id="poco-habil-leyes" type="radio" value="61" required/>
                                                                    <label  class="custom-control-label grey-text"  for="poco-habil-leyes"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="leyes" id="habil-leyes" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-leyes"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="leyes" id="muy-habil-leyes" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-leyes"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[92]["reactivo"]))?></label><!--Reactivo 6 de pregunta 17-->
                                                    <input type="hidden" name="rea-ambiente" id="cve-react-ambiente" value="<?php echo $result_array_re[92]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ambiente" id="nose-ambiente" type="radio" value="60" required/>
                                                                    <label class="custom-control-label grey-text" for="nose-ambiente"><?php echo(utf8_encode($result_array_res[59]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ambiente" id="poco-habil-ambiente" type="radio" value="61" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-habil-ambiente"><?php echo(utf8_encode($result_array_res[60]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ambiente" id="habil-ambiente" type="radio" value="62" required/>
                                                                    <label class="custom-control-label grey-text" for="habil-ambiente"><?php echo(utf8_encode($result_array_res[61]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="ambiente" id="muy-habil-ambiente" type="radio" value="63" required/>
                                                                    <label class="custom-control-label grey-text" for="muy-habil-ambiente"><?php echo(utf8_encode($result_array_res[62]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-6">
                                            <!--Pregunta 21-->
                                            <input type="hidden" name="pregunta-21" id="cve_pregunta-21" value="<?php echo $result_array_pre[20]["cve_pregunta"] ?>">
                                                <h5 class="mt-4">21. <?php echo(utf8_encode($result_array_pre[20]["pregunta"]))?></h5>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input class="custom-control-input " name="max-estudios" id="tecnico" type="radio" value="64" required/>
                                                                <label class="custom-control-label grey-text" for="tecnico"><?php echo(utf8_encode($result_array_res[63]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div> 
                                                        <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input class="custom-control-input " name="max-estudios" id="licenciatura" type="radio" value="65" required/>
                                                                <label class="custom-control-label grey-text" for="licenciatura"><?php echo(utf8_encode($result_array_res[64]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input class="custom-control-input " name="max-estudios" id="posgrado" type="radio" value="66" required/>
                                                                <label class="custom-control-label grey-text" for="posgrado"><?php echo(utf8_encode($result_array_res[65]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-6">
                                                <!--Pregunta 22-->
                                                <input type="hidden" name="pregunta-22" id="cve_pregunta-22" value="<?php echo $result_array_pre[21]["cve_pregunta"] ?>">
                                                <h5 class="mt-4">22. <?php echo(utf8_encode($result_array_pre[21]["pregunta"]))?></h5> 
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[93]["reactivo"]))?></label><!--Reactivo 1 de pregunta 19-->
                                                    <input type="hidden" name="rea-golpearan" id="cve-react-golpearan" value="<?php echo $result_array_re[93]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="golpearan" id="no-sucedio-golpear" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text"  for="no-sucedio-golpear"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="golpearan" id="nada-golpearan" type="radio" value="68" required/>
                                                                    <label class="custom-control-label grey-text" for="nada-golpearan"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="golpearan" id="poco-golperan" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-golperan"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="golpearan" id="algo-golpearan" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-golpearan"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input" name="golpearan" id="mucho-golperan" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-golperan"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[95]["reactivo"]))?></label><!--Reactivo 3 de pregunta 19-->
                                                    <input type="hidden" name="rea-ignorar" id="cve-react-ignorar" value="<?php echo $result_array_re[95]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="ignorar" id="no-sucedio-ignorar" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text" for="no-sucedio-ignorar"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ignorar" id="nada-ignorar" type="radio" value="68" required/>
                                                                    <label  class="custom-control-label grey-text" for="nada-ignorar"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ignorar" id="poco-ignorar" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-ignorar"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="ignorar" id="algo-ignorar" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-ignorar"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input" name="ignorar" id="mucho-ignorar" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-ignorar"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[97]["reactivo"]))?></label><!--Reactivo 5 de pregunta 19-->
                                                    <input type="hidden" name="rea-facebook" id="cve-react-facebook" value="<?php echo $result_array_re[97]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="facebook" id="no-sucedio-face" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text" for="no-sucedio-face"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="facebook" id="nada-face" type="radio" value="68" required/>
                                                                    <label class="custom-control-label grey-text"  for="nada-face"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="facebook" id="poco-face" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-face"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="facebook" id="algo-face" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-face"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="facebook" id="mucho-face" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text"  for="mucho-face"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                                    <label for="" class="grey-ic mt-5"><?php echo(utf8_encode($result_array_re[94]["reactivo"]))?></label><!--Reactivo 2 de pregunta 19-->
                                                    <input type="hidden" name="rea-groserias" id="cve-react-groserias" value="<?php echo $result_array_re[94]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="groserias" id="no-sucedio-groserias" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text" for="no-sucedio-groserias"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="groserias" id="nada-groserias" type="radio" value="68" required/>
                                                                    <label class="custom-control-label grey-text"  for="nada-groserias"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="groserias" id="poco-groserias" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-groserias"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="groserias" id="algo-groserias" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text"  for="algo-groserias"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="groserias" id="mucho-groserias" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-groserias"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[96]["reactivo"]))?></label><!--Reactivo 4 de pregunta 19-->
                                                    <input type="hidden" name="rea-robar" id="cve-react-robar" value="<?php echo $result_array_re[96]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="robar" id="no-sucedio-robar" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text" for="no-sucedio-robar"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="robar" id="nada-robar" type="radio" value="68" required/>
                                                                    <label class="custom-control-label grey-text" for="nada-robar"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="robar" id="poco-robar" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-robar"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="robar" id="algo-robar" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-robar"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input" name="robar" id="mucho-robar" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-robar"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[98]["reactivo"]))?></label><!--Reactivo 6 de pregunta 19-->
                                                    <input type="hidden" name="rea-forzar" id="cve-react-forzar" value="<?php echo $result_array_re[98]["cve_reactivo"] ?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="forzar" id="no-sucedio-forzar" type="radio" value="67" required/>
                                                                    <label class="custom-control-label grey-text" for="no-sucedio-forzar"><?php echo(utf8_encode($result_array_res[66]["respuesta"]))?></label><!--Respuesta 1 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="forzar" id="nada-forzar" type="radio" value="68" required/>
                                                                    <label class="custom-control-label grey-text" for="nada-forzar"><?php echo(utf8_encode($result_array_res[67]["respuesta"]))?></label><!--Respuesta 2 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="forzar" id="poco-forzar" type="radio" value="69" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-forzar"><?php echo(utf8_encode($result_array_res[68]["respuesta"]))?></label><!--Respuesta 3 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="forzar" id="algo-forzar" type="radio" value="70" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-forzar"><?php echo(utf8_encode($result_array_res[69]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="forzar" id="mucho-forzar" type="radio" value="71" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-forzar"><?php echo(utf8_encode($result_array_res[70]["respuesta"]))?></label><!--Respuesta 4 de Recativo 6-->
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
                                                    <button type="submit" class="btn btn-block bg-default w-75 mb-4" id="guardar-caracteristicas">
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