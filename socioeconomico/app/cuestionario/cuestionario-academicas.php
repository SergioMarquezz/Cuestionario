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
    <title>Decisiones Académicas:::UTEC</title>


    <link rel="icon" href="../img/logoHalcon.jpg">

    <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="../bootstrap/mdb.css" />
    <link rel="stylesheet" href="../plugins/css/confirm-alert.css">
    <link rel="stylesheet" href="../plugins/css/lobibox.css">
    <link rel="stylesheet" href="../icons.css">
    <link rel="stylesheet" href="../css/styles.css"/>


</head>
<body  background="../img/logo-utec-nuevo.png" onload="noRegresar()">

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
<input type="hidden" id="seccion-acedemicas" value="5">

<div class="" id="contenedor">
      <!--Contenedor del formulario-->
    <div id="page-content-wrapper" class="container-fluid">
        <div class="">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card border-default mt-4 card-acedemicas">
                        <div class="card-header h5-responsive badge-default text-center">DECISIONES ACADÉMICAS</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                 <!--Formulario-->
                                <form method="POST" class="scroller" id="form-academicas">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 33-->
                                                <input type="hidden" name="pregunta-33" id="cve_pregunta-33" value="<?php echo $result_array_pre[32]["cve_pregunta"] ?>">
                                                <h5>33. <?php echo(utf8_encode($result_array_pre[32]["pregunta"]))?></h5>
                                                <input type="hidden" name="rea-folletos" id="cve_react-folletos" value="<?php echo $result_array_re[110]["cve_reactivo"]?>">
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[110]["reactivo"]))?></label><!--Recativo 1 de pregunta 33-->
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="folletos" id="nada-folletos" type="radio" value="128" required/>
                                                                    <label  class="custom-control-label grey-text" for="nada-folletos"><?php echo($result_array_res[127]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="folletos" id="poco-folletos" type="radio" value="129" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-folletos"><?php echo($result_array_res[128]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="folletos" id="algo-folletos" type="radio" value="130" required/>
                                                                    <label  class="custom-control-label grey-text" for="algo-folletos"><?php echo($result_array_res[129]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="folletos" id="mucho-folletos" type="radio" value="131" required/>
                                                                    <label class="custom-control-label grey-text"  for="mucho-folletos"><?php echo($result_array_res[130]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="rea-paginas" id="cve_react-paginas" value="<?php echo $result_array_re[112]["cve_reactivo"]?>">
                                                    <label for="" class="mt-4 grey-ic"><?php echo(utf8_encode($result_array_re[112]["reactivo"]))?></label><!--Recativo 3 de pregunta 33-->
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="paginas" id="nada-paginas" type="radio" value="128" required/>
                                                                    <label class="custom-control-label grey-text" for="nada-paginas"><?php echo($result_array_res[127]["respuesta"])?></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="paginas" id="poco-paginas" type="radio" value="129" required/>
                                                                    <label class="custom-control-label grey-text"  for="poco-paginas"><?php echo($result_array_res[128]["respuesta"])?></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="paginas" id="algo-paginas" type="radio" value="130" required/>
                                                                    <label class="custom-control-label grey-text" for="algo-paginas"><?php echo($result_array_res[129]["respuesta"])?></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="paginas" id="mucho-paginas" type="radio" value="131" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-paginas"><?php echo( $result_array_res[130]["respuesta"])?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mt-5">
                                            <input type="hidden" name="rea-guias" id="cve_react-guias" value="<?php echo $result_array_re[111]["cve_reactivo"]?>">
                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[111]["reactivo"]))?></label><!--Recativo 2 de pregunta 33-->
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="guias" id="nada-guias" type="radio" value="128" required/>
                                                                    <label class="custom-control-label grey-text"  for="nada-guias"><?php echo($result_array_res[127]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="guias" id="poco-guias" type="radio" value="129" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-guias"><?php echo($result_array_res[128]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="guias" id="algo-guias" type="radio" value="130" required/>
                                                                    <label class="custom-control-label grey-text"  for="algo-guias"><?php echo($result_array_res[129]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="guias" id="mucho.guias" type="radio" value="131" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho.guias"><?php echo($result_array_res[130]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="rea-test" id="cve_react-test" value="<?php echo $result_array_re[113]["cve_reactivo"]?>">
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[113]["reactivo"]))?></label><!--Recativo 4 de pregunta 33-->
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="test" id="nada-test" type="radio" value="128" required/>
                                                                    <label class="custom-control-label grey-text" for="nada-test"><?php echo($result_array_res[127]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="test" id="poco-test" type="radio" value="129" required/>
                                                                    <label class="custom-control-label grey-text" for="poco-test"><?php echo($result_array_res[128]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="test" id="algo-test" type="radio" value="130" required/>
                                                                    <label class="custom-control-label grey-text"  for="algo-test"><?php echo($result_array_res[129]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="test" id="mucho-test" type="radio" value="131" required/>
                                                                    <label class="custom-control-label grey-text" for="mucho-test"><?php echo($result_array_res[130]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <!--Pregumnta 34-->
                                            <input type="hidden" name="pregunta-34" id="cve_pregunta-34" value="<?php echo $result_array_pre[33]["cve_pregunta"] ?>">
                                            <h5 class="mt-4">34. <?php echo(utf8_encode($result_array_pre[33]["pregunta"]))?></h5>
                                            <input type="hidden" name="rea-padres" id="cve_react-padres" value="<?php echo $result_array_re[114]["cve_reactivo"]?>">
                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[114]["reactivo"]))?></label><!--Reactivo 1 de pregunta 12-->
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" value="132" required name="padres" class="custom-control-input"  id="nada-padres"/>        
                                                                <label class="custom-control-label grey-text"  for="nada-padres"><?php echo(utf8_encode($result_array_res[131]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="padres" id="poco-padres" type="radio" value="133" required/>
                                                                <label class="custom-control-label grey-text" for="poco-padres"><?php echo(utf8_encode($result_array_res[132]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="padres" id="algo-padres" type="radio" value="134" required/>
                                                                <label class="custom-control-label grey-text" for="algo-padres"><?php echo(utf8_encode($result_array_res[133]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="padres" id="muchos-padres" type="radio" value="135" required/>
                                                                <label class="custom-control-label grey-text" for="muchos-padres"><?php echo(utf8_encode($result_array_res[134]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="rea-amigos" id="cve_react-amigos" value="<?php echo $result_array_re[116]["cve_reactivo"]?>">
                                                <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[116]["reactivo"]))?></label><!--Reactivo 3 de pregunta 34-->
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" value="132" required name="amigos" class="custom-control-input"  id="nada-amigos"/>        
                                                                <label class="custom-control-label grey-text"  for="nada-amigos"><?php echo(utf8_encode($result_array_res[131]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input class="custom-control-input " name="amigos" id="poco-amigos" type="radio" value="133" required/>
                                                                <label class="custom-control-label grey-text"  for="poco-amigos"><?php echo(utf8_encode($result_array_res[132]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input class="custom-control-input " name="amigos" id="algo-amigos" type="radio" value="134" required/>
                                                                <label class="custom-control-label grey-text"  for="algo-amigos"><?php echo(utf8_encode($result_array_res[133]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="amigos" id="mucho-amigos" type="radio" value="135" required/>
                                                                <label class="custom-control-label grey-text " for="mucho-amigos"><?php echo(utf8_encode($result_array_res[134]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="rea-psicologos" id="cve_react-psicologos" value="<?php echo $result_array_re[118]["cve_reactivo"]?>">
                                                <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[118]["reactivo"]))?></label><!--Reactivo 5 de pregunta 34-->
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" value="132" required name="psicologos" class="custom-control-input"  id="nada-psicologos"/>        
                                                                <label class="custom-control-label grey-text" for="nada-psicologos"><?php echo(utf8_encode($result_array_res[131]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="psicologos" id="poco-psicologos" type="radio" value="133" required/>
                                                                <label class="custom-control-label grey-text" for="poco-psicologos"><?php echo(utf8_encode($result_array_res[132]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="psicologos" id="algo-psicologos" type="radio" value="134" required/>
                                                                <label class="custom-control-label grey-text" for="algo-psicologos"><?php echo(utf8_encode($result_array_res[133]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="psicologos" id="mucho-psicologos" type="radio" value="135" required/>
                                                                <label class="custom-control-label grey-text" for="mucho-psicologos"><?php echo(utf8_encode($result_array_res[134]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-6 mt-5">
                                        <input type="hidden" name="rea-hermanos" id="cve_react-hermanos" value="<?php echo $result_array_re[115]["cve_reactivo"]?>">
                                                <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[115]["reactivo"]))?></label><!--Reactivo 2 de pregunta 12-->
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" value="132" required name="hermanos" class="custom-control-input"  id="nada-hermanos"/>        
                                                                <label class="custom-control-label grey-text" for="nada-hermanos"><?php echo(utf8_encode($result_array_res[131]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="hermanos" id="poco-hermanos" type="radio" value="133" required/>
                                                                <label  class="custom-control-label grey-text" for="poco-hermanos"><?php echo(utf8_encode($result_array_res[132]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="hermanos" id="algo-hermanos" type="radio" value="134" required/>
                                                                <label class="custom-control-label grey-text" for="algo-hermanos"><?php echo(utf8_encode($result_array_res[133]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input class="custom-control-input " name="hermanos" id="mucho-hermanos" type="radio" value="135" required/>
                                                                <label class="custom-control-label grey-text"  for="mucho-hermanos"><?php echo(utf8_encode($result_array_res[134]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="rea-profesores" id="cve_react-profesores" value="<?php echo $result_array_re[117]["cve_reactivo"]?>">
                                                <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[117]["reactivo"]))?></label><!--Reactivo 3 de pregunta 12-->
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" value="132" required name="profesores" class="custom-control-input"  id="nada-profesores"/>        
                                                                <label class="custom-control-label grey-text" for="nada-profesores"><?php echo(utf8_encode($result_array_res[131]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="profesores" id="poco-profesores" type="radio" value="133" required/>
                                                                <label  class="custom-control-label grey-text" for="poco-profesores"><?php echo(utf8_encode($result_array_res[132]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input class="custom-control-input " name="profesores" id="algo-profesores" type="radio" value="134" required/>
                                                                <label class="custom-control-label grey-text"  for="algo-profesores"><?php echo(utf8_encode($result_array_res[133]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input class="custom-control-input " name="profesores" id="mucho-profesores" type="radio" value="135" required/>
                                                                <label class="custom-control-label grey-text"  for="mucho-profesores"><?php echo(utf8_encode($result_array_res[134]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <!--Pregunta 35-->
                                            <input type="hidden" name="pregunta-35" id="cve_pregunta-35" value="<?php echo $result_array_pre[34]["cve_pregunta"] ?>">
                                            <h5 class="mt-4">35. <?php echo(utf8_encode($result_array_pre[34]["pregunta"]))?></h5>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <label  >
                                                            <input class="custom-control-input " name="exanii" id="si-exanii" type="radio" value="136" required/>
                                                            <label class="custom-control-label grey-text" for="si-exanii"><?php echo(utf8_encode($result_array_res[135]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-radio">
                                                        <label  >
                                                            <input class="custom-control-input " name="exanii" id="no-exanii" type="radio" value="137" required/>
                                                            <label class="custom-control-label grey-text" for="no-exanii"><?php echo(utf8_encode($result_array_res[136]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="pregunta-36" id="cve_pregunta-36" value="<?php echo $result_array_pre[35]["cve_pregunta"] ?>">
                                            <h5 class="mt-4">36. <?php echo(utf8_encode($result_array_pre[35]["pregunta"]))?></h5>
                                            <div class="form-row">
                                                <div class="col-lg-6">
                                                        <input type="hidden" name="rea-curso-escuela" id="cve_react-curso-escuela" value="<?php echo $result_array_re[119]["cve_reactivo"]?>">  
                                                        <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[119]["reactivo"]))?></label><!--Reactivo 1 de pregunta 36-->
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="curso-escuela" id="si-curso-escuela" type="radio" value="138" required/>
                                                                        <label class="custom-control-label grey-text"  for="si-curso-escuela"><?php echo(utf8_encode($result_array_res[137]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label >
                                                                        <input class="custom-control-input " name="curso-escuela" id="no-curso-escuela" type="radio" value="139" required/>
                                                                        <label class="custom-control-label grey-text"  for="no-curso-escuela"><?php echo(utf8_encode($result_array_res[138]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="rea-curso-particular" id="cve_react-curso-particular" value="<?php echo $result_array_re[120]["cve_reactivo"]?>">
                                                        <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[120]["reactivo"]))?></label><!--Reactivo 2 de pregunta 36-->
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="curso-particular" id="si-curso-particular" type="radio" value="138" required/>
                                                                        <label class="custom-control-label grey-text"  for="si-curso-particular"><?php echo(utf8_encode($result_array_res[137]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="curso-particular" id="no-curso-particular" type="radio" value="139" required/>
                                                                        <label class="custom-control-label grey-text" for="no-curso-particular"><?php echo(utf8_encode($result_array_res[138]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="rea-curso-maestro" id="cve_react-curso-maestro" value="<?php echo $result_array_re[121]["cve_reactivo"]?>">
                                                        <label for="" class="mt-3 grey-ic"><?php echo(utf8_encode($result_array_re[121]["reactivo"]))?></label><!--Reactivo 2 de pregunta 36-->
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="curso-maestro" id="si-curso-maestro" type="radio" value="138" required/>
                                                                        <label  class="custom-control-label grey-text" for="si-curso-maestro"><?php echo(utf8_encode($result_array_res[137]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="custom-control custom-radio">
                                                                    <label  >
                                                                        <input class="custom-control-input " name="curso-maestro" id="no-curso-maestro" type="radio" value="139" required/>
                                                                        <label class="custom-control-label grey-text" for="no-curso-maestro"><?php echo(utf8_encode($result_array_res[138]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                                    </label>
                                                                </div>
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
                                                    <button type="submit" class="btn btn-block bg-default w-75 mb-4" id="guardar-academicas">
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
</body >



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
<script type="text/javascript" src="../js/preguntas-academicas.js"></script>
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/back.js"></script>
</html>