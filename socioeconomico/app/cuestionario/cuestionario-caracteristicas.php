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
<input type="hidden" id="seccion-caracteristicas-personales" value="3">

<div class="row justify-content-center">
    <div class="col-lg-6">
        <img src="../img/Log0.png" alt="logo-bis" class="img-fluid">
    </div>
</div>



<div class="d-flex" id="contenedor">

      <!--Contenedor del formulario-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-default mt-4">
                        <div class="card-header h5-responsive badge-default text-center">CARACTEÍSTICAS PERSONALES</div>
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <form method="POST" class="scroller" id="form-caracteristicas">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <!--Pregunta 11-->
                                                <h5>11. <?php echo(utf8_encode($result_array_pre[10]["pregunta"]))?></h5>
                                                <input type="hidden" id="cve-pregunta-11" value="<?php echo $result_array_pre[10]["cve_pregunta"]?>" name="pregunta-11">
                                                    <label  class="grey-ic"><?php echo(utf8_encode($result_array_re[12]["reactivo"]))?></label><!--Recativo 1 de pregunta 11-->
                                                    <input type="hidden" name="rea-participo" id="reac-participo" value="<?php echo $result_array_re[12]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" name="participo" id="casi-nunca-fre" type="radio" value="24" required/>
                                                                <label class="custom-control-label grey-text" for="casi-nunca-fre"><?php echo($result_array_res[23]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input " name="participo" id="algunas-veces-fre" type="radio" value="25" required/>
                                                                <label class="custom-control-label grey-text" for="algunas-veces-fre"><?php echo($result_array_res[24]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input " name="participo" id="frecuentemente-fre" type="radio" value="26" required/>
                                                                <label class="custom-control-label grey-text"  for="frecuentemente-fre"><?php echo($result_array_res[25]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input " name="participo" id="casi-siempre-fre" type="radio" value="27" required/>
                                                                <label class="custom-control-label grey-text" for="casi-siempre-fre"><?php echo($result_array_res[26]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="grey-ic mt-4"><?php echo($result_array_re[14]["reactivo"])?></label><!--Recativo 3 de pregunta 11-->
                                                    <input type="hidden" name="rea-intervengo" id="reac-intervengo" value="<?php echo $result_array_re[14]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input " name="intervengo" id="casi-nunca-tratar" type="radio" value="24" required/>
                                                                <label class="custom-control-label grey-text"  for="casi-nunca-tratar"><?php echo($result_array_res[23]["respuesta"])?></label><!--Respuesta 1 de Recativo 3-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" name="intervengo" id="algunas-veces-tratar" type="radio" value="25" required/>
                                                                <label class="custom-control-label grey-text" for="algunas-veces-tratar"><?php echo($result_array_res[24]["respuesta"])?></label><!--Respuesta 2 de Recativo 3-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input " name="intervengo" id="frecuentemente-tratar" type="radio" value="26" required/>
                                                                <label class="custom-control-label grey-text" for="frecuentemente-tratar"><?php echo($result_array_res[25]["respuesta"])?></label><!--Respuesta 3 de Recativo 3-->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="intervengo" id="casi-siempre-tratar" type="radio" value="27" required/>
                                                                    <label class="custom-control-label grey-text " for="casi-siempre-tratar"><?php echo($result_array_res[26]["respuesta"])?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[16]["reactivo"]))?></label><!--Recativo 5 de pregunta 11-->
                                                    <input type="hidden" name="rea-cumplo" id="reac-cumplo" value="<?php echo $result_array_re[16]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="cumplo" id="casi-nunca-tareas" type="radio" value="24" required/>
                                                                    <label class="custom-control-label grey-text" for="casi-nunca-tareas"><?php echo($result_array_res[23]["respuesta"])?></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cumplo" id="algunas-veces-tareas" type="radio" value="25" required/>
                                                                    <label class="custom-control-label grey-text " for="algunas-veces-tareas"><?php echo($result_array_res[24]["respuesta"])?></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cumplo" id="frecuentemente-tareas" type="radio" value="26" required/>
                                                                    <label class="custom-control-label grey-text " for="frecuentemente-tareas"><?php echo($result_array_res[25]["respuesta"])?></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="cumplo" id="casi-siempre-tareas" type="radio" value="27" required/>
                                                                    <label class="custom-control-label grey-text" for="casi-siempre-tareas"><?php echo($result_array_res[26]["respuesta"])?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-6 mt-4">
                                           
                                                    <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[13]["reactivo"]))?></label><!--Recativo 2 de pregunta 11-->
                                                    <input type="hidden" name="rea-colaboro" id="reac-colaboro" value="<?php echo $result_array_re[13]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="colaboro" id="casi-nunca-metas" type="radio" value="24" required/>
                                                                    <label class="custom-control-label grey-text"  for="casi-nunca-metas"><?php echo($result_array_res[23]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="colaboro" id="algunas-veces-metas" type="radio" value="25" required/>
                                                                    <label class="custom-control-label grey-text " for="algunas-veces-metas"><?php echo($result_array_res[24]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="colaboro" id="frecuentemente-metas" type="radio" value="26" required/>
                                                                    <label class="custom-control-label grey-text " for="frecuentemente-metas"><?php echo($result_array_res[25]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="colaboro" id="casi-siempre-metas" type="radio" value="27" required/>
                                                                    <label  class="custom-control-label grey-text " for="casi-siempre-metas"><?php echo($result_array_res[26]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-3"><?php echo(utf8_encode($result_array_re[15]["reactivo"]))?></label><!--Recativo 4 de pregunta 11-->
                                                    <input type="hidden" name="rea-sugerencias" id="reac-sugerencias" value="<?php echo $result_array_re[15]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="sugerencias" id="casi-nunca-suge" type="radio" value="24" required/>
                                                                    <label class="custom-control-label grey-text " for="casi-nunca-suge"><?php echo($result_array_res[23]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="sugerencias" id="algunas-veces-suge" type="radio" value="25" required/>
                                                                    <label class="custom-control-label grey-text"  for="algunas-veces-suge"><?php echo($result_array_res[24]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="sugerencias" id="frecuentemente-suge" type="radio" value="26" required/>
                                                                    <label class="custom-control-label grey-text "  for="frecuentemente-suge"><?php echo($result_array_res[25]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="sugerencias" id="casi-siempre-suge" type="radio" value="27" required/>
                                                                    <label class="custom-control-label grey-text " for="casi-siempre-suge"><?php echo($result_array_res[26]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <!--Pregumnta 12-->
                                            <h5 class="mt-5">12. <?php echo(utf8_encode($result_array_pre[11]["pregunta"]))?></h5>
                                            <input type="hidden" id="cve-pregunta-12" value="<?php echo $result_array_pre[11]["cve_pregunta"]?>" name="pregunta-12">
                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[17]["reactivo"]))?></label><!--Reactivo 1 de pregunta 12-->
                                                <input type="hidden" name="rea-presentar" id="reac-presentar" value="<?php echo $result_array_re[17]["cve_reactivo"]?>">
                                                <div class="form-row">
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" name="presentar" class="custom-control-input"  id="nose-trabajo" value="28" required/>        
                                                                <label for="nose-trabajo" class="custom-control-label grey-text"><?php echo(utf8_encode($result_array_res[27]["respuesta"]))?></label><!--Respuesta 1 de Recativo 1-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="presentar" id="poco-habil-trabajo" type="radio" value="29" required/>
                                                                <label class="custom-control-label grey-text" for="poco-habil-trabajo"><?php echo(utf8_encode($result_array_res[28]["respuesta"]))?></label><!--Respuesta 2 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="presentar" id="habil-trabajo" type="radio" value="30" required/>
                                                                <label class="custom-control-label grey-text" for="habil-trabajo"><?php echo(utf8_encode($result_array_res[29]["respuesta"]))?></label><!--Respuesta 3 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="presentar" id="muy-habil-trabajo" type="radio" value="31" required/>
                                                                <label class="custom-control-label grey-text " for="muy-habil-trabajo"><?php echo(utf8_encode($result_array_res[30]["respuesta"]))?></label><!--Respuesta 4 de Recativo 1-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[19]["reactivo"]))?></label><!--Reactivo 3 de pregunta 12-->
                                                <input type="hidden" name="rea-participar" id="reac-participar" value="<?php echo $result_array_re[19]["cve_reactivo"]?>">
                                                <div class="form-row">
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" name="participar" class="custom-control-input"  id="nose-participar" value="28" required/>        
                                                                <label class="custom-control-label grey-text" for="nose-participar"><?php echo(utf8_encode($result_array_res[27]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="participar" id="poco-habil-participar" type="radio" value="29" required/>
                                                                <label class="custom-control-label grey-text" for="poco-habil-participar"><?php echo(utf8_encode($result_array_res[28]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="participar" id="habil-participar" type="radio" value="30" required/>
                                                                <label class="custom-control-label grey-text " for="habil-participar"><?php echo(utf8_encode($result_array_res[29]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="participar" id="muy-habil-participar" type="radio" value="31" required/>
                                                                <label class="custom-control-label grey-text" for="muy-habil-participar"><?php echo(utf8_encode($result_array_res[30]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-6 mt-5">
                                                <label for="" class="grey-ic mt-5"><?php echo(utf8_encode($result_array_re[18]["reactivo"]))?></label><!--Reactivo 2 de pregunta 12-->
                                                <input type="hidden" name="rea-conversar" id="reac-conversar" value="<?php echo $result_array_re[18]["cve_reactivo"]?>">
                                                <div class="form-row">
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" name="conversar" class="custom-control-input"  id="nose-conversar" value="28" required/>        
                                                                <label class="custom-control-label grey-text" for="nose-conversar"><?php echo(utf8_encode($result_array_res[27]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input class="custom-control-input " name="conversar" id="poco-habil-conversar" type="radio" value="29" required/>
                                                                <label class="custom-control-label grey-text"   for="poco-habil-conversar"><?php echo(utf8_encode($result_array_res[28]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="conversar" id="habil-conversar" type="radio" value="30" required/>
                                                                <label class="custom-control-label grey-text " for="habil-conversar"><?php echo(utf8_encode($result_array_res[29]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="conversar" id="muy-habil-conversar" type="radio" value="31" required/>
                                                                <label class="custom-control-label grey-text" for="muy-habil-conversar"><?php echo(utf8_encode($result_array_res[30]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="" class="grey-ic mt-3"><?php echo(utf8_encode($result_array_re[20]["reactivo"]))?></label><!--Reactivo 3 de pregunta 12-->
                                                <input type="hidden" name="rea-dudas" id="reac-dudas" value="<?php echo $result_array_re[20]["cve_reactivo"]?>">
                                                <div class="form-row">
                                                    <div class="col-lg-3">
                                                        <div class="custom-control custom-radio">
                                                            <label >
                                                                <input type="radio" name="dudas" class="custom-control-input"  id="nose-dudas" value="28" required/>        
                                                                <label class="custom-control-label grey-text" for="nose-dudas"><?php echo(utf8_encode($result_array_res[27]["respuesta"]))?></label><!--Respuesta 1 de Recativo 2-->
                                                            </label>      
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label>
                                                                <input class="custom-control-input " name="dudas" id="poco-habil-dudas" type="radio" value="29" required/>
                                                                <label for="poco-habil-dudas" class="custom-control-label grey-text"><?php echo(utf8_encode($result_array_res[28]["respuesta"]))?></label><!--Respuesta 2 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="dudas" id="habil-dudas" type="radio" value="30" required/>
                                                                <label class="custom-control-label grey-text" for="habil-dudas"><?php echo(utf8_encode($result_array_res[29]["respuesta"]))?></label><!--Respuesta 3 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="custom-control custom-radio">
                                                            <label  >
                                                                <input class="custom-control-input " name="dudas" id="muy-habil-dudas" type="radio" value="31" required/>
                                                                <label class="custom-control-label grey-text"  for="muy-habil-dudas"> <?php echo(utf8_encode($result_array_res[30]["respuesta"]))?></label><!--Respuesta 4 de Recativo 2-->
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mt-5">
                                            <!--Pregunta 13-->
                                            <h5>13. <?php echo(utf8_encode($result_array_pre[12]["pregunta"]))?></h5>
                                            <input type="hidden" id="cve-pregunta-13" value="<?php echo $result_array_pre[12]["cve_pregunta"]?>" name="pregunta-13">
                                                <label for="" class="grey-ic"><?php echo(utf8_encode($result_array_re[21]["reactivo"]))?></label><!--Recativo 1 de pregunta 13-->
                                                <input type="hidden" name="rea-falto" id="reac-falto" value="<?php echo $result_array_re[21]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="falto" id="nunca-clases" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-clases"><?php echo($result_array_res[31]["respuesta"])?></label><!--Respuesta 1 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="falto" id="algunas-clases" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text"  for="algunas-clases"><?php echo($result_array_res[32]["respuesta"])?></label><!--Respuesta 2 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="falto" id="frecuente-clases" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text "  for="frecuente-clases"><?php echo($result_array_res[33]["respuesta"])?></label><!--Respuesta 3 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="falto" id="siempre-clases" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-clases"><?php echo($result_array_res[34]["respuesta"])?></label><!--Respuesta 4 de Recativo 1-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[23]["reactivo"]))?></label><!--Recativo 3 de pregunta 13-->
                                                    <input type="hidden" name="rea-materiales" id="reac-materiales" value="<?php echo $result_array_re[23]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="materiales" id="nunca-materiales" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-materiales"><?php echo(utf8_encode($result_array_res[31]["respuesta"]))?></label><!--Respuesta 1 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="materiales" id="algunas-materiales" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text"  for="algunas-materiales"><?php echo(utf8_encode($result_array_res[32]["respuesta"]))?></label><!--Respuesta 2 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="materiales" id="frecuente-materiales" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text"  for="frecuente-materiales"><?php echo(utf8_encode($result_array_res[33]["respuesta"]))?></label><!--Respuesta 3 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="materiales" id="siempre-materiales" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-materiales"><?php echo(utf8_encode($result_array_res[34]["respuesta"]))?></label><!--Respuesta 4 de Recativo 3-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[25]["reactivo"]))?></label><!--Recativo 5 de pregunta 13-->
                                                    <input type="hidden" name="rea-tiempo-estudiar" id="reac-tiempo-estudiar" value="<?php echo $result_array_re[25]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudiar" id="nunca-estudiar" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-estudiar"><?php echo(utf8_encode($result_array_res[31]["respuesta"]))?></label><!--Respuesta 1 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudiar" id="algunas-estudiar" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-estudiar"><?php echo(utf8_encode($result_array_res[32]["respuesta"]))?></label><!--Respuesta 2 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudiar" id="frecuente-estudiar" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text" for="frecuente-estudiar"><?php echo(utf8_encode($result_array_res[33]["respuesta"]))?></label><!--Respuesta 3 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="estudiar" id="siempre-estudiar" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-estudiar"><?php echo(utf8_encode($result_array_res[34]["respuesta"]))?></label><!--Respuesta 4 de Recativo 5-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[27]["reactivo"]))?></label><!--Recativo 7 de pregunta 13-->
                                                    <input type="hidden" name="rea-ejercicios" id="reac-ejercicios" value="<?php echo $result_array_re[27]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ejercicios" id="nunca-ejercicios" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-ejercicios"><?php echo(utf8_encode($result_array_res[31]["respuesta"]))?></label><!--Respuesta 1 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  for="algunas-ejercicios">
                                                                    <input class="custom-control-input " name="ejercicios" id="algunas-ejercicios" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-ejercicios"><?php echo(utf8_encode($result_array_res[32]["respuesta"]))?></label><!--Respuesta 2 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="ejercicios" id="frecuente-ejercicios" type="radio" value="34" required/>
                                                                    <label  class="custom-control-label grey-text" for="frecuente-ejercicios"><?php echo(utf8_encode($result_array_res[33]["respuesta"]))?></label><!--Respuesta 3 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="ejercicios" id="siempre-ejercicios" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-ejercicios"><?php echo(utf8_encode($result_array_res[34]["respuesta"]))?></label><!--Respuesta 4 de Recativo 7-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[29]["reactivo"]))?></label><!--Recativo 9 de pregunta 13-->
                                                    <input type="hidden" name="rea-extracurricular" id="reac-extracurricular" value="<?php echo $result_array_re[29]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="extracurricular" id="nunca-extracurricular" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-extracurricular"><?php echo(utf8_encode($result_array_res[31]["respuesta"]))?></label><!--Respuesta 1 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="extracurricular" id="algunas-extracurricular" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-extracurricular"><?php echo(utf8_encode($result_array_res[32]["respuesta"]))?></label><!--Respuesta 2 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="extracurricular" id="frecuente-extracurricular" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text " for="frecuente-extracurricular"><?php echo(utf8_encode($result_array_res[33]["respuesta"]))?></label><!--Respuesta 3 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="extracurricular" id="siempre-extracurricular" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-extracurricular"><?php echo(utf8_encode($result_array_res[34]["respuesta"]))?></label><!--Respuesta 4 de Recativo 9-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                                    
                                            <div class="col-md-6 mt-5">
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[22]["reactivo"]))?></label><!--Recativo 2 de pregunta 14-->
                                                    <input type="hidden" name="rea-clase" id="reac-clase" value="<?php echo $result_array_re[22]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="clase" id="nunca-clase" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text"  for="nunca-clase"><?php echo($result_array_res[31]["respuesta"])?></label><!--Respuesta 1 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="clase" id="algunas-clase" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-clase"><?php echo($result_array_res[32]["respuesta"])?></label><!--Respuesta 2 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="clase" id="frecuente-clase" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text" for="frecuente-clase"><?php echo($result_array_res[33]["respuesta"])?></label><!--Respuesta 3 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="clase" id="siempre-clase" type="radio" value="35" required/>
                                                                    <label  class="custom-control-label grey-text"  for="siempre-clase"><?php echo($result_array_res[34]["respuesta"])?></label><!--Respuesta 4 de Recativo 2-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[24]["reactivo"]))?></label><!--Recativo 4 de pregunta 13-->
                                                    <input type="hidden" name="rea-participar-clases" id="reac-participar-clases" value="<?php echo $result_array_re[24]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="participar-clases" id="nunca-participar" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-participar"><?php echo($result_array_res[31]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="participar-clases" id="algunas-participar" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-participar"><?php echo($result_array_res[32]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="participar-clases" id="frecuente-participar" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text" for="frecuente-participar"><?php echo($result_array_res[33]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input" name="participar-clases" id="siempre-participar" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-participar"> <?php echo($result_array_res[34]["respuesta"]) ?></label> <!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-4"><?php echo(utf8_encode($result_array_re[26]["reactivo"]))?></label><!--Recativo 6 de pregunta 14-->
                                                    <input type="hidden" name="rea-tareas" id="reac-tareas" value="<?php echo $result_array_re[26]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label>
                                                                    <input class="custom-control-input " name="tareas" id="nunca-tareas" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-tareas"><?php echo($result_array_res[31]["respuesta"])?></label><!--Respuesta 1 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                                    <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="tareas" id="algunas-tareas" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text " for="algunas-tareas"><?php echo($result_array_res[32]["respuesta"])?></label><!--Respuesta 2 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="tareas" id="frecuente-tareas" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text" for="frecuente-tareas"><?php echo($result_array_res[33]["respuesta"])?></label><!--Respuesta 3 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="tareas" id="siempre-tareas" type="radio" value="35" required/>
                                                                    <label  class="custom-control-label grey-text" for="siempre-tareas"><?php echo($result_array_res[34]["respuesta"])?></label><!--Respuesta 4 de Recativo 4-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="" class="grey-ic mt-5"><?php echo(utf8_encode($result_array_re[28]["reactivo"]))?></label><!--Recativo 8 de pregunta 14-->
                                                    <input type="hidden" name="rea-atencion" id="reac-atencion" value="<?php echo $result_array_re[28]["cve_reactivo"]?>">
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label >
                                                                    <input class="custom-control-input " name="atencion" id="nunca-atencion" type="radio" value="32" required/>
                                                                    <label class="custom-control-label grey-text" for="nunca-atencion"><?php echo($result_array_res[31]["respuesta"])?></label><!--Respuesta 1 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="atencion" id="algunas-atencion" type="radio" value="33" required/>
                                                                    <label class="custom-control-label grey-text" for="algunas-atencion"><?php echo($result_array_res[32]["respuesta"])?></label><!--Respuesta 2 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="atencion" id="frecuente-atencion" type="radio" value="34" required/>
                                                                    <label class="custom-control-label grey-text" for="frecuente-atencion"><?php echo($result_array_res[33]["respuesta"])?></label><!--Respuesta 3 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="custom-control custom-radio">
                                                                <label  >
                                                                    <input class="custom-control-input " name="atencion" id="siempre-atencion" type="radio" value="35" required/>
                                                                    <label class="custom-control-label grey-text" for="siempre-atencion"><?php echo($result_array_res[34]["respuesta"])?></label><!--Respuesta 4 de Recativo 8-->
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <footer>
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 mt-3">
                                                    <button type="submit" class="btn btn-block w-75 bg-default mb-5" id="siguiente"><i class="icon-checkmark1"> GUARDAR</i></button>
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
<script type="text/javascript" src="../js/iniciar-session.js"></script>
<script type="text/javascript" src="../js/preguntas-caracteristicas.js"></script>
<script type="text/javascript" src="../js/back.js"></script>

</html>